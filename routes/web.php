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

// Route::get('/home', 				            'HomeController@index')->name('home');
Route::resource('about-us',			            'AboutUsController');
Route::resource('contact-us',			        'ContactUsController');
Route::resource('news-and-events',		        'BlogController');
// Route::resource('about-us',			        'AboutUsController');
Route::resource('our-products',			        'ProductController');
Route::resource('agriculture',			        'AgricultureController');
Route::resource('automation-system',			'AutomationController');
Route::resource('energy',			            'EnergyController');
Route::resource('engineering',			        'EngineeringController');
Route::resource('material-research',			'materialController');
Route::resource('medicine',			            'MedicineController');
Route::resource('photonic-technology',			'PhotonicController');
Route::resource('transportation-engineering',	'TransportationController');
Route::resource('food-tech',	                'FoodController');

