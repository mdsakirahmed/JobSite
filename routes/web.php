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


Auth::routes(['register' => false]);

Route::get('/', function (){
    return redirect()->route('login');
});

Route::post('/registration', 'RegisterController@registration')->name('registration');

/**
 * Routes for applicant
 */
Route::group(['namespace' => 'Applicant', 'as' => 'applicant.', 'prefix'=>'', 'middleware'=>['applicant']], function (){
    Route::resource('home', 'HomeController');
    Route::post('/get-job', 'HomeController@getJobData')->name('getJobData');
    Route::resource('skill', 'SkillController');
    Route::resource('profile', 'ProfileController');
});

/**
 * Routes for company
 */
Route::group(['namespace' => 'Company', 'as' => 'company.', 'prefix'=>'', 'middleware'=>['company']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('job', 'JobController');
});
