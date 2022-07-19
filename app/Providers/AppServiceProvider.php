<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Settings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      Schema::defaultStringLength(191);
      
      View::composer('layouts.frontend', function ($view) {
        $view->with(['settings' => Settings::all(), 'categories' => Category::all(), 'featuredposts' => Post::where('category_id', '3')->get()]);
      });

      Paginator::useBootstrap();
    }
}
