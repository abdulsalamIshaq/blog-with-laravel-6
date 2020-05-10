<?php

namespace App\Providers;

use App\Category;
use App\Post;
//use Doctrine\DBAL\Schema\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TCG\Voyager\Models\Page;

class ComposerServiceProvider extends ServiceProvider
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
        //
        View::composer('layouts.*', function($view){
            $view->with('cats', Category::with('post')->get());
        });

        View::composer('layouts.*', function ($view) {
            $view->with('page', Page::all());
        });

        View::composer('layouts.*', function ($view) {
            $view->with('w_post', Post::with('category')->orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3));
        });

    }
}
