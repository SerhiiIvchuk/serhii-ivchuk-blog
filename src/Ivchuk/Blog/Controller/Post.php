<?php
declare(strict_types=1);
namespace Ivchuk\Blog\Controller;
class Post implements \Ivchuk\Framework\Http\ControllerInterface
{
    private \Ivchuk\Framework\Http\Request $request;
    /**
     * @param \Ivchuk\Framework\Http\Request $request
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }
    public function execute(): string
    {
        //$data = $this->request->getParameter('post');
        $post = $this->request->getParameter('post');
        $page = 'post.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}