<?php
namespace Pmmotors\Pmtest;
use Illuminate\Support\ServiceProvider;

class PmTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadViewsFrom(__DIR__.'/views', 'pmtest');
      $this->publishes([
        __DIR__.'/views' => base_path('resources/views/pmmotors/pmtest'),
    ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      include __DIR__.'/routes.php';
      $this->app->make('Pmmotors\Pmtest\TestController');
    }
}
