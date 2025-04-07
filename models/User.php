<?php

class User
{
    private int $id;
    private string $email;
    private string $password;

    public function __construct($id, $email, $password)
    {
        $this->setId($id);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function getId()
    {
        return $this->id;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

}