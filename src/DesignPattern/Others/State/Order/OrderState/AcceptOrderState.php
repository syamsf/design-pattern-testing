<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState;

use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\Order;

class AcceptOrderState implements OrderState {
  private string $state = 'Accept';
  private Order $order;

  public function __construct(Order $order) {
    $this->order = $order;
  }

  public function review(): void {
    $this->order->setCurrentState($this->order->getReviewOrder());

    echo "review - {$this->state}";
    echo PHP_EOL;
  }

  public function accept(): void {
    echo "accept - {$this->state}";
    echo PHP_EOL;
  }

  public function prepare(): void {
    $this->order->setCurrentState($this->order->getPrepareOrder());

    echo "prepare - {$this->state}";
    echo PHP_EOL;
  }

  public function deliver(): void {
    echo "deliver - {$this->state}";
    echo PHP_EOL;
  }

  public function getName(): string {
    return 'Order Accepted';
  }
}