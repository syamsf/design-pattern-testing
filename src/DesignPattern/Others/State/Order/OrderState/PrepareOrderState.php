<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState;

use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\Order;

class PrepareOrderState implements OrderState {
  private string $state = 'Prepare';
  private Order $order;

  public function __construct(Order $order) {
    $this->order = $order;
  }

  public function review(): void {
    echo "review - {$this->state}";
    echo PHP_EOL;
  }

  public function accept(): void {
    $this->order->setCurrentState($this->order->getAcceptOrder());

    echo "accept - {$this->state}";
    echo PHP_EOL;
  }

  public function prepare(): void {
    echo "prepare - {$this->state}";
    echo PHP_EOL;
  }

  public function deliver(): void {
    $this->order->setCurrentState($this->order->getDeliverOrder());

    echo "deliver - {$this->state}";
    echo PHP_EOL;
  }

  public function getName(): string {
    return 'Prepare Order';
  }
}