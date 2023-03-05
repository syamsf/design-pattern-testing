<?php declare(strict_types = 1);

require dirname(__DIR__, 1) . '/vendor/autoload.php';

use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\ClientCode;

$clientCode = new ClientCode();
$clientCode->main();