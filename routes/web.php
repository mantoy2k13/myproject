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
Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/index_ja', function () {
    return view('index_ja');
});
Route::get('/index_ja_camp_description', function () {
    return view('index_ja_camp_description');
});
Route::get('/index_ja_jr_camp', function () {
    return view('index_ja_jr_camp');
});
Route::get('/index_ja_family_camp', function () {
    return view('index_ja_family_camp');
});
Route::get('/index_ja_community_members', function () {
    return view('index_ja_community_members');
});
Route::get('/index_ja_contact', 'ContactsController@index');
Route::get('/index_ja_registration_agency', function () {
    return view('index_ja_registration_agency');
});
Route::get('/ja_password_forget', function () {
    return view('ja_password_forget');
});
Route::get('/index_ja_movie', function () {
    return view('index_ja_movie');
});


Route::get('/main','MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/home', 'HomeController@index')->name('home');
