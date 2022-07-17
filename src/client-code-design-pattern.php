<?php declare(strict_types = 1);

require dirname(__DIR__, 1) . '/vendor/autoload.php';

use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\FacebookConnector;

$facebook_connector = new FacebookConnector();
$facebook_connector->login();