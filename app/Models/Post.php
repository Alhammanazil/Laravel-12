<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Abraham',
                'date' => '1 Januari 2025',
                'content' => 'lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, aliquam voluptatum nam sed dolor illo est praesentium repellendus quidem sunt, maxime fugit, velit explicabo maiores atque harum unde in magni.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Kevin',
                'date' => '2 Januari 2025',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum debitis laudantium tempora dolorem, suscipit maiores. Esse, ut dolores alias non, voluptates fugiat impedit quis cum veritatis, laudantium accusantium deleniti ipsam?'
            ]
        ];
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Arrow Function
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
