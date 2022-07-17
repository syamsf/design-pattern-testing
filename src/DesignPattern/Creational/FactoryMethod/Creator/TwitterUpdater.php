<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator;

use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector\SocialMediaConnector;
use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Connector\TwitterConnector;

class TwitterUpdater extends SocialMediaUpdater {
  # Parts of Factory Method
  public function getSocialMedia(): SocialMediaConnector {
    return new TwitterConnector($this->username, $this->device);
  }
}