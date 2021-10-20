<?php
declare(strict_types=1);

namespace Ivchuk\Framework\Http;

interface ControllerInterface
{
 public function execute(): string;
}