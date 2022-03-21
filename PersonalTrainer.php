<?php

class PersonalTrainer extends User
{
    public function __construct($password, $email)
    {
        parent::__construct($password, $email);
    }
}