<?php

require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ . '/../User.php'; 

class UserRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getUserByEmail(string $email):?User{

    $statement = $this->connection->getConnection()->prepare('SELECT * FROM admin WHERE email = :email');
    $statement->execute(['email'=>$email]);
    $result=$statement->fetch(); 

    if(!$result){
        return null; 
    }

    $user = new User($result['id'], $result['email'], $result['password']);

    return $user;
}
}