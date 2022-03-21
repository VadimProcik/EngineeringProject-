<?php

class Basket extends Customer
{
    private bool $promoAdd;
    private bool $empty;
    private int $quantity;
    private String $planChosen; //aggregation

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

    public function getPlanChosen(): string
    {
        return $this->planChosen;
    }
    public function setPlanChosen(string $planChosen): void
    {
        $this->planChosen = $planChosen;
    }

}