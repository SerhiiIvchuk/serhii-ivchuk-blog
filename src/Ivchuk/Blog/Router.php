<?php
declare(strict_types=1);

namespace Ivchuk\Blog;

use Ivchuk\Blog\Controller\Category;
use Ivchuk\Blog\Controller\Post;
class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    private \Ivchuk\Framework\Http\Request $request;

    private Model\Category\Repository $categoryRepository;
    /**
     * @param \Blog\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request,
        \Ivchuk\Blog\Model\Category\Repository $categoryRepository
    ) {

        $this->request = $request;
        $this->categoryRepository=$categoryRepository;
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

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}