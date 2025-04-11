
<?php 
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

$action = $_GET['action'] ?? 'login';
$id = $_GET['id'] ?? null; 

switch ($action) {
    case 'login': 
        $adminController->login();
        break; 
    case 'doLogin':
        $adminController->doLogin();
        break; 
    case 'logout':
        $adminController->logout();
        break; 
    case 'dashboard':
        isAuthenticated();
        $adminController->dashboard();
        break; 
    case 'list':
        isAuthenticated();
        $clientController->list();
        break;
    case 'list_compte': 
        isAuthenticated();
            $compteController->list();
            break;
    case 'list_contract':
        isAuthenticated();
        $contractController->list(); 
        break; 
    case 'view':
        isAuthenticated(); 
        $clientController->show($id);
        break;
    case 'view_compte':
        isAuthenticated();
        $compteController->show($id);
        break; 
    case 'view_contract':
        isAuthenticated();
        $contractController->show($id); 
        break; 
    case 'create': 
        isAuthenticated();
        $clientController->create();
        break;
    case 'create_compte': 
        isAuthenticated();
        $compteController->create(); 
        break; 
    case 'create_contract': 
        isAuthenticated();
        $contractController->create(); 
        break; 
    case 'store_compte':
        isAuthenticated();
        $compteController->store();
        break; 
    case 'store':
        isAuthenticated();
        $clientController->store();
        break;
    case 'store_contract':
        isAuthenticated();
        $contractController->store();
        break; 
    case 'edit': 
        isAuthenticated();
        $clientController->edit($id);
        break;
    case 'edit_compte':
        isAuthenticated();
        $compteController->edit($id); 
        break; 
    case 'edit_contract':
        isAuthenticated();
        $contractController->edit($id); 
        break; 
    case 'update_compte':
        isAuthenticated();
        $compteController->update(); 
        break; 
    case 'update':
        isAuthenticated();
        $clientController->update();
        break;
    case 'update_contract':
        isAuthenticated();
        $contractController->update();
        break;
    case 'delete':
        isAuthenticated();
        $clientController->delete($id);
        break;
    case 'delete_compte': 
        isAuthenticated();
        $compteController->delete($id); 
        break; 
    case 'delete_contract':
        isAuthenticated();
        $contractController->delete($id); 
        break; 
    default:
        $clientController->forbidden();
        break;
}