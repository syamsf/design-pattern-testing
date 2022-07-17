<?php declare(strict_types = 1);

require dirname(__DIR__, 1) . '/vendor/autoload.php';

use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator\TwitterUpdater;
use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator\FacebookUpdater;
use Syams\DesignPatternTesting\DesignPattern\Creational\FactoryMethod\Creator\SocialMediaUpdater;


function clientCode(string $content, SocialMediaUpdater $social_media_updater) {
  $social_media_updater->update($content);
}

$fb_updater = new FacebookUpdater('user1', 'phone');
clientCode('test content 1', $fb_updater);
clientCode('test content 2', $fb_updater);

$twitter = new TwitterUpdater('user2', 'web');
clientCode('test content 3', $twitter);
clientCode('test content 4', $twitter);

$fb_updater = new FacebookUpdater('user3', 'desktop');
clientCode('test content 5', $fb_updater);
clientCode('test content 6', $fb_updater);