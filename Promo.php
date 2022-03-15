<?php

class Promo
{
    private String $promoCode;
    private double $amount;

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