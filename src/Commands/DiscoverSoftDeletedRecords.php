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
                           {--dry-run : Show what would be discovered without making changes}
                           {--model= : Specific model to discover (optional)}';

    /**
     * The console command description.
     */
    protected $description = 'Discover existing soft-deleted records from recyclable models';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $models = Revive::getRecyclableModels();
        $specificModel = $this->option('model');
        $dryRun = $this->option('dry-run');

        if (empty($models)) {
            $this->warn('No recyclable models found. Make sure your models use the Recyclable trait.');

            return 1;
        }

        // Filter to specific model if provided
        if ($specificModel) {
            $models = array_filter($models, function ($modelName, $modelClass) use ($specificModel) {
                return $modelName === $specificModel || $modelClass === $specificModel;
            }, ARRAY_FILTER_USE_BOTH);

            if (empty($models)) {
                $this->error("Model '{$specificModel}' not found in recyclable models.");

                return 1;
            }
        }

        $this->info('Discovering soft-deleted records...');
        $this->newLine();

        $totalDiscovered = 0;
        $totalProcessed = 0;

        foreach ($models as $modelClass => $modelName) {
            if (! $this->modelUsesSoftDeletes($modelClass)) {
                $this->warn("⚠️  Model {$modelName} doesn't use SoftDeletes trait. Skipping...");

                continue;
            }

            try {
                $this->line("🔍 Scanning <info>{$modelName}</info>...");

                $trashedRecords = $modelClass::onlyTrashed()->get();
                $discoveredCount = 0;

                if ($trashedRecords->isEmpty()) {
                    $this->line('   No soft-deleted records found.');
                } else {
                    foreach ($trashedRecords as $record) {
                        if ($this->shouldDiscoverRecord($record, $dryRun)) {
                            $discoveredCount++;

                            if (! $dryRun) {
                                $this->discoverRecord($record);
                            }
                        }
                    }

                    $action = $dryRun ? 'would be discovered' : 'discovered';
                    $this->line("   ✅ {$discoveredCount}/{$trashedRecords->count()} records {$action}");
                }

                $totalDiscovered += $discoveredCount;
                $totalProcessed += $trashedRecords->count();

            } catch (\Exception $e) {
                $this->error("❌ Error processing {$modelName}: " . $e->getMessage());

                continue;
            }
        }

        $this->newLine();

        if ($dryRun) {
            $this->info('🔍 Dry run completed:');
            $this->info("   • {$totalProcessed} total soft-deleted records found");
            $this->info("   • {$totalDiscovered} records would be discovered");
            $this->newLine();
            $this->comment('Run without --dry-run to actually discover the records.');
        } else {
            $this->info('✨ Discovery completed:');
            $this->info("   • {$totalProcessed} total soft-deleted records scanned");
            $this->info("   • {$totalDiscovered} new records discovered and added to recycle bin");
        }

        return 0;
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
    private function shouldDiscoverRecord($record, $dryRun)
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
