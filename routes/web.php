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


Route::get('/',['uses'=>'homeController@index', 'as' =>'home']);
Route::get('/profile',['uses'=>'homeController@index', 'as' =>'profile']);
Route::get('/profile/history',['uses'=>'homeController@history', 'as' =>'history']);
Route::get('/profile/vision-mission',['uses'=>'homeController@vision_mission', 'as' =>'vision-mission']);
Route::get('/profile/organization',['uses'=>'homeController@organization', 'as' =>'organization-chart']);

//Finance
Route::get('/finance',['uses'=>'homeController@finance', 'as' =>'finance']);
Route::get('/finance/credit-ability',['uses'=>'homeController@credit_ability', 'as' =>'credit_ability']);
Route::get('/finance/checkbalance',['uses'=>'homeController@checkbalance', 'as' =>'checkbalance']);
Route::get('/finance/credit',['uses'=>'homeController@credit', 'as' =>'credit']);
Route::get('/finance/currency',['uses'=>'homeController@currency', 'as' =>'currency']);
Route::get('/finance/payment',['uses'=>'homeController@payment', 'as' =>'payment']);
// Route::get('/payment',['uses'=>'FinanceController@payment', 'as' =>'activitypage.finance.payment']);
Route::get('/about',['uses'=>'homeController@about', 'as' =>'about']);
Route::get('/services',['uses'=>'homeController@service', 'as' =>'service']);
Route::get('/activity',['uses'=>'homeController@activity', 'as' =>'activity']);
Route::get('/register',['uses'=>'homeController@register', 'as' =>'register']);
Route::get('/contact',['uses'=>'homeController@contact', 'as' =>'contact']);


 });
