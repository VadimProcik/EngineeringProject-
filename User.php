<?php
abstract class User
{
//    public int $id;
    private string $password;
    private string $email;

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __construct(/*$id*/ $password, $email)
    {
    //    $this->id = $id;
        $this->password = $password;
        $this->email = $email;
    }

    public function cusAuthentication()
    {
        echo "User ($this->email) is trying to log in with password ($this->password). \n";
    }
    public function adminAuthentication()
    {
        echo "User ($this->email) is trying to log in with password ($this->password). \n";
    }
}

