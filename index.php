
<?php
// echo password_hash(1234, PASSWORD_DEFAULT); 
session_start(); 

require_once __DIR__ .'/controllers/ClientController.php';

require_once __DIR__ . '/controllers/CompteController.php'; 

require_once __DIR__ . '/controllers/ContractController.php';

require_once __DIR__ . '/controllers/AuthController.php';

require_once __DIR__ .'/models/repositories/ClientRepository.php';

require_once __DIR__ . '/models/repositories/UserRepository.php'; 

require_once __DIR__ . '/models/repositories/CompteRepository.php';

require_once __DIR__ . '/models/repositories/ContractRepository.php'; 

require_once __DIR__ . '/lib/utils.php';

$adminController = new AuthController(); 
$clientController = new ClientController(); 
$compteController = new CompteController();
$contractController =new ContractController();

$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null; 

switch ($action) {
    case 'login': 
        $adminController->login();
        break; 
    case 'doLogin':
        $adminController->doLogin();
        break; 
    case 'dashboard':
        $adminController->dashboard();
        break; 
    case 'list':
        $clientController->list();
        break;
    case 'list_compte': 
        // isAuthenticated();
            $compteController->list();
            break;
    case 'list_contract':
        $contractController->list(); 
        break; 
    case 'view': 
        $clientController->show($id);
        break;
    case 'view_compte':
        
        $compteController->show($id);
        break; 
    case 'view_contract':
        $contractController->show($id); 
        break; 
    case 'create': 
        $clientController->create();
        break;
    case 'create_compte': 
        $compteController->create(); 
        break; 
    case 'create_contract': 
        $contractController->create(); 
        break; 
    case 'store_compte':
        $compteController->store();
        break; 
    case 'store':
        $clientController->store();
        break;
    case 'edit': 
        $clientController->edit($id);
        break;
    case 'edit_compte':
        $compteController->edit($id); 
        break; 
    case 'edit_contract':
        $contractController->edit($id); 
        break; 
    case 'update_compte':
        $compteController->update(); 
        break; 
    case 'update':
        $clientController->update();
        break;
    case 'update_contract':
        $contractController->update();
        break;
    case 'delete':
        $clientController->delete($id);
        break;
    case 'delete_compte': 
        $compteController->delete($id); 
        break; 
    case 'delete_contract':
        $contractController->delete($id); 
        break; 
    default:
        $clientController->forbidden();
        break;
}