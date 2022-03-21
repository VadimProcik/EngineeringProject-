<?php

class Order extends Basket
{
    private int $orderId;
    private DateTime $date;
    private String $shipEmail; //aggregation

    public function getDate(): DateTime
    {
        return $this->date;
    }
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getShipEmail(): string
    {
        return $this->shipEmail;
    }
    public function setShipEmail(string $shipEmail): void
    {
        $this->shipEmail = $shipEmail;
    }

}