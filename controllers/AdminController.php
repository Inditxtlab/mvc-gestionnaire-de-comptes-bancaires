<?php

require_once __DIR__ . '/../models/repositories/UserRepository.php';
require_once __DIR__ . '/../models/User.php';

class AdminController
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        require_once __DIR__ . '/../views/login.php'; 
    }

    public function doLogin()
    {
            $email = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password'); 

            $user = $this->userRepository->getUserByEmail($email); 
        
            if($user && password_verify($password, $user->getPassword())){
                $_SESSION['role'] =$user->getEmail(); 
                $_SESSION['user_id']= $user->getId(); 
            }

            header('Location:?'); 
    }
    public function logout()
    {
        session_destroy();
        header('Location: ?');
        exit;
    }
}