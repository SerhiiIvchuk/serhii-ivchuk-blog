<?php
declare(strict_types=1);
namespace Ivchuk\Blog\Controller;
class Category implements \Ivchuk\Framework\Http\ControllerInterface
{
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

    }
}