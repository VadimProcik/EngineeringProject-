<?php

class Admin extends User
{
    public function __construct(/*$id,*/ $password, $email)
    {
        parent::__construct(/*$id,*/ $password, $email);
    }
}