<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod;

class FacebookConnector implements SocialMediaConnector {
  public function login(): void {
    $current_class = __CLASS__;
    echo "Doing login on {$current_class}";
  }

  public function logout(): void {
    
  }

  public function checkSession(): array {
    return [];
  }
}