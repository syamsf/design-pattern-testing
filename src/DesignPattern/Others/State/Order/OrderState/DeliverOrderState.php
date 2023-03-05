<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState;

use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\Order;

class DeliverOrderState implements OrderState {
  private string $state = 'Deliver';
  private Order $order;

  public function __construct(Order $order) {
    $this->order = $order;
  }

  public function review(): void {
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
    return 'Order Delivered';
  }
}