<?php

namespace App\Models;

class Post
{
    private  static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'author' => 'Budi',
            'slug' => 'judul-post-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto libero ea assumenda neque laboriosam id cumque labore provident, quas deserunt minus cupiditate adipisci, voluptate laborum perspiciatis mollitia, iste tempora fuga ut quam sunt similique fugit optio? Consequuntur, hic. Ducimus rerum ut quasi, quas beatae itaque hic repudiandae ipsum nam odio ea totam pariatur provident ipsam exercitationem aliquam consequatur, fugiat sit distinctio voluptates! Odit obcaecati nihil quo harum animi! Quo odio quidem dicta nam quasi? Optio illum reprehenderit alias culpa incidunt neque natus ab laboriosam? Porro perferendis tenetur optio voluptatibus tempora.'

        ],
        [
            'slug' => 'judul-post-kedua',
            'title' => 'Judul Post Kedua',
            'author' => 'Anduk',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat aliquid nesciunt harum, quisquam est enim ratione dolore fuga? Sit magnam quis quo animi alias expedita vero obcaecati autem porro vitae aspernatur error eveniet nisi totam voluptatibus voluptatem recusandae amet assumenda, repudiandae, ad qui et iure! Voluptas laborum adipisci quos doloribus sunt dolores praesentium, amet itaque et. Quisquam placeat corporis magni nihil ut dolorem ex eaque alias delectus deleniti. Iusto reprehenderit dolorum iste veritatis fuga. Mollitia laborum excepturi at incidunt, voluptates culpa magnam, officia quia, in asperiores quasi. Est in commodi eaque. Quae doloribus impedit eveniet vel, earum beatae neque quas.'

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
