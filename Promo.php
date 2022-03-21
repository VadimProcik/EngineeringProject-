<?php

class Promo extends Basket
{
    private String $promoCode;
    private float $amount;

    public function getPromoCode(): string
    {
        return $this->promoCode;
    }
    public function setPromoCode(string $promoCode): void
    {
        $this->promoCode = $promoCode;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

}