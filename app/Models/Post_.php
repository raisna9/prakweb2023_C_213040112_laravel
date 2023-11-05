<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
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
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
