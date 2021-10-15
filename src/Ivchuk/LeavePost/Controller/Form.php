<?php
declare(strict_types=1);
namespace Ivchuk\LeavePost\Controller;


class Form implements \Ivchuk\Framework\Http\ControllerInterface
{
    public function execute(): string
    {
        $page = 'leavepost.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}