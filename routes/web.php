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

//
// Route::group(['prefix' => 'blog','middleware' => 'auth'], function (){
//   Route::get('/', 'BlogController@index')->middleware('auth');
//   Route::get('/dasboard', 'BlogController@dasboard');
//   Route::get('/create', 'BlogController@create');
//   Route::post('/', 'BlogController@store');
//   Route::get('/{id}', 'BlogController@show')->name('linkartikel');
//   Route::get('/{id}/edit', 'BlogController@edit')->name('ngeditartikel');
//   Route::put('/{id}', 'BlogController@update');
//   Route::delete('/{id}', 'BlogController@destroy');
//
// });

Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{id}', 'BlogController@show')->name('linkartikel');
Route::get('/blog/{id}/edit', 'BlogController@edit')->name('ngeditartikel');
Route::post('/blog/{id}', 'BlogController@update');
Route::delete('/blog/{id}', 'BlogController@destroy');




Auth::routes();
Route::get('/blogUser', 'BlogUserController@index');
Route::get('/{id}', 'BlogController@show')->name('link');


//akun
Route::get('/auth/register','RegisterController@create');

//organisasi
Route::get('/organisasi/home', 'OrganisasiController@index');
Route::get('/organisasi/create', 'OrganisasiController@create');
Route::post('/organisasi', 'OrganisasiController@store');
Route::get('/organisasi/{id}', 'OrganisasiController@show')->name('linkorganisasi');
Route::get('/organisasi/{id}/edit', 'OrganisasiController@edit')->name('ngeditorganisasi');
Route::post('/organisasi/{id}', 'OrganisasiController@update');
Route::delete('/organisasi/{id}', 'OrganisasiController@destroy');



//profile

// Route::group(['prefix' => 'profile','middleware' => 'auth'], function (){
// Route::get('/home', 'ProfileController@index');
// Route::get('/create', 'ProfileController@create');
// Route::post('', 'ProfileController@store');
// Route::get('/{id}', 'ProfileController@show')->name('linkprofile');
// Route::get('/{id}/edit', 'ProfileController@edit')->name('ngeditprofile');
// Route::put('/{id}', 'ProfileController@update');
// Route::delete('/{id}', 'ProfileController@destroy');
// });

Route::get('/profile/home', 'ProfileController@index');
Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');
Route::get('/profile/{id}', 'ProfileController@show')->name('linkprofile');
Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('ngeditprofile');

Route::post('/profile/{id}', 'ProfileController@update');


Route::delete('/profile/{id}', 'ProfileController@destroy');



//uks
Route::get('/uks/home', 'UksController@index');
Route::get('/uks/create', 'UksController@create');
Route::post('/uks', 'UksController@store');
Route::get('/uks/{id}', 'UksController@show')->name('linkuks');
Route::get('/uks/{id}/edit', 'UksController@edit')->name('ngedituks');

Route::post('/uks/{id}', 'UksController@update');


Route::delete('/uks/{id}', 'UksController@destroy');




//Santri

Route::get('/santri/home', 'SantriController@index');
Route::get('/santri/export_excel', 'SantriController@export_excel');
Route::post('/santri/import_excel', 'SantriController@import_excel');

Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store');
Route::get('/santri/{id}', 'SantriController@show')->name('linksantri');
Route::get('/santri/{id}', 'SantriController@edit')->name('ngeditsantri');
Route::post('/santri/{id}'. 'SantriController@update');
Route::delete('santri/{id}', 'SantriController@destroy');


//BANNER
Route::get('/banner/create','BannerController@create');
Route::post('/banner', 'BannerController@store');
Route::get('/banner/dashboard', 'BannerController@dashboard');
Route::get('/banner/{id}', 'BannerController@show')->name('linkbanner');
Route::get('/banner/{id}/edit', 'BannerController@edit')->name('ngeditbanner');
Route::post('/banner/{id}', 'BannerController@update');
Route::delete('/banner/{id}', 'BannerController@destroy');


//dashboard
Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function (){
Route::get('/home', 'AdminController@index');
Route::get('/organisasi', 'AdminController@organisasi');
Route::get('/artikel', 'AdminController@artikel');
Route::get('/santri', 'AdminController@santri');
Route::get('/uks', 'AdminController@uks');
Route::get('/profile', 'AdminController@profile');
Route::get('/banner', 'AdminController@banner');
Route::get('/galeri','AdminController@galeri');
Route::get('/kegiatan', 'AdminController@kegiatan');
});


//Galery
Route::get('/galeri/home', 'GaleriController@index');
Route::get('/galeri/create','GaleriController@create');
Route::post('/galeri', 'GaleriController@store');
Route::get('/galeri/dashboard', 'GaleriController@dashboard');
Route::get('/galeri/{id}', 'GaleriController@show')->name('linkgaleri');
Route::get('/galeri/{id}/edit', 'GaleriController@edit')->name('ngeditgaleri');

Route::post('/galeri/{id}', 'GaleriController@update');

Route::delete('/galeri/{id}', 'GaleriController@destroy');

//Kegiatan
Route::get('/kegiatan/home', 'KegiatanController@index');
Route::get('/kegiatan/create','KegiatanController@create');
Route::post('/kegiatan', 'KegiatanController@store');
Route::get('/kegiatan/dashboard', 'KegiatanController@dashboard');
Route::get('/kegiatan/{id}', 'KegiatanController@show')->name('linkkegiatan');
Route::get('/kegiatan/{id}/edit', 'KegiatanController@edit')->name('ngeditkegiatan');

Route::post('/kegiatan/{id}', 'KegiatanController@update');

Route::delete('/kegiatan/{id}', 'KegiatanController@destroy');
