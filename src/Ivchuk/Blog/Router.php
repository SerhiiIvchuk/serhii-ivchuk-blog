<?php
declare(strict_types=1);

namespace Ivchuk\Blog;

use Ivchuk\Blog\Controller\Category;
use Ivchuk\Blog\Controller\Post;
class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    private \Ivchuk\Framework\Http\Request $request;

    private Model\Category\Repository $categoryRepository;
    private Model\Post\Repository $postRepository;
    /**
     * @param \Blog\Framework\Http\Request $request
     * @param \Model\Category\Repository $categoryRepository
     * @param \Model\Post\Repository $postRepository
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request,
        \Ivchuk\Blog\Model\Category\Repository $categoryRepository,
        \Ivchuk\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->categoryRepository=$categoryRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';
        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }

        if ($post = $this->postRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('post', $post);
            return Post::class;
        }
        return '';
    }
}