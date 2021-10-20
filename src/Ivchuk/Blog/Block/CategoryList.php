<?php
declare(strict_types=1);

namespace Ivchuk\Blog\Block;

use Ivchuk\Blog\Model\Category\Entity as CategoryEntity;

class CategoryList extends \Ivchuk\Framework\View\Block
{
    private \Ivchuk\Blog\Model\Category\Repository $categoryRepository;

    protected string $template = '../src/Ivchuk/Blog/view/category_list.php';

    /**
     * @param \Ivchuk\Blog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\Ivchuk\Blog\Model\Category\Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return CategoryEntity[]
     */
    public function getCategories(): array
    {
        return $this->categoryRepository->getList();
    }
}

