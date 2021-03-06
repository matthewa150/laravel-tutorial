<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.W Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return "Hello";
    //return ['foo' => 'bar'];
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/req', function() {
    $name = request('name');
    return view('req', [
        'name' => $name
    ]);
});


// Wild card
// Route::get('/posts/{post}', function($post) {
//     // return view('post');
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this thing.'
//     ];

//     if(! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('posts/{post}', 'PostsController@show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    # $articles = App\Article::latest()->take(2)->get();
    $articles = App\Article::take(2)->latest()->get();
    # or
    #$article = App\Article::paginate(2);
    return view('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


// RESTful API

// GET /articles
// GET /articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id

// GET /videos
// GET /videos/create
// POST /videos
// GET /videos/2
// GET /videos/2/edit
// PUT /videos/2
// DELETE /videos/2
