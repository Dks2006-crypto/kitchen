<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
	{

        $this->loadViewsFrom(base_path('resources/views/website/post'),'post');
    	$this->loadViewsFrom(base_path('resources/views/website/contact'), 'contact');
	}
}
