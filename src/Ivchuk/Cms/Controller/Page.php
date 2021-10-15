<?php
declare(strict_types=1);

namespace Ivchuk\Cms\Controller;

class Page implements \Ivchuk\Framework\Http\ControllerInterface
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
        $page = $this->request->getParameter('page') . '.php';


        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}