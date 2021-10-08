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
            'posts'    => [3, 4, 5]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Free time',
            'url'         => 'freetime',
            'posts'    => [2, 4, 6]
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
            'text' => 'Post 1 Description',
            'author' => 'Author1',
            'date'       => '10.03.07'
        ],
        2 => [
            'post_id'  => 2,
            'title'        => 'Post 2',
            'url'         => 'post-2',
            'text' => 'Post2 Description',
            'author' => 'Author2',
            'date'       => '10.03.98'
        ],
        3 => [
            'post_id'  => 3,
            'title'        => 'Post 3',
            'url'         => 'post-3',
            'text' => 'Post 3 Description',
            'author' => 'Author3',
            'date'       => '10.03.95'
        ],
        4 => [
            'post_id'  => 4,
            'title'        => 'Post 4',
            'url'         => 'post-4',
            'text' => 'Post 4 Description',
            'author' => 'Author4',
            'date'       => '10.03.96'
        ],
        5 => [
            'post_id'  => 5,
            'title'        => 'Post 5',
            'url'         => 'post-5',
            'text' => 'Post 5 Description',
            'author' => 'Author5',
            'date'       => '10.03.93'
        ],
        6 => [
            'post_id'  => 6,
            'title'        => 'Post 6',
            'url'         => 'post-6',
            'text' => 'Post 6 Description',
            'author' => 'Author6',
            'date'       => '10.03.01'
        ]
    ];
}

function blogGetCategoryByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}
function blogGetPostByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetPost(),
        static function ($post) use ($url) {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetCategoryPost(int $categoryId): array
{
    $categories = blogGetCategory();

    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exist");
    }

    $postsForCategory = [];
    $posts = blogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Product with ID $productId from category $categoryId does not exist");
        }

        $postsForCategory[] = $posts[$postId];
    }

    return $postsForCategory;
}

function blogGetNewPosts(): array
{
    $postArr=blogGetPost();
    $keyArr=[];
    $outArr=[];
    $currentTime=time();
    foreach($postArr as $instanceArr){
        $key=$currentTime - strtotime($instanceArr['date']);
        $keyArr[$key] =$instanceArr;
    }
    ksort($keyArr);
   $flag=0;
   foreach($keyArr as $instanceArr){
      if($flag<3){
           $outArr[] =$instanceArr;
            ++$flag;
        } else {
            break;
        }
   }



  return $outArr;

}