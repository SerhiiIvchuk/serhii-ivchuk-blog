<?php
declare(strict_types=1);

namespace Ivchuk\Cms\Controller;

class Page implements \Ivchuk\Framework\Http\ControllerInterface
{

    public function execute(): string
    {
        $page = 'home.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}