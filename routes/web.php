<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;

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

Route::get('/', function () {
    return view('Home', [
        "tittle" => "Home"
    ]);
});


Route::get('/About', function () {
    return view('About',[
        "tittle" => "About",
        "name" =>"Raisa Isna Ainun",
        "email" =>"raisainun09@gmail.com",
        "img" =>"raisa.jpeg"
    ]);
});



Route::get('/Blog', [PostController::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'tittle' => 'Post Categories',
        'categories' => Category::all()    
      ]);
});


route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
      'tittle' => $category->name,
      'posts' => $category->posts,
      'category' => $category->name
    ]);
});

route::get('/author/{user}',function(User $user){
    return view('posts', [
        'tittle' => 'user posts',
        'posts' => $user->posts,   
      ]);
});