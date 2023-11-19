<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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
    return view('home', [
        "tittle" => "Home",
        "active" => 'home'
    ]);
});


Route::get('/about', function () {
    return view('about',[
        "tittle" => "About",
        "active" =>'about',
        "name" =>"Raisa Isna Ainun",
        "email" =>"raisainun09@gmail.com",
        "img" =>"raisa.jpeg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'tittle' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()    
      ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

