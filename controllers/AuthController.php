<?php


require_once __DIR__ . '/../models/repositories/UserRepository.php';
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        require_once __DIR__ . '/../views/home.php'; 
    }

    public function doLogin()
{
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password'); 

    $user = $this->userRepository->getUserByEmail($email); 

    if ($user && password_verify($password, $user->getPassword())) {
        $_SESSION['email'] = $user->getEmail(); 
        $_SESSION['user_id'] = $user->getId(); 
        header('Location: ?action=dashboard'); 
        exit;
    } else {
        $_SESSION['login_error'] = 'Email ou mot de passe incorrect';
        header('Location: ?action=login');
        exit;
    }
}
    public function logout()
    {
        session_destroy();
        header('Location: ?action=login');
        exit;
    }
    public function dashboard()
    {
        $clientRepository = new ClientRepository();
        $compteRepository = new CompteRepository();
        $contractRepository = new ContractRepository();

        $nbClients = $clientRepository->countAll();
        $nbComptes = $compteRepository->countAll();
        $nbContracts = $contractRepository->countAll();

        require_once __DIR__ . '/../views/dashboard.php';
}
}