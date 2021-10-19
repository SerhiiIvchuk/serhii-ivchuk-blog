<?php
declare(strict_types=1);
require_once '../vendor/autoload.php';




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
