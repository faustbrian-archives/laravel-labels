<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Labels.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Labels\Providers;

use Illuminate\Support\ServiceProvider;

class LabelsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

            $this->publishes([
                __DIR__.'/../database/migrations/' => $this->app->databasePath('migrations'),
            ], 'migrations');
        }
    }
}
