<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector;

interface SocialMediaConnector {
  # This is part of 'Product' from factory method
  
  public function login(): void;
  public function logout(): void;
  public function checkSession(string $content): void;
}