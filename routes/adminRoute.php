<?php 

Route::group(['prefix' => '/admin'], function(){

Route::get('/',['uses'=>'AdminController@index', 'as' =>'admin.index']);
Route::get('/history', 'AdminController@history')->name('admin.history');
Route::get('/vision_mission', 'AdminController@vision_mission')->name('admin.vision');
Route::get('/organization-chart', 'AdminController@organization')->name('admin.organization');
// Fiance
Route::get('/index', 'AdminController@finance')->name('finance.index');
Route::get('/credit-ability', 'AdminController@credit_ability')->name('admin.credit-ability');
Route::get('/checkbalance', 'AdminController@checkbalance')->name('admin.checkbalance');
Route::get('/credit', 'AdminController@credit')->name('admin.credit');
Route::get('/payment', 'AdminController@payment')->name('admin.payment');
Route::get('/currency', 'AdminController@currency')->name('admin.currency');
Route::get('/service', 'AdminController@service')->name('admin.service');
Route::get('/about', 'AdminController@about')->name('admin.about');

// Function Store
Route::post('/about', 'AdminController@PostAbout')->name('about.store');
Route::post('/history', 'AdminController@PostHistory')->name('history.store');
Route::post('/organization-chart', 'AdminController@PostOrganization')->name('organization.store');
Route::post('/vision_mission', 'AdminController@PostVision')->name('vision.store');
Route::post('/service', 'AdminController@PostService')->name('service.store');
Route::post('/credit', 'AdminController@PostCredit')->name('credit.store');
Route::post('/payment', 'AdminController@PostPayment')->name('payment.store');
Route::post('/currency', 'AdminController@PostCurrency')->name('currency.store');
Route::post('/service', 'AdminController@PostService')->name('service.store');
});




