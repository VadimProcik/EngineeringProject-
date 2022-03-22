<?php

class Basket
{
    private bool $promoAdd;
    private int $quantity;
    private String $planName;

    public function __construct($quantity ,$planName,$promoAdd)
    {
        $this->quantity = $quantity;
        $this->planName = $planName;
        $this->promoAdd= $promoAdd;
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
    public function CheckOut(){echo "There is $this->quantity items in your basket. If you are happy to proceed please checkout.\n";}
    public function AddItem(){echo "Item $this->planName has been added to the basket.\n";}
    public function RemoveItem(){echo "Item $this->planName has been removed from the basket.\n";}
    public function AddPromo(){echo "Promo code has been added: $this->promoAdd\n";}
}