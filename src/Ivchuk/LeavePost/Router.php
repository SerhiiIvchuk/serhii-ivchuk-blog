<?php
declare(strict_types=1);

namespace Ivchuk\LeavePost;

use Ivchuk\LeavePost\Controller\Form;

class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'leave-post') {
            return Form::class;
        }

        return '';
    }
}
