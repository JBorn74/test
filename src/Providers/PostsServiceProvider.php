<?php

namespace JBorn74\Posts\Providers;
//namespace JBorn74\Posts\Providers;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;
use JBorn74\Posts\Commands\PostCommand;


class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        dd(1);
        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        AboutCommand::add('Posts', fn () => ['Version' => '1.0.0']);
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);
        $this->publishes([
            __DIR__.'/../config/posts.php' => config_path('posts.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                \JBorn74\Posts\Console\Commands\PostCommand::class,

            ]);
        }
    }
}
