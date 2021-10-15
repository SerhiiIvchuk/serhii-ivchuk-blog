<?php
declare(strict_types=1);

namespace Ivchuk\Blog;

use Ivchuk\Blog\Controller\Category;
use Ivchuk\Blog\Controller\Post;
class Router implements \Ivchuk\Framework\Http\RouterInterface
{

    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';
        if ($data = blogGetCategoryByUrl($requestUrl)) {
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            return Post::class;
        }
        return '';
    }
}