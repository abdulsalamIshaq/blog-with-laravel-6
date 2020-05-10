<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PostController@index');
Route::get('post/{id}/{title}', 'PostController@show')->name('post');
Route::post('post/{id}/{title}', 'commentController@store')->name('post');
Route::get('category/{id}/{slug}', 'categoryController@show')->name('category');
Route::any('/search', 'searchController@mySearch');
Route::any('/page/{title}', 'pageController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/b', function(){
    $str = 'Hello How are you';
    $ex = explode(' ', $str);
    $im = implode(' ', $ex);
    $l = strlen($im);
    for ($i = 0; $i < $l; $i++){
        echo $ex[$i];
    }
    echo '<a href=>'.implode(' ', $ex);
});