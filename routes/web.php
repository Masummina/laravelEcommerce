<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
use App\Post_tag;

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
Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@authenticate')->name('login.confirm');

Route::group(['middleware' => 'auth'], function(){
	
Route::get('dashboard', function (){
    return view('welcome');
});
// Route::view('/', 'home.index');


Route::get('logout',            'Auth\LoginController@logout')->name('logout');
// create post blade

// php artisan tinker
// user group 
Route::get('groups',            'UserGroupController@groups');
Route::get('groups/create',     'UserGroupController@create');
Route::post('groups',           'UserGroupController@store');
Route::delete('groups/{id}',    'UserGroupController@destroy');

// user 

Route::resource('users',          'UsersController');
Route::get('users/{id}/sales',    'UserSaleController@sales')->name('sales');


Route::post('users/{id}/invoices', 							'UserSalesController@createInvoice')->name('user.sales.store');
Route::get('users/{id}/invoices/{invoice_id}', 				'UserSalesController@invoice')->name('user.sales.invoice_details');
Route::delete('users/{id}/invoices/{invoice_id}', 			'UserSalesController@destroy')->name('user.sales.destroy');
Route::post('users/{id}/invoices/{invoice_id}', 			'UserSalesController@addItem')->name('user.sales.invoices.add_item');
Route::delete('users/{id}/invoices/{invoice_id}/{item_id}', 'UserSalesController@destroyItem')->name('user.sales.invoices.delete_item');

Route::post('users/{id}/receipts/{invoice_id?}', 		    'UserReceiptsController@store')->name('user.receipts.store');


// Routes for purchase
Route::get('users/{id}/purchase',                 'UserPurchaseController@index')->name('purchase');
Route::post('users/{id}/purchases', 							'UserPurchasesController@createInvoice')->name('user.purchases.store');
Route::get('users/{id}/purchases/{invoice_id}', 				'UserPurchasesController@invoice')->name('user.purchases.invoice_details');
Route::delete('users/{id}/purchases/{invoice_id}', 				'UserPurchasesController@destroy')->name('user.purchases.destroy');
Route::post('users/{id}/purchases/{invoice_id}', 				'UserPurchasesController@addItem')->name('user.purchases.add_item');
Route::delete('users/{id}/purchases/{invoice_id}/{item_id}', 	'UserPurchasesController@destroyItem')->name('user.purchases.delete_item');




Route::get('users/{id}/payment',                 'UserPaymentController@index')->name('payment');
Route::post('users/{id}/payment',                'UserPaymentController@store')->name('payment.store');
Route::delete('users/{id}/payment/{payment_id}', 'UserPaymentController@destroy')->name('payment.deleted');


Route::get('users/{id}/receipts',                   'UserReceiptsController@index')->name('receipts');
Route::post('users/{id}/receipts',                  'UserReceiptsController@store')->name('receipts.store');
Route::delete('users/{id}/receipts/{receipt_id}',   'UserReceiptsController@destroy')->name('receipts.delete');


Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');


});






