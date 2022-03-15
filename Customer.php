<?php
class Customer extends User
{
    private String $name;
    private String $surname;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function __construct( $password, $email,$name,$surname)
    {
        parent::__construct( $password, $email);
       $this->name = $name;
       $this->surname = $surname;
    }
    public function fullName()
    {
        echo "Users name is $this->name $this->surname.\n";
    }
}