<?php

class Plans extends Basket
{
    Private String $planName;
    Private String $type;
    Private String $description;
    Private float  $price;

    public function getPlanName(): string
    {
        return $this->planName;
    }
    public function setPlanName(string $planName): void
    {
        $this->planName = $planName;
    }

    public function getType(): string
    {
        return $this->type;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function addPlan(){echo "Plan added\n";}
    public function deletePlan(){echo "Plan deleted\n";}
    public function modifyPlan(){echo "Plan has been modified\n";}
}