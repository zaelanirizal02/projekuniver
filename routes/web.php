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
use App\Models\Artikel;
use Illuminate\Http\Request;

Route::get('/', 'Indexcontroller@index');
Route::group(['prefix' => 'blog','middleware' => 'auth'], function (){
  Route::get('/', 'BlogController@index')->middleware('auth');

  Route::get('/create', 'BlogController@create');
  Route::post('/', 'BlogController@store');

  Route::get('/{id}', 'BlogController@show')->name('link');

  Route::get('/{id}/edit', 'BlogController@edit');
  Route::put('/{id}', 'BlogController@update');

  Route::delete('/{id}', 'BlogController@destroy');
});



Auth::routes();
Route::get('/blogUser', 'BlogUserController@index');
Route::get('/{id}', 'BlogController@show')->name('link');


//organisasi
Route::get('/organisasi/home', 'OrganisasiController@index');

Route::get('/organisasi/create', 'OrganisasiController@create');
Route::post('/organisasi', 'OrganisasiController@store');

Route::get('/organisasi/{id}', 'OrganisasiController@show')->name('link');

Route::get('/organisasi/{id}/edit', 'OrganisasiController@edit')->name('ngedit');
Route::put('/organisasi/{id}', 'OrganisasiController@update');

Route::delete('/organisasi/{id}', 'OrganisasiController@destroy');



//profile
Route::get('/profile/home', 'ProfileController@index');

Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');

Route::get('/profile/{id}', 'ProfileController@show')->name('link');

Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('ngedit');
Route::put('/profile/{id}', 'ProfileController@update');

Route::delete('/profile/{id}', 'ProfileController@destroy');


//uks
Route::get('/uks/home', 'UksController@index');

Route::get('/uks/create', 'UksController@create');
Route::post('/uks', 'UksController@store');

Route::get('/uks/{id}', 'UksController@show')->name('link');

Route::get('/uks/{id}/edit', 'UksController@edit')->name('ngedit');
Route::put('/uks/{id}', 'UksController@update');

Route::delete('/uks/{id}', 'UksController@destroy');




//Santri
Route::get('/santri/home', 'SantriController@index');
Route::get('/santri/export_excel', 'SantriController@export_excel');
Route::post('/santri/import_excel', 'SantriController@import_excel');

Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store');

Route::get('/santri/{id}', 'SantriController@show')->name('link');

Route::get('/santri/{id}/edit', 'SantriController@edit')->name('ngedit');
Route::put('/santri/{id}', 'SantriController@update');

Route::delete('/santri/{id}', 'SantriController@destroy');
