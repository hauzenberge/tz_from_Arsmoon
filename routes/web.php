<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
     Route::get('/home', 'HomeController@index')->name('home');
     Route::prefix('/employeer')->group(function () {
        Route::get('/edit/{id}', 'EmploeerController@edit');
        Route::any('/update/{id}', 'EmploeerController@update');

        Route::get('/delete/{id}', 'EmploeerController@destroy');

        Route::any('/add', function () {
            return view('employeer.add');
        });
        Route::any('/store', 'EmploeerController@store');
     });

     Route::prefix('/text')->group(function () {
        Route::get('/', function () {
            return view('text',[
                'result' => 'Please, Enter string in format^ "H4,H4,H3,WY21W,W5W,W5W,WY21W,W21/5W,W21/5W,W21W,W16W,W5W"'
            ]);
        });

        Route::any('/store', 'TextController@store');
     });
});