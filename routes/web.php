<?php

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


// one to one relationship
Route::get('one-to-one', function(){
	$user = User::find(2);
	dd($user->address);
});

Route::get('one-to-many', function(){
	$user = User::find(2);

	//dd($user->posts[1]->title);
	foreach ($user->posts as $value) {
		echo $value->title;
	}
});

Route::get('many-inverse', function(){
	$posts = Post::find(2);
	$posts->user->name = 'Mim Mina';
	$posts->user->save();
	dd($posts->user->name);
});

// many to many relationa
Route::get('many-to-many', function(){
	$post = Post::find(2);
	$posttag = Post_tag::get();
	dd($post->tags);
});