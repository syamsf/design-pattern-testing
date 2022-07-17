<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator;

use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector\SocialMediaConnector;
use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector\FacebookConnector;

class FacebookUpdater extends SocialMediaUpdater {
  # Parts of Factory Method
  public function getSocialMedia(): SocialMediaConnector {
    return new FacebookConnector($this->username, $this->device);
  }
}