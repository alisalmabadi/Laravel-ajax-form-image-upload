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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/add-note',[
    'uses'=>'UserController@show',
    'middleware'=>'auth'
]);
Route::post('/add-note','UserController@store')->name('add-note');
Route::get('/index','UserController@index');
Route::get('/product/add',['uses'=>'ProductController@add',
    'middleware'=>'auth'
])->name('product-add');
Route::post('/product/add',['uses'=>'ProductController@show',
    'middleware'=>'auth'
])->name('product-add');

Route::get('productdesigner','productDesigner@index');

Route::get('productest',['uses'=>'ProductestController@index']);
Route::post('productest',['uses'=>'ProductestController@post']);

Route::post('saveproduct',['uses'=>'SaveProductController@save',
    'middleware'=>'auth'
    ]);
