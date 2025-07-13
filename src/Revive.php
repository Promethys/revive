<?php

namespace Promethys\Revive;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Promethys\Revive\RevivePlugin;

class Revive
{
    public static function getRecyclableModels()
    {
        $models = [];
        $modelNamespace = RevivePlugin::get()->getModelsNamespace();

        foreach (File::allFiles(app_path('Models')) as $file) {
            $modelClass = $modelNamespace . pathinfo($file->getFilename(), PATHINFO_FILENAME);

            if (class_exists($modelClass) && is_subclass_of($modelClass, Model::class)) {
                if (in_array('Promethys\Revive\Concerns\Recyclable', class_uses_recursive($modelClass))) {
                    $models[$modelClass] = class_basename($modelClass);
                }
            }
        }

        return $models;
    }

    // /**
    //  * All models in recycle bin for all Recyclable classes.
    //  */
    // public static function showAllTrashed()
    // {
    //     $models = array_keys(static::getRecyclableModels());

    //     return collect($models)->mapWithKeys(fn (string $className) => [$className => self::showTrashed($className)->get()]);
    // }

    // /**
    //  * All models in recycle bin for given class.
    //  *
    //  * @param  class-string<Model>|Model  $model
    //  */
    // public static function showTrashed(string|Model $model): Builder
    // {
    //     $class = is_string($model) ? $model : get_class($model);

    //     return $class::onlyTrashed()->selectRaw(
    //         "'$class' as model_type, id, deleted_at"
    //     );
    // }

    // /**
    //  * Restore the model.
    //  *
    //  * @param  class-string<Model>|object  $model
    //  */
    // public static function restoreTrashed(string|object $model, string $id = null): void
    // {
    //     if (is_object($model)) {
    //         $model::withTrashed()->restore();
    //     } else {
    //         $model::withTrashed()->find($id)->restore();
    //     }
    // }

    // /**
    //  * Force delete the model.
    //  *
    //  * @param  class-string<Model>|object  $model
    //  */
    // public static function forceDeleteTrashed(string|object $model, string $id = null): void
    // {
    //     if (is_object($model)) {
    //         $model::withTrashed()->forceDelete();
    //     } else {
    //         $model::withTrashed()->find($id)->forceDelete();
    //     }
    // }
}