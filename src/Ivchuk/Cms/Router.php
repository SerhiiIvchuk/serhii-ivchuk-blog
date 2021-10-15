<?php
declare(strict_types=1);
namespace Ivchuk\Cms;

use \Ivchuk\Cms\Controller\Page;

class Router implements \Ivchuk\Framework\Http\RouterInterface
{
    private \Ivchuk\Framework\Http\Request $request;
    /**
     * @param \Blog\Framework\Http\Request $request
     */
    public function __construct(
        \Ivchuk\Framework\Http\Request $request
    ) {

        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
   public function match(string $requestUrl): string
   {
       $cmsPage=[
           '',
           'test-page',
           'test-page2'
       ];
//       if($requestUrl === ''){
//            return Page::class;
//       }
//       return '';
       if(in_array($requestUrl,$cmsPage)){
           $this->request->setParameter('page', $requestUrl ?: 'home');
           return  Page::class;
       }
       return '';
   }
}