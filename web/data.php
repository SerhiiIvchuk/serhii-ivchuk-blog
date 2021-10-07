<?php
function blogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Work',
            'url'         => 'work',
            'posts'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'Home',
            'url'         => 'home',
            'products'    => [3, 4, 5]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Free time',
            'url'         => 'freetime',
            'products'    => [2, 4, 6]
        ]
    ];
}

function blogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'title'        => 'Post 1',
            'url'         => 'post-1',
            'text' => 'Product 1 Description',
            'author' => 'Author1',
            'date'       => '10.03.21'
        ],
        2 => [
            'post_id'  => 2,
            'title'        => 'Post 2',
            'url'         => 'post-2',
            'text' => 'Product 2 Description',
            'author' => 'Author2',
            'date'       => '10.03.21'
        ],
        3 => [
            'post_id'  => 3,
            'title'        => 'Post 3',
            'url'         => 'post-3',
            'text' => 'Product 3 Description',
            'author' => 'Author3',
            'date'       => '10.03.21'
        ],
        4 => [
            'post_id'  => 4,
            'title'        => 'Post 4',
            'url'         => 'post-4',
            'text' => 'Product 4 Description',
            'author' => 'Author4',
            'date'       => '10.03.21'
        ],
        5 => [
            'post_id'  => 5,
            'title'        => 'Post 5',
            'url'         => 'post-5',
            'text' => 'Product 5 Description',
            'author' => 'Author5',
            'date'       => '10.03.21'
        ],
        6 => [
            'post_id'  => 6,
            'title'        => 'Post 6',
            'url'         => 'post-6',
            'text' => 'Product 6 Description',
            'author' => 'Author6',
            'date'       => '10.03.21'
        ]
    ];
}