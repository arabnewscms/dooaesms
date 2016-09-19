<?php
namespace Dooae\Phpanonymous;

use Illuminate\Support\ServiceProvider;
use Dooae\Phpanonymous\Doo;
use Config;
class DooSmsPhpAnonymous extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
        __DIR__.'/config' => base_path('config'),
      ]);

      $this->publishes([
        __DIR__.'/lang' => base_path('resources/lang/'.Config::get('app.locale')),
      ]);

       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       
            $this->app['Doo'] = $this->app->share(function($app)
            {
                return new Doo();
            });

    }
}


 