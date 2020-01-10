<?php

use App\Http\Middleware\UserLocale;

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


/**
 * 
 ** Method: Index()
 ** Desc: Loades the landing page as base index.
 * 
 */
Route::get('/', function () {
    return view('index');
});

/**
 * 
 ** Method: projects()
 ** Desc: Display the currently listed projects.
 * 
 */
Route::get('projects', function () {
    return view('projects');
});

/**
 * 
 ** Method: Blog() #1
 ** Desc: Load blog and their posts.
 * 
 */
Route::get('blog', function () {
    return view('blog.index');
});


Route::get('blog/p/{PostID}', 'PostsController@show');

Route::get('users/{id}', function ($id) {
    return view('users');
});

Route::get('admin', function () {

    $username = request('username');
    $pass = request('pass');
    $id = request('id');

    return view('admin.index', [
        "username" => $username,
        "password" => $pass,
        "id" => $id
    ]);
});
