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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// New Route for member
Route::resource('member', 'MemberController');





// New Route for member
Route::resource('events', 'EventController');


// New Route for member
Route::resource('followup', 'FollowupController');

// New Route for followup
Route::resource('followupcategory', 'FollowupCategoryController');


// New Route for member
Route::resource('campaign', 'CampaignController');

// New Route for member
Route::resource('contribution', 'ContributionController');


// New Route for member
Route::resource('payment', 'PaymentController');

// New Route for pledge
Route::resource('pledge', 'PledgeController');

// New Route for pledgepayment
Route::resource('pledgepayment', 'PledgePaymentController');

// New Route for pledgepayment
Route::resource('payrollinvoice', 'PayrollinvoiceController');

// New Route for pledgepayment
Route::resource('email', 'EmailController');

// New Route for pledgepayment
Route::resource('flash', 'FlashController');

// New Route for pledgepayment
Route::resource('sms', 'SMSController');

// Route::get('/send', function() {
// Nexmo::message()->send([
//     'to'   => '08143202358',
//     'from' => 'RevManager',
//     'text' => 'Hello this is a test rev manager.'
// ]);

// });



//route for pledges
// Route::group(['prefix' => 'pledge'], function () {
//     Route::get('data', 'PledgeController@index');
//     Route::get('create', 'PledgeController@create');
//     Route::post('store', 'PledgeController@store');
//     Route::get('{pledge}/edit', 'PledgeController@edit');
//     Route::get('{pledge}/show', 'PledgeController@show');
//     Route::post('{id}/update', 'PledgeController@update');
//     Route::get('{id}/delete', 'PledgeController@delete');
//     Route::get('{id}/delete_file', 'PledgeController@deleteFile');
//     //campaigns
//     Route::get('campaign/data', 'CampaignController@index');
//     Route::get('campaign/create', 'CampaignController@create');
//     Route::post('campaign/store', 'CampaignController@store');
//     Route::get('campaign/{campaign}/edit', 'CampaignController@edit');
//     Route::get('campaign/{campaign}/show', 'CampaignController@show');
//     Route::post('campaign/{id}/update', 'CampaignController@update');
//     Route::get('campaign/{id}/delete', 'CampaignController@delete');
//     Route::get('campaign/{id}/open', 'CampaignController@open');
//     Route::get('campaign/{id}/close', 'CampaignController@close');
//     //payments
//     Route::get('{id}/payment/data', 'PledgePaymentController@index');
//     Route::get('{id}/payment/create', 'PledgePaymentController@create');
//     Route::post('{id}/payment/store', 'PledgePaymentController@store');
//     Route::get('payment/{pledge_payment}/edit', 'PledgePaymentController@edit');
//     Route::get('payment/{pledge_payment}/show', 'PledgePaymentController@show');
//     Route::post('payment/{id}/update', 'PledgePaymentController@update');
//     Route::get('payment/{id}/delete', 'PledgePaymentController@delete');

// });




//route for pledges
// Route::group(['prefix' => 'pledge'], function () {
//     Route::get('/', 'PledgeController@index');
//     Route::get('create', 'PledgeController@create');
//     Route::post('/', 'PledgeController@store');
//     Route::get('{pledge}/edit', 'PledgeController@edit');
//     Route::get('{pledge}', 'PledgeController@show');
//     Route::post('{pledge}', 'PledgeController@update');
//     Route::get('{pledge}', 'PledgeController@destroy');
// });

// New Route for member
Route::resource('funds', 'FundsController');

// New Route for login user
Route::resource('logged', 'LoggedController');

// New Route for hod
Route::resource('headofdepartment', 'HeadofDepartmentController');

// New Route for payroll
Route::resource('payroll', 'PayrollController');

// New Route for setting
Route::resource('settings', 'SettingsController');


// New Route for setting
Route::resource('staff', 'StaffController');


// New Route for setting
Route::resource('expense', 'ExpensesController');


// New Route for setting
Route::resource('expensetype', 'ExpenseTypeController');



//route for reports
Route::group(['prefix' => 'report'], function () {
    Route::any('cash_flow', 'ReportController@cash_flow')->name('report.cash_flow');
    Route::any('profit_loss', 'ReportController@profit_loss')->name('report.profit_loss');
  });

//route for sending sms
Route::group(['prefix' => 'sms'], function () {
	Route::get('index', 'MessageController@index')->name('message.index');
    Route::get('create', 'MessageController@create')->name('message.create');
    Route::post('getUserNumber', 'MessageController@getUserNumber')->name('message.getUserNumber');
    Route::any('initiateSmsActivation', 'MessageController@initiateSmsActivation')->name('message.initiate');
 
  });

// Route::post('/send-sms', [
//    'uses'   =>  'MessageController@getUserNumber',
//    'as'     =>  'sendSms'
// ]);

Route::post('/send-sms', 'MessageController@getUserNumber')->name('sendSms');


// Route::get('sms/create', function() {
// Nexmo::message()->send([
//     'to'   => '08143202358',
//     'from' => 'Revelation Manager',
//     'text' => 'Hello this is a test Message .'
// ]);

// });

//route for setting
// Route::group(['prefix' => 'settings'], function () {
//     Route::get('/', 'SettingsController@index');
//     Route::post('update', 'SettingsController@update');
   
// });


// Route::group(['prefix' => 'settings'], 
//     Route::get('settings',function () { 'SettingsController@index')}
//     Route::post('update', 'SettingsController@update');
   
// });

// Test Route
// Route::group(['prefix' => 'member'], function () {
// Route::resource('member', 'MemberController');
// });

// Route for member
// Route::group(['prefix' => 'member'], function () {

// 	Route::post('store', 'MemberController@store')->name('member.store');
// 	Route::get('data', 'MemberController@index');
// 	Route::get('create', 'MemberController@create');
// 	Route::get('{member}/show', 'MemberController@show');
// 	Route::get('{member}/edit', 'MemberController@edit');
// 	Route::get('{member}/update', 'MemberController@update')->name('member.update');


// });

// Route for event
// Route::group(['prefix' => 'events'], function (){

// 	Route::get('create', 'EventController@create');
// 	Route::get('data', 'EventController@index');
// });

// Route for pledge
// Route::group(['prefix' => 'pledges'], function (){

// 	Route::get('create', 'PledgeController@create');
// 	Route::get('data', 'PledgeController@index');
// });


