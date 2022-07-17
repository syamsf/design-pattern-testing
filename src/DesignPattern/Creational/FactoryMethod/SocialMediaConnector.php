<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod;

interface SocialMediaConnector {
  public function login(): void;
  public function logout(): void;
  public function checkSession(): array;
}