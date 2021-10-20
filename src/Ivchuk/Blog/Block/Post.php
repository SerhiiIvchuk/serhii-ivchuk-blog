<?php
declare(strict_types=1);

namespace Ivchuk\Blog\Block;

use Ivchuk\Blog\Model\Post\Entity as PostEntity;

class Post
{
    private \Ivchuk\Framework\Http\Request $request;

    protected string $template = '../src/Ivchuk/Blog/view/post.php';

    /**
     * @param \Ivchuk\Framework\Http\Request $request
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @return PostEntity
     */
    public function getPost(): PostEntity
    {
        return $this->request->getParameter('post');
    }
}

