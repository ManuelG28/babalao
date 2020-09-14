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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

/*
Routes for Review
*/
Route::get('/review/create/{product_id}', 'ReviewController@create')->name('review.create');

Route::post('/review/save/{product_id}', 'ReviewController@save')->name('review.save');

/*
Routes for User
*/
Route::get('/user', 'UserController@showInformation')->name('user.showInformation');

Auth::routes();

/*
Routes for CreditCard
*/
Route::get('/card/create', 'CreditCardController@create')->name("card.create");

Route::post('/card/save', 'CreditCardController@save')->name("card.save");

Route::get('/card/list/', 'CreditCardController@list')->name("card.list");

Route::delete('/card/list/delete/{id}','CreditCardController@delete')->name("card.delete");
