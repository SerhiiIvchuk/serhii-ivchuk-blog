<?php
declare(strict_types=1);

namespace Ivchuk\Blog\Block;

use Ivchuk\Blog\Model\Category\Entity as CategoryEntity;
use Ivchuk\Blog\Model\Post\Entity as PostEntity;

class Category extends \Ivchuk\Framework\View\Block
{
    private \Ivchuk\Framework\Http\Request $request;
    private \Ivchuk\Blog\Model\Post\Repository $postRepository;
    protected string $template = '../src/Ivchuk/Blog/view/category.php';
    /**
     * @param \Ivchuk\Framework\Http\Request $request
     * @param \Ivchuk\Blog\Model\Post\Repository  $postRepository
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request,
        \Ivchuk\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
    }
    /**
     * @return CategoryEntity
     */
    public function getCategory(): CategoryEntity
    {
        return $this->request->getParameter('category');
    }
/**
* @return PostEntity[]
*/
    public function getCategoryPosts(): array
    {
        return $this->postRepository->getByIds(
            $this->getCategory()->getPostIds()
        );
    }
}
