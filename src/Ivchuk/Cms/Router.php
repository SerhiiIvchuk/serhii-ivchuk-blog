<?php
declare(strict_types=1);
namespace Ivchuk\Cms;

use \Ivchuk\Cms\Controller\Page;

class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
   public function match(string $requestUrl): string
   {
       if($requestUrl === ''){
            return Page::class;
       }
       return '';
   }
}