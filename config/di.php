<?php
declare(strict_types=1);

return [
    \Ivchuk\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\Ivchuk\Cms\Router::class),
            \DI\get(\Ivchuk\Blog\Router::class),
            \DI\get(\Ivchuk\LeavePost\Router::class),
        ]
    )
];