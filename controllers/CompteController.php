<?php

require_once __DIR__ . '/../models/repositories/CompteRepository.php'; 
require_once __DIR__ . '/../models/Compte.php';

class CompteController 
{
    private CompteRepository $compteRepository;

    public function __construct()
    {
        $this->compteRepository =new CompteRepository(); 
    }
    public function list()
    {
        $comptes = $this->compteRepository->getComptes();

        require_once __DIR__ . '/../views/compte/compte-list.php';
    }
    public function show(int $id){
        $compte=$this->compteRepository->getCompte($id);
        require_once __DIR__ .'/../views/compte/compte-view.php';
    }
    public function create()
    {
        require_once __DIR__ . '/../views/compte/compte-create.php'; 
    }
    public function store(){
        $compte = new Compte(); 
        $compte->setRib($_POST['rib']); 
        $compte->setTypeDeCompte($_POST['typeDeCompte']); 
        $compte->setSolde($_POST['solde']); 
        $compte->setClientId((int)$_POST['clientId']);
        $this->compteRepository->create($compte); 
        header('Location: ?action=list_compte'); 
    }

    public function edit(int $id)
    {
        $compte=$this->compteRepository->getCompte($id); 
        require_once __DIR__ .'/../views/compte/compte-edit.php'; 
    }
    public function update()
{
    $compte = new Compte();
    $compte->setId($_POST['id']);
    $compte->setRib($_POST['rib']);
    $typeDeCompte = $_POST['typeDeCompte'] ?? null;
    if ($typeDeCompte !== null) {
        $compte->setTypeDeCompte($typeDeCompte);
    } else {
        $_SESSION['error'] = 'Le type de compte est requis.';
        header('Location: ?action=edit_compte&id=' . $_POST['id']);
        exit;
    }

    $compte->setSolde($_POST['solde']);
    $compte->setClientId($_POST['clientid']);

    $this->compteRepository->update($compte);
    header('Location: ?action=list_compte');
    exit;
}

    public function delete(int $id)
    {
        $this->compteRepository->delete($id);

        header('Location: ?action=list_compte');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}