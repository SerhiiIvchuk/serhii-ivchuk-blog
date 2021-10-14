<?php
declare(strict_types=1);
namespace Ivchuk\Framework;
class Autoload
{
    public function autoload($class)
    {
        require_once '../src/' . str_replace('\\','/', $class) . '.php';

    }
}