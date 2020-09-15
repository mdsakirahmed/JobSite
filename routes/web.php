<?php

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


Auth::routes();

Route::get('/', function (){
    return redirect()->route('login');
});

/**
 * Routes for applicant
 */
Route::group(['namespace' => 'Applicant', 'as' => 'applicant.', 'prefix'=>'', 'middleware'=>['applicant']], function (){
    Route::resource('home', 'HomeController');
    Route::resource('skill', 'SkillController');
});

/**
 * Routes for company
 */
Route::group(['namespace' => 'Company', 'as' => 'company.', 'prefix'=>'', 'middleware'=>['company']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
