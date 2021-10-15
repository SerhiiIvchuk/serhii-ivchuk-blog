<?php
declare(strict_types=1);
require_once '../vendor/autoload.php';
//spl_autoload_register([ new \Ivchuk\Framework\Autoload(), 'autoload']);



$containerBuilder= new \DI\ContainerBuilder();
try {
    $containerBuilder->addDefinitions('../config/di.php');
    $container = $containerBuilder->build();
    /** @var \Ivchuk\Framework\Http\RequestDispatcher $requestDispatcher */
    $requestDispatcher = $container->get(\Ivchuk\Framework\Http\RequestDispatcher::class);
    $requestDispatcher->dispatcher();
}catch (\Exception $e) {
    echo "{$e->getMessage()} in file {$e->getFile()} at line {$e->getLine()}";
    exit(1);
}

//$requestDispatcher= new \Ivchuk\Framework\Http\RequestDispatcher([
//    new \Ivchuk\Cms\Router(),
//    new \Ivchuk\Blog\Router(),
//    new \Ivchuk\LeavePost\Router()
//]);
//$requestDispatcher->dispatch();

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