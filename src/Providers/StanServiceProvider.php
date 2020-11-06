<?php

declare(strict_types=1);

namespace ARKEcosystem\Stan;

use Illuminate\Support\ServiceProvider;

class StanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
    }

    /**
     * Register the publishers.
     *
     * @return void
     */
    public function registerPublishers(): void
    {
        $this->publishes([
            __DIR__.'/../stubs/.php_cs'      => base_path('.php_cs'),
            __DIR__.'/../stubs/phpstan.neon' => base_path('phpstan.neon'),
            __DIR__.'/../stubs/psalm.xml'    => base_path('psalm.xml'),
            __DIR__.'/../stubs/phpunit.xml'  => base_path('phpunit.xml'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../stubs/.github' => base_path('.github'),
        ], 'workflows');
    }
}
