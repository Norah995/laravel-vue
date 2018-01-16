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
php artisan key:generate
*/
use App\Rol;
use App\Country;
use App\City;

Route::get('/', function () {
    return view('welcome');
});
//esto se haria en un controlador lista de usuario
// y q se comunique con un modelo
//composer install npm install 
//ir al proyecto apppru.js y poner la ruta en la url usuario
Route::get('listarole', function(){
	$rol = Rol::get();
	//$rol = Rol::orderBy('id', 'DESC')->take(5)->get();
	return $rol;
});

Route::get('/lispa', function () {
    return view('pais');
});

Route::get('listacountry', function(){
	$country = Country::get();
	//$rol = Rol::orderBy('id', 'DESC')->take(5)->get();
	return $country;
});

Route::get('listacity', function(){
	$city = City::get();
	//$rol = Rol::orderBy('id', 'DESC')->take(5)->get();
	return $city;
});