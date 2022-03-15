<?php

class Basket
{
    private bool $promoAdd;
    private bool $empty;
    private int $quantity;

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


}