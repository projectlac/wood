<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/chi-tiet/{url}', 'App\Http\Controllers\NewDetailController@index');
Route::get('/danh-muc/{url}', 'App\Http\Controllers\NewDetailController@indexDM');

Route::get('/admin', function () {
    return view('admin/index');
})->middleware('auth');

Route::get('/admin/404', function () {
    return view('admin/404');
});

Route::get('/admin/blank', function () {
    return view('admin/blank');
});

// Route::get('/admin/buttons', function () {return view('admin/buttons');});


// Route::get('/admin/utilities-animation', function () {return view('admin/utilities-animation');});

// Route::get('/admin/utilities-border', function () {return view('admin/utilities-border');});

// Route::get('/admin/utilities-color', function () {return view('admin/utilities-color');});

// Route::get('/admin/utilities-other', function () {return view('admin/utilities-other');});

// Route::get('/chitiet', function () {return view('template/news-detail');});
// Route::get('/chitiet', function () {return view('template/news-detail');});

Route::get('/admin/danhmuctintuc', 'App\Http\Controllers\NewCatController@index');
Route::get('/admin/createnewcat', 'App\Http\Controllers\NewCatController@create');
Route::post('/admin/createnewcat', 'App\Http\Controllers\NewCatController@store');
Route::get('/admin/editnewcat/{id}/edit', 'App\Http\Controllers\NewCatController@edit');
Route::post('/admin/editnewcat/update', 'App\Http\Controllers\NewCatController@update');
Route::get('/admin/editnewcat/{id}/delete', 'App\Http\Controllers\NewCatController@destroy');


Route::get('admin/news', 'App\Http\Controllers\NewController@index');
Route::get('admin/news/create', 'App\Http\Controllers\NewController@create');
Route::post('admin/news/create', 'App\Http\Controllers\NewController@store');
Route::get('admin/news/{id}/edit', 'App\Http\Controllers\NewController@edit');
Route::post('admin/news/update', 'App\Http\Controllers\NewController@update');
Route::get('admin/news/{id}/delete', 'App\Http\Controllers\NewController@destroy');

Route::post('ckeditor/upload', 'App\Http\Controllers\CKEditorController@upload')->name('ckeditor.image-upload');
// Route::post('ckeditor/upload', 'App\Http\Controllers\CKEditorController@upload')->name('ckeditor.image-upload');

Route::get('admin/utilities-color', 'App\Http\Controllers\MenuController@index');
Route::get('admin/menu/create', 'App\Http\Controllers\MenuController@create');
Route::post('admin/menu/create', 'App\Http\Controllers\MenuController@store');
Route::get('admin/menu/{id}/edit', 'App\Http\Controllers\MenuController@edit');
Route::post('admin/menu/update', 'App\Http\Controllers\MenuController@update');
Route::get('admin/menu/{id}/delete', 'App\Http\Controllers\MenuController@destroy');

Route::get('admin/config/edit', 'App\Http\Controllers\ConfigController@edit');
Route::post('admin/config/update', 'App\Http\Controllers\ConfigController@update');

Route::get('admin/library', 'App\Http\Controllers\LibraryController@index');
Route::get('admin/library/create', 'App\Http\Controllers\LibraryController@create');
Route::post('admin/library/create', 'App\Http\Controllers\LibraryController@store');
Route::get('admin/library/{id}/edit', 'App\Http\Controllers\LibraryController@edit');
Route::post('admin/library/update', 'App\Http\Controllers\LibraryController@update');
Route::get('admin/library/{id}/delete', 'App\Http\Controllers\LibraryController@destroy');

Route::post('/', 'App\Http\Controllers\IndexController@searchFullText')->name('search');
