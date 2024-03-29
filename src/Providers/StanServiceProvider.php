<?php

declare(strict_types=1);

namespace Konceiver\Stan\Providers;

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
        $this->publishes([
            base_path('vendor/konceiver/stan/stubs/.php_cs')      => base_path('.php_cs'),
            base_path('vendor/konceiver/stan/stubs/phpstan.neon') => base_path('phpstan.neon'),
            base_path('vendor/konceiver/stan/stubs/psalm.xml')    => base_path('psalm.xml'),
            base_path('vendor/konceiver/stan/stubs/phpunit.xml')  => base_path('phpunit.xml'),
        ], 'config');

        $this->publishes([
            base_path('vendor/konceiver/stan/stubs/.github') => base_path('.github'),
        ], 'workflows');
    }
}
