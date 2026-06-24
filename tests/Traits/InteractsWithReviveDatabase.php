<?php

namespace Promethys\Revive\Tests\Traits;

trait InteractsWithReviveDatabase 
{
    public function runReviveMigrations()
    {
        $migrations = glob(dirname(__DIR__, 2) . '/database/migrations/*.stub');

        foreach($migrations as $path) {
            $migration = include $path;
            $migration->up();
        }
    }
}
