<?php
declare(strict_types=1);
require_once '../src/Ivchuk/Framework/Autoload.php';
spl_autoload_register([ new \Ivchuk\Framework\Autoload(), 'autoload']);
$requestDispatcher= new \Ivchuk\Framework\Http\RequestDispatcher([
    new \Ivchuk\Cms\Router()
]);
$requestDispatcher->dispatch();

exit;
require_once '../src/data.php';
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

switch ($requestUri) {
    case '':
        $page = 'home.php';
        break;
    case 'leave-post':
        $page = 'leavepost.php';
        break;
    case 'about-us':
        $page = 'trial.php';
        break;
    default:
        if ($data = blogGetCategoryByUrl($requestUri)) {
            $page = 'category.php';
            break;
        }

        if ($data = blogGetPostByUrl($requestUri)) {
            $page = 'post.php';
            break;
        }

        break;
}


if (!isset($page)) {
    header("HTTP/1.0 404 Not Found");
    exit(0);
}

header('Content-Type: text/html; charset=utf-8');

ob_start();
require_once "../src/page.php";
echo ob_get_clean();