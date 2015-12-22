<?php

namespace StartupWrench\JobFeed;

use Illuminate\Support\ServiceProvider;

class JobFeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewFrom(__DIR__.'/views', 'jobFeed');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/patrickcurl/jobFeed'), 
            __DIR__.'/config/jobfeed.php' => config_path('jobfeed.php'),
            ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('StartupWrench\JobFeed\JobFeedController');
    }
}
 