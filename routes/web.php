<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    $posts = DB::table('blog_posts')->get();

    return view('home', ['posts' => $posts]);
});

// This route is created to view specific blog posts from the database.
Route::get('/blog/{id}', function ($id) {
    // The id from the URL is used to filter the blogs using a query builder.
    $post = DB::table('blog_posts')->where('id', '=', $id)->get();

    // The results are passed as "post".
    return view('blog', ['post' => $post]);
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/greet', function () {
    return view('greeting', ['name' => 'Kabelo']);
});

Route::get('/greet/{name}', function ($name) {
    return view('greeting', ['name' => $name]);
});

Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection' => $subsection]);
})->where('subsection', '(tos|privacy)');
