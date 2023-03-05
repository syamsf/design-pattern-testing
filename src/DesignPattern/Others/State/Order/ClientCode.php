<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order;


class ClientCode {
  public function main(): void {
    $order = new Order('order-123', 'cust-123');

    $order->review();
    $order->accept();
    $order->prepare();
    $order->getCurrentState();

    $order->accept();
    $order->review();
    $order->prepare();
    $order->deliver();



    $order->getCurrentState();
  }
}