<?php

class Basket
{
    private bool $promoAdd;
    private bool $empty;
    private int $quantity;
    private String $planName;

    public function __construct($quantity ,$planName,$empty,$promoAdd)
    {
        $this->quantity = $quantity;
        $this->planName = $planName;
        $this->empty = $empty;
        $this->promoAdd= $promoAdd;
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }
    public function setEmpty(bool $empty): void
    {
        $this->empty = $empty;
    }

    public function isPromoAdd(): bool
    {
        return $this->promoAdd;
    }
    public function setPromoAdd(bool $promoAdd): void
    {
        $this->promoAdd = $promoAdd;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPlanName(): string
    {
        return $this->planName;
    }
    public function setPlanName(string $planName): void
    {
        $this->planName = $planName;
    }

    public function CheckOut(){}
    public function AddItem(){}
    public function RemoveItem(){}
    public function AddPromo(){}
}