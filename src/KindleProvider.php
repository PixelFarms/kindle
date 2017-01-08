<?php

namespace PixelFarms\LaravelBase;

use Illuminate\Support\ServiceProvider;

class LaravelBaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        //$value = config('courier.option');

        $this->publishes([
        __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
    ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
            /*
     * Register the service provider for the dependency.
     */
    //$this->app->register('LucaDegasperi\OAuth2Server\OAuth2ServerServiceProvider');
    /*
     * Create aliases for the dependency.
     */
//    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
 //   $loader->alias('AuthorizationServer', 'LucaDegasperi\OAuth2Server\Facades\AuthorizationServerFacade');
   // $loader->alias('ResourceServer', 'LucaDegasperi\OAuth2Server\Facades\ResourceServerFacade');

                //
        //Barryvdh\Debugbar\ServiceProvider::class,
//'Debugbar' => Barryvdh\Debugbar\Facade::class,
        $this->app->register('Barryvdh\Debugbar\ServiceProvider::class');
        //AliasLoader::getInstance()->alias("Debugbar",'Barryvdh\Debugbar\Facade::class');

        $this->app->bind('pixelfarms-laravelbase', function() {
            return new LaravelBase();
        });
    }
}
