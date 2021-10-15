<?php
declare(strict_types=1);

namespace Ivchuk\Blog;

use Ivchuk\Blog\Controller\Category;
use Ivchuk\Blog\Controller\Post;
class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    private \Ivchuk\Framework\Http\Request $request;

    /**
     * @param \Blog\Framework\Http\Request $request
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request
    ) {

        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';
        if ($data = blogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}