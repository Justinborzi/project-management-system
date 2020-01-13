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
Route::get('projects', 'ProjectsController@getAllProjects');
Route::get('projects/p/{projID}', 'ProjectsController@getProject');
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
Route::get('blog', 'PostsController@showAll');

Route::get('users/{id}', function ($id) {
    return view('users');
});

Route::get('admin', 'AdminController@');
