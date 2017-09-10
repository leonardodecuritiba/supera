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

Route::get( '/', function () {
	return view( 'welcome' );
} )->name( 'index' );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::group( [ 'prefix' => 'configs' ], function () {
	/*
	|--------------------------------------------------------------------------
	| Brands Routes
	|--------------------------------------------------------------------------
	|
	*/
	Route::resource( 'brands', 'Configs\BrandsController' );

	/*
	|--------------------------------------------------------------------------
	| Kinships Routes
	|--------------------------------------------------------------------------
	|
	*/
	Route::resource( 'kinships', 'Configs\KinshipsController' );

	/*
	|--------------------------------------------------------------------------
	| PhoneType Routes
	|--------------------------------------------------------------------------
	|
	*/
	Route::resource( 'phone_types', 'Configs\PhoneTypesController' );


	/*
	|--------------------------------------------------------------------------
	| Units Routes
	|--------------------------------------------------------------------------
	|
	*/
	Route::resource( 'units', 'Configs\UnitsController' );
} );

Route::resource( 'patients', 'Patients\PatientsController' );