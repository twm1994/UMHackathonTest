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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','InventoryController@index');
// Route::get('/','DummyController@index');
Route::get('/','ChartController@load');
// Route::get('/','ApiController@index');
// Route::get('/','MealController@collectData');
// Route::get('/m','MealController@exportData');
// Route::get('/meals','MealController@collectData');
// Route::get('/charts','ChartController@all');
Route::get('/line','ChartController@line');
Route::get('/bar','ChartController@bar');
Route::get('/pie','ChartController@pie');
Route::get('/bubble','ChartController@bubble');
Route::get('/i','FilterInputController@index');
