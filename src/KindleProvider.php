<?php

namespace PixelFarms\kindle;

use Illuminate\Support\ServiceProvider;

class kindleServiceProvider extends ServiceProvider
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
            __DIR__.'/kindle-config.php' => config_path('kindle-config.php'),
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

        $this->app->bind('pixelfarms-kindle', function() {
            return new kindle();
        });
    }
}
