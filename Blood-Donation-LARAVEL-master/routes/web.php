<?php

use App\Http\Controllers\PostsController;
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


Route::get('/','PagesController@landing');
Route::resource('/posts','PostsController')->middleware('auth');
Route::get('/posts','PostsController@index')->middleware('auth');

Route::post('/poststore',[
 'uses'=>'PostsController@store',
  'as'=>'post.submit'])->middleware('auth');


  Route::post('/posts/{$post->p_id}/',[
    'uses'=>'PostsController@update',
    'as'=>'update'])->middleware('auth');
 
 Route::post('/posts/{{$post->p_id}',[
     'uses'=>'PostsController@destroy',
     'as'=>'destroy'])->middleware('auth');
 
Route::get('/Myposts','PostsController@myposts');
  
//Route::get('/dashboard', 'HomeController@index')->middleware('auth');
Route::post('posts/{{$post->p_id}}/edit','PostsController@show')->middleware('auth');


// ]);
// Route::resource('users','UsersController');
// Route::get('/signupMAN','UsersController@registration');

// Route::post('/submitMAN',[
//     'uses'=>'UsersController@store',
//     'as'=>'user.submit']);
// Route::get('/loginMAN','UsersController@login');

// Route::post('/checkMAN',[
//         'uses'=>'UsersController@checklogin',
//         'as'=>'check.login']);  

