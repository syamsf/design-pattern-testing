<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector;

class FacebookConnector implements SocialMediaConnector {
  # This is part of 'Product' from factory method
  private string $username, $device;

  public function __construct(string $username, string $device) {
    $this->username = $username;
    $this->device = $device;
  }
  
  private string $current_class = 'FacebookConnector';

  public function login(): void {
    echo "Doing login on {$this->current_class} with user {$this->username} | {$this->device}";
    echo PHP_EOL;
  }

  public function logout(): void {
    echo "Doing logout on {$this->current_class} with user {$this->username} | {$this->device}";
    echo PHP_EOL;
  }

  public function checkSession(string $content): void {
    echo "Checking session on {$this->current_class}" . PHP_EOL;
    echo "Content: {$content}";
    echo PHP_EOL;
  }
}