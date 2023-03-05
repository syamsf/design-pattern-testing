<?php declare(strict_types = 1);

namespace Syams\DesignPatternTesting\DesignPattern\Others\State\Order;

use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState\OrderState;
use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState\ReviewOrderState;
use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState\AcceptOrderState;
use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState\PrepareOrderState;
use Syams\DesignPatternTesting\DesignPattern\Others\State\Order\OrderState\DeliverOrderState;

class Order {
  private string $orderId, $customerId;
  private OrderState $reviewOrder, $acceptOrder, $prepareOrder, $deliverOrder;
  private OrderState $currentState;

  public function __construct(string $orderId, string $customerId) {
    $this->orderId = $orderId;
    $this->customerId = $customerId;

    $this->reviewOrder = new ReviewOrderState($this);
    $this->acceptOrder = new AcceptOrderState($this);
    $this->prepareOrder = new PrepareOrderState($this);
    $this->deliverOrder = new DeliverOrderState($this);

    $this->currentState = $this->getReviewOrder();
  }

  public function getReviewOrder(): OrderState {
    return $this->reviewOrder;
  }

  public function getDeliverOrder(): OrderState {
    return $this->deliverOrder;
  }

  public function getPrepareOrder(): OrderState {
    return $this->prepareOrder;
  }

  public function getAcceptOrder(): OrderState {
    return $this->acceptOrder;
  }

  public function getCurrentState(): void {
    $currentState = $this->currentState->getName();
    echo "current state: {$currentState}";
    echo PHP_EOL;
  }

  public function setCurrentState(OrderState $orderState): void {
    $this->currentState = $orderState;
  }

  public function review(): void {
    $this->currentState->review();
  }

  public function prepare(): void {
    $this->currentState->prepare();
  }

  public function accept(): void {
    $this->currentState->accept();
  }
  public function deliver(): void {
    $this->currentState->deliver();
  }
}
