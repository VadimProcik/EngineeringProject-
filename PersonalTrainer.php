<?php

class PersonalTrainer extends User
{
    private String $trainerName;

    public function getTrainerName(): string
    {
        return $this->trainerName;
    }
    public function setTrainerName(string $trainerName): void
    {
        $this->trainerName = $trainerName;
    }

    public function __construct($password, $email, $trainerName)
    {
        parent::__construct($password, $email);
        $this->trainerName = $trainerName;
    }
}