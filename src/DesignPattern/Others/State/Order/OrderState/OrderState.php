<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState;

interface OrderState {
  public function review(): void;
  public function accept(): void;
  public function prepare(): void;
  public function deliver(): void;
  public function getName(): string;
}