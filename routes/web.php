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
Route::get('/doctor', function () {
    return view('pages.categories.doctors');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/blogs', 'PostController@index');
Route::get('/tstPost/{id}', 'PostController@show');
Route::get('/hopitals', function () {
    return view('pages.categories.hopital');
});
Route::get('/clinics', function () {
    return view('pages.categories.clinics');
});
Route::get('/payement', function () {
    return view('pages.payement');
});
Route::get('packages', function () {
    return view('pages.packages');
});
Route::get('doctors', function () {
    return view('pages.doctors');
});
Route::get('homepage', function () {
    return view('pages.homepage');
});
Route::get('login', function () {
    return view('pages.login');
});

Route::get('tst', function () {
    return view('pages.tsthome');
});
Route::get('contact_us', function () {
    return view('pages.contact_us');
});
Route::get('tstPost', function () {
    return view('pages.tstPost');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('/home', 'HomeController@index');
// Route::resource('posts','PostController');
