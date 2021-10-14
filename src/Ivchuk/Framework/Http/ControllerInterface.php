<?php

namespace Ivchuk\Framework\Http;

interface ControllerInterface
{
 public function execute(): string;
}