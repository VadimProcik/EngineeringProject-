<?php

class Transaction
{
    private int $orderID;
    private float $amount;

    public function __construct($orderID, $amount)
    {
        $this->amount = $amount;
        $this->orderID = $orderID;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getOrderID(): int
    {
        return $this->orderID;
    }
    public function setOrderID(int $orderID): void
    {
        $this->orderID = $orderID;
    }
}