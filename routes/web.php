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
//Projile page
 Route::group(['prefix' => '/', 'middleware' =>'locales'],function(){


Route::get('/',['uses'=>'HomeController@index', 'as' =>'home']);
Route::get('/profile',['uses'=>'HomeController@index', 'as' =>'profile']);
Route::get('/profile/history',['uses'=>'HomeController@history', 'as' =>'history']);
Route::get('/profile/vision-mission',['uses'=>'HomeController@vision_mission', 'as' =>'home.visionmission']);
Route::get('/profile/organization',['uses'=>'HomeController@organization', 'as' =>'organization-chart']);

//Finance
Route::get('/finance',['uses'=>'HomeController@finance', 'as' =>'finance']);
Route::get('/finance/credit-ability',['uses'=>'HomeController@credit_ability', 'as' =>'credit_ability']);
Route::get('/finance/checkbalance',['uses'=>'HomeController@checkbalance', 'as' =>'checkbalance']);
Route::get('/finance/credit',['uses'=>'HomeController@credit', 'as' =>'credit']);
Route::get('/finance/currency',['uses'=>'HomeController@currency', 'as' =>'currency']);
Route::get('/finance/payment',['uses'=>'HomeController@payment', 'as' =>'payment']);
// Route::get('/payment',['uses'=>'FinanceController@payment', 'as' =>'activitypage.finance.payment']);
Route::get('/about',['uses'=>'HomeController@about', 'as' =>'about']);
Route::get('/services',['uses'=>'HomeController@service', 'as' =>'service']);
Route::get('/activity',['uses'=>'HomeController@activity', 'as' =>'activity']);
Route::get('/register',['uses'=>'HomeController@register', 'as' =>'register']);
Route::get('/contact',['uses'=>'HomeController@contact', 'as' =>'contact']);
Route::get('/servicedetail/{id}', ['uses' => 'HomeController@servicedetail', 'as' =>'servicedetail']);


 });
