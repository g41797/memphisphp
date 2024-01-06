#!/usr/local/bin/php
<?php

declare(strict_types=1);

use Memphisphp\Domain\Math;

require \dirname(__DIR__) . '/vendor/autoload.php';

echo (new Math())->sum(1, 2, 3) . PHP_EOL;
