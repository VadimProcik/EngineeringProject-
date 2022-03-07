<?php
class User
{
    public int $id;
    public String $username;
    public String $password;
    public String $email;

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

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
    public function displayUser()
    {
        echo "id:  " . $this->getId();
        echo "username: " . $this->getUsername();
        echo "password:" . $this->getPassword();
        echo "email: " . $this->getEmail();
    }
}

