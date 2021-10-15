<?php
declare(strict_types=1);
namespace Ivchuk\Framework\Http;

class Request
{
    private array $parameters = [];

    /**
     * @return string
     */
    public function getRequestUrl(): string
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}