
<?php
// echo password_hash(1234, PASSWORD_DEFAULT); 
session_start(); 

require_once __DIR__ .'/controllers/ClientController.php';

require_once __DIR__ . '/controllers/CompteController.php'; 

require_once __DIR__ . '/controllers/AuthController.php';

require_once __DIR__ .'/models/repositories/ClientRepository.php';

require_once __DIR__ . '/models/repositories/UserRepository.php'; 

require_once __DIR__ . '/models/repositories/CompteRepository.php';

require_once __DIR__ . '/lib/utils.php';

$adminController = new AuthController(); 
$clientController = new ClientController(); 
$compteController = new CompteController();

$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null; 

switch ($action) {
    case 'login': 
        $adminController->login();
        break; 
    case 'doLogin':
        $adminController->doLogin();
    case 'dashboard':
        $adminController->dashboard();
        break; 
    case 'list':
        $clientController->list();
        break;
        case 'list_compte': 
            $compteController->list();
            break;
    case 'view': 
        $clientController->show($id);
        isAuthenticated();
        break;
    case 'view_compte':
        isAuthenticated();
        $compteController->show($id);
        break; 
    case 'create': 
        isAuthenticated();
        $clientController->create();
        break;
    case 'create_compte': 
        isAuthenticated();
        $compteController->create(); 
        break; 
    case 'store_compte':
        isAuthenticated();
        $compteController->store();
        break; 
    case 'store':
        isAuthenticated();
        $clientController->store();
        break;
    case 'edit': 
        isAuthenticated();
        $clientController->edit($id);
        break;
    case 'edit_compte':
        isAuthenticated();
        $compteController->edit($id); 
        break; 
    case 'update_compte':
        isAuthenticated();
        $compteController->update(); 
        break; 
    case 'update':
        isAuthenticated();
        $clientController->update();
        break;
    case 'delete':
        $clientController->delete($id);
        break;
    case 'delete_compte': 
        $compteController->delete($id); 
        break; 
    default:
        $clientController->forbidden();
        break;
}