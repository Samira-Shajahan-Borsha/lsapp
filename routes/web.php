<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/hello', function () {
    // return view('welcome');
    return "<h1>Hello World<h1>";
}); */

/* Route::get('/users/{id}',function($id){
    return 'This is user '. $id;
}); */

Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is User Name: '. $name . ' with an id '.$id;
});


Route::get('/about',function(){
    return view('pages.about');
});


//PAGECONTROLLER
//Route::get('/','PageController@index');

Route::get('/', [PageController::class, 'index']); 
Route::get('/about', [PageController::class, 'about']); 
Route::get('/services', [PageController::class, 'services']); 




//POSTCONTROLLER
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('/posts/{id}', [PostController::class, 'show']); 

Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');

Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');



