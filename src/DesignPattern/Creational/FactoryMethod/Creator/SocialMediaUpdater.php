<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator;

use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector\SocialMediaConnector;

abstract class SocialMediaUpdater {
  # Parts of Factory Method
  protected string $username, $device;

  abstract public function getSocialMedia(): SocialMediaConnector;

  public function __construct(string $username, string $device) {
    $this->username = $username;
    $this->device = $device;
  }

  public function update(string $content): void {
    $social_media_connector = $this->getSocialMedia();
    $social_media_connector->login();
    $social_media_connector->checkSession($content);
    $social_media_connector->logout();
  }
}