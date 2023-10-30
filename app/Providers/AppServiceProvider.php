<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        
         //inside AppServiceProvider register method:

        // view()->composer('shared.navbar', function($view){
        //     //get all parent categories with their subcategories
        //     $categories = Category::where('parent_id', 0)->with('subcategories')->get();
        //     //attach the categories to the view.     
        //     $view->with(compact('categories'));
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
        Paginator::useBootstrapFive();

        View::composer('layouts.frontend', function ($view) {
            $view->with('categories', Category::where('status', true)->select('id','slug','name')->get());
        });
    }

   

}
