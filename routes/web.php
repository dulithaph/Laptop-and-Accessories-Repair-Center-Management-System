<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;


use App\Models\User;
use App\Models\Store;


use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\storeus;
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
    return view('storeone');
});

Auth::routes();
Route::get('/storeData','App\Http\Controllers\storeus@viewStoreUs')->name('storeData');
Route::get('/getdata','App\Http\Controllers\storeus@viewgetdata')->name('getdata');
Route::get('/getnew','App\Http\Controllers\storeus@viewNew')->name('getnew');
Route::get('/nav',function(){
    return view('layouts.myapp');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email', function(){
    Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/feedback',[
    'uses'=>'App\Http\Controllers\EnquiryController@index',
    'as' => 'enquiryForm'
    ]);
    
    Route::get('/requestservice',[
        'uses'=>'App\Http\Controllers\RequestServiceController@index',
        'as' => 'requestForm'
        ]);
    
    //save data
    Route::post('feedback/save', [
        'uses'=>'App\Http\Controllers\EnquiryController@store',
    'as' => 'enquiryForm.save'
    ]);
    
    Route::post('requestservice/save', [
        'uses'=>'App\Http\Controllers\RequestServiceController@store',
    'as' => 'requestForm.save'
    ]);

Route::get('/viewfeedbackform','App\Http\Controllers\EnquiryController@viewfeedbackform')->name('viewfeedbackform');

Route::get('/viewrequestform','App\Http\Controllers\RequestServiceController@viewrequestform')->name('viewrequestform');

Route::post('/viewfeed','App\Http\Controllers\EnquiryController@viewfeed');

Route::get('/customerfeedbacks','App\Http\Controllers\EnquiryController@customerfeedbacks');

Route::get('/customerfeedbacks','App\Http\Controllers\EnquiryController@customers');

Route::get('/myfeedbacks','App\Http\Controllers\EnquiryController@myfeedbacks');

Route::get('/viewfeedbacks/{email}','App\Http\Controllers\EnquiryController@viewfeedbacks');

/*new routs*/


Route::post('submitData',"HomeController@insertData")->name('insertData');
Route::get('getData',"HomeController@getData")->name('getData');


Route::post('insertds',"App\Http\Controllers\storeus@insertds")->name('insertds');
Route::get('getDa',"App\Http\Controllers\storeus@getData")->name('getDa');
Route::post('insertbill',"App\Http\Controllers\storeus@insertbill")->name('insertbill');

Route::get('getphonesda',"App\Http\Controllers\storeus@getphonesdata")->name('getphonesda');
Route::get('getlapda',"App\Http\Controllers\storeus@getlapdata")->name('getlapda');

Route::get('gettodayda',"App\Http\Controllers\storeus@gettodaydata")->name('gettodayda');
Route::get('getlastweekda',"App\Http\Controllers\storeus@getlastweek")->name('getlastweekda');
Route::get('getlast_10days',"App\Http\Controllers\storeus@last10days")->name('getlast_10days');

Route::get('getpayment',"App\Http\Controllers\storeus@getpayment")->name('getpayment');
Route::get('getcs',"App\Http\Controllers\storeus@getcs")->name('getcs');


Route::get('getcscode',"App\Http\Controllers\storeus@get_customercode")->name('getcscode');

Route::get('livesearch','App\Http\Controllers\LiveSearch@index')->name('livesearch');
Route::get('/live_search/action','App\Http\Controllers\LiveSearch@action')->name('live_search.action');

Route::get('billsearch','App\Http\Controllers\BillSearch@index')->name('billsearch');
Route::get('/bill_search/action','App\Http\Controllers\BillSearch@action')->name('bill_search.action');

Route::get('click_edit/{id}','App\Http\Controllers\storeus@edit_function');
Route::post('/update/{id}','App\Http\Controllers\storeus@update_function');

Route::get('click_bill/{id}','App\Http\Controllers\storeus@bill_function');

Route::get('click_edittwo/{id}','App\Http\Controllers\storeus@edit_functiontwo');
Route::post('/updatetwo/{id}','App\Http\Controllers\storeus@update_functiontwo');


Route::post('/search',"App\Http\Controllers\storeus@search")->name('search');
Route::get('/sendbill',"App\Http\Controllers\storeus@sendbill")->name('sendbill');

Route::get('/send-mail',function(){

    $detail = [
        'title'=>'Mail from Surfside Media',
         'body'=>'This is from testing email using smtp'
    ];
    \Mail::to('hdulitha@gmail.com')->send(new \App\Mail\TestMail($detail));
     echo "Email has been sent";
});


Route::post('/searchfeedback',"App\Http\Controllers\storeus@searchfeedback")->name('searchfeedback');