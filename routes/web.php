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

Route::get('/', function () {

    $data=[];
    $data['id']=1;
    $data['name']='mohamed eid';
    $data['age']=25;
    return view('welcome',$data);
});

Route::get('/test', function () {
    return view('landing');
});

Route::get('/show-number/{id}', function ($var) {
    return $var;
})->name('');

Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('');


Route::resource('news','Newscontroller');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('redirect/{service}','SocailController@redirect');
Route::get('callback/{service}','SocailController@callback');
