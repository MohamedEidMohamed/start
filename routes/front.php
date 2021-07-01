<?php

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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['namespace'=>'Front','prefix'=>LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function (){
    Route::get('profile','Frontcontroller@show');
    Route::get('profile3','Frontcontroller@showindex');
    Route::get('site','Frontcontroller@landingpage');
    Route::get('store','CrudController@insertmethod');

    Route::group(["prefix"=>'pages'],function (){
        Route::get('form','CrudController@show_offer');
        Route::post('store','CrudController@insert_offer')->name('store');
        Route::get('offers','CrudController@show_all');
    });

});


Route::get('/front', function () {
    return 'hello admin';
});
/*
Route::prefix('users')->group(function (){
    Route::get('show',);
    Route::delete('delete',);
    Route::put('update',);
    Route::get('edit',);
});
*/
Route::group(['prefix'=>'users'],function (){
    Route::get('/',function (){
        return 'works';
    });
});
