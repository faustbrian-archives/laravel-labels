<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Labels.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Labels\Providers;

use Illuminate\Support\ServiceProvider;

class LabelsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/labels.php', 'labels');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/labels.php' => $this->app->configPath('labels.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../database/migrations/' => $this->app->databasePath('migrations'),
            ], 'migrations');
        }
    }
}
