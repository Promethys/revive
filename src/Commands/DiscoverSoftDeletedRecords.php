<?php

namespace Promethys\Revive\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Promethys\Revive\Revive;

class DiscoverSoftDeletedRecords extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'revive:discover-soft-deleted
                            {--model= : Specific model to discover (class name or full class path)}
                            {--dry-run : Preview changes without making them}
                            {--with-scope : Include user/tenant scoping information}';

    /**
     * The console command description.
     */
    protected $description = 'Discover existing soft-deleted records from recyclable models';

    protected int $totalDiscovered = 0;

    protected int $totalProcessed = 0;

    protected array $modelStats = [];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Discovering soft-deleted records...');
        $this->newLine();

        $models = $this->getModelsToDiscover();

        if (empty($models)) {
            $this->warn('No models found with the Recyclable trait.');

            return 1;
        }

        foreach ($models as $modelClass => $modelName) {
            if (! $this->modelUsesSoftDeletes($modelClass)) {
                $this->warn("⚠️  Model {$modelName} doesn't use SoftDeletes trait. Skipping...");

                continue;
            }

            try {
                $this->discoverModelRecords($modelClass, $modelName);
            } catch (\Exception $e) {
                $this->error("❌ Error processing {$modelName}: " . $e->getMessage());

                continue;
            }
        }

        $this->newLine();

        $this->displaySummary();

        return 1;
    }

    protected function getModelsToDiscover()
    {
        $models = Revive::getRecyclableModels();
        $specificModel = $this->option('model');

        if (empty($models)) {
            $this->warn('No recyclable models found. Make sure your models use the Recyclable trait.');

            return [];
        }

        // Filter to specific model if provided
        if ($specificModel) {
            $models = array_filter($models, function ($modelName, $modelClass) use ($specificModel) {
                return $modelName === $specificModel || $modelClass === $specificModel;
            }, ARRAY_FILTER_USE_BOTH);

            if (empty($models)) {
                $this->error("Model '{$specificModel}' not found in recyclable models.");

                return [];
            }
        }

        return $models;
    }

    protected function discoverModelRecords($modelClass, $modelName)
    {
        $this->line("🔍 Scanning <info>{$modelName}</info>...");

        $trashedRecords = $modelClass::onlyTrashed()->get();
        $discoveredCount = 0;

        if ($trashedRecords->isEmpty()) {
            $this->line('   No soft-deleted records found.');

            // $this->modelStats[$modelClass] = [
            //     'scanned' => 0,
            //     'discovered' => 0,
            //     'already_tracked' => 0
            // ];
            return;
        } else {
            foreach ($trashedRecords as $record) {
                if ($this->shouldDiscoverRecord($record)) {
                    $discoveredCount++;

                    if (! $this->option('dry-run')) {
                        $this->discoverRecord($record);
                    }
                }
            }

            $action = $this->option('dry-run') ? 'would be discovered' : 'discovered';
            $this->line("   ✅ {$discoveredCount}/{$trashedRecords->count()} records {$action}");
        }

        $this->totalDiscovered += $discoveredCount;
        $this->totalProcessed += $trashedRecords->count();
        // $this->modelStats[$modelClass] = [
        //     'scanned' => $totalSoftDeleted,
        //     'discovered' => $discoveredCount,
        //     'already_tracked' => $alreadyTrackedCount
        // ];
    }

    protected function displaySummary()
    {
        $this->newLine();

        if ($this->option('dry-run')) {
            $this->info('🔍 Dry run completed:');
        } else {
            $this->info('✨ Discovery completed:');
        }

        $this->line("   • {$this->totalProcessed} total soft-deleted records found");
        $this->line("   • {$this->totalDiscovered}" . ($this->option('dry-run') ? ' records would be discovered' : ' new records discovered and added to recycle bin'));

        if ($this->option('with-scope')) {
            $this->newLine();
            $this->line('🔍 User/tenant scoping information was ' . ($this->option('dry-run') ? 'analyzed' : 'included'));
        }

        // Detailed breakdown
        if ($this->getOutput()->isVerbose()) {
            $this->newLine();
            $this->line('📊 Detailed breakdown:');

            foreach ($this->modelStats as $modelClass => $stats) {
                // FIXME: restore removed `getShortClassName` method
                // $name = $this->getShortClassName($modelClass);
                $name = $modelClass;

                if (isset($stats['error'])) {
                    $this->line("   • {$name}: Error - {$stats['error']}");
                } else {
                    $this->line("   • {$name}: {$stats['discovered']} discovered, {$stats['already_tracked']} already tracked");
                }
            }
        }

        if ($this->option('dry-run')) {
            $this->newLine();
            $this->comment('This was a dry run. No changes were made to the database.');
            $this->comment('Run without --dry-run to actually add these records to the recycle bin.');
        }
    }

    /**
     * Check if model uses SoftDeletes trait
     */
    private function modelUsesSoftDeletes($modelClass)
    {
        return in_array(SoftDeletes::class, class_uses_recursive($modelClass));
    }

    /**
     * Check if a record should be discovered
     */
    private function shouldDiscoverRecord($record)
    {
        return is_null($record->recycleBinItem);
    }

    /**
     * Discover and track a soft-deleted record
     */
    private function discoverRecord($record)
    {
        $record->recycleBinItem()->create([
            'state' => $record,
            'deleted_at' => $record->deleted_at,
        ]);
    }
}
