<?php

class Plans
{
    Private String $name;
    Private String $type;
    Private String $description;
    Public Double $Price;

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param String $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     */
    public function setPrice(float $Price): void
    {
        $this->Price = $Price;
    }

    

}