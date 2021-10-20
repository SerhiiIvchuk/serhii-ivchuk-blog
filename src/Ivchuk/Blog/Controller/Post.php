<?php
declare(strict_types=1);
namespace Ivchuk\Blog\Controller;
class Post implements \Ivchuk\Framework\Http\ControllerInterface
{
    private \Ivchuk\Framework\View\Renderer $renderer;
    /**
     * @param \Ivchuk\Framework\View\Renderer $renderer
     */
    public function __construct(
        \Ivchuk\Framework\View\Renderer $renderer
    ) {
        $this->renderer = $renderer;
    }
    public function execute(): string
    {
        return (string) $this->renderer->setContent(\Ivchuk\Blog\Block\Post::class);
//        $post = $this->request->getParameter('post');
//        $page = 'post.php';
//
//        ob_start();
//        require_once "../src/page.php";
//        return ob_get_clean();
    }
}