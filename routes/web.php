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
  Route::get('/dasboard', 'BlogController@dasboard');
  

  Route::get('/create', 'BlogController@create');
  Route::post('/', 'BlogController@store');


  Route::get('/{id}', 'BlogController@show')->name('link');

  Route::get('/{id}/edit', 'BlogController@edit')->name('ngedit');
  Route::put('/{id}', 'BlogController@update');

  Route::delete('/{id}', 'BlogController@destroy');

});



Auth::routes();
Route::get('/blogUser', 'BlogUserController@index');
Route::get('/{id}', 'BlogController@show')->name('link');


//organisasi
Route::get('/organisasi/create', 'OrganisasiController@create');
Route::post('/organisasi', 'OrganisasiController@store');
Route::get('/organisasi/dasboard', 'OrganisasiController@dasboard');

  Route::get('/organisasi/{id}', 'OrgainsasiController@show');

  Route::get('/organisasi/{id}/edit', 'OrganisasiController@edit')->name('ngedit');




//profile
Route::get('/profile/create', 'ProfileController@create')->middleware('auth');
Route::post('/profile', 'ProfileController@store');


//uks
Route::get('/uks/create', 'UksController@create');
Route::post('/uks', 'UksController@store');


//Santri
Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store');

//Dasboard

