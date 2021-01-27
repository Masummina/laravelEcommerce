<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;

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

Route::get('/', function (){
    return view('welcome');
});
// Route::view('/', 'home.index');

// Route::get('new', function(){
// 	return "Hello i am from about page";
// });

// Route::post('post_route', function(){
// 	return 'This i';
// });
Route::get('user', 		'homeController@index')->name('user_list');
// //Route::get('my-user', 'homeController@index')->name('my_user');
// Route::get('create', 'UserController@create');

Route::get('create_post', function(){
	$data = [
		'title'=>'This is my first post',
		'discription'=>'I want to be a good programmer i may allah help to success my dream',
		'user_id'=>1,
		'status'=>1
	];

	$fff = Post::create($data);
	if($fff){
		echo 'User create successfullu'; 
	}

});