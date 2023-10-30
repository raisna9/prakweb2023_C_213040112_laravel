<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/Blog', function () {

    $blog_posts = [
        [
            "tittle" => "Judul post pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Raisa Isna Ainun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nam dolore quisquam, voluptatem vitae porro error ex ipsa voluptatibus, obcaecati dignissimos et nostrum soluta pariatur, numquam fugit praesentium impedit possimus."
        ],
    
        [
            "tittle" => "Judul post Kedua",
            "slug" => "Judul-post-Kedua",
            "author" => "Putri Azizah Q",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, numquam. Vero error temporibus veritatis assumenda ipsam dolor! Quisquam possimus quos quia necessitatibus nobis voluptatum voluptatem laboriosam incidunt culpa consequuntur reprehenderit aut perferendis id, ea eligendi aliquid nesciunt tenetur laudantium. Atque ad unde fuga harum, quas cumque cum eaque ducimus? Natus, blanditiis reprehenderit. Itaque expedita quidem voluptatum sequi soluta fugit ducimus deleniti assumenda autem eveniet provident cupiditate, consequatur aliquid dignissimos omnis vel? Modi voluptatibus sit pariatur quas dolores distinctio sint obcaecati."
        ],
    ];

    return view('posts', 
    [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function () {
    $blog_posts = [
        [
            "tittle" => "Judul post pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Raisa Isna Ainun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nam dolore quisquam, voluptatem vitae porro error ex ipsa voluptatibus, obcaecati dignissimos et nostrum soluta pariatur, numquam fugit praesentium impedit possimus."
        ],
    
        [
            "tittle" => "Judul post Kedua",
            "slug" => "Judul-post-Kedua",
            "author" => "Putri Azizah Q",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, numquam. Vero error temporibus veritatis assumenda ipsam dolor! Quisquam possimus quos quia necessitatibus nobis voluptatum voluptatem laboriosam incidunt culpa consequuntur reprehenderit aut perferendis id, ea eligendi aliquid nesciunt tenetur laudantium. Atque ad unde fuga harum, quas cumque cum eaque ducimus? Natus, blanditiis reprehenderit. Itaque expedita quidem voluptatum sequi soluta fugit ducimus deleniti assumenda autem eveniet provident cupiditate, consequatur aliquid dignissimos omnis vel? Modi voluptatibus sit pariatur quas dolores distinctio sint obcaecati."
        ],
    ];

    return view('posts', 
    [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);

    $new_post = [];
    foreach($blog_posts as $_POST){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', 
    [
        "tittle" => "single post",
        "post" => $new_post
    ]);
});
