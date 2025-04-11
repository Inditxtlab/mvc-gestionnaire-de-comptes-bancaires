<?php
require_once __DIR__ . '/../models/repositories/ClientRepository.php'; 
require_once __DIR__ . '/../models/Client.php'; 
class ClientController
{
    private ClientRepository $clientRepository;

    public function __construct()
    {
        $this->clientRepository = new ClientRepository(); 
    }
    
    public function list()
    {
        $clients = $this->clientRepository->getClients();
        require_once __DIR__ .'/../views/client/client-list.php';
    }

    public function show(int $id)
    {
        $client=$this->clientRepository->getClient($id);
        require_once __DIR__ .'/../views/client/client-view.php'; 
    }
    public function create()
    {
        require_once __DIR__ . '/../views/client/client-create.php'; 
    }
    public function store()
    {
        $client=new Client();
        $client->setNom($_POST['nom']); 
        $client->setPrenom($_POST['prenom']); 
        $client->setEmail($_POST['email']); 
        $client->setTelephone($_POST['telephone']); 
        $client->setAdresse($_POST['adresse']); 
        $this->clientRepository->create($client);

        header('Location: ?action=list'); 

    }

    
    public function edit(int $id)
    {
        $client=$this->clientRepository->getClient($id); 
        require_once __DIR__ . '/../views/client/client-edit.php'; 
    }
    public function update()
    {
        $client=new Client(); 
        $client->setId($_POST['id']); 
        $client->setNom($_POST['nom']); 
        $client->setPrenom($_POST['prenom']); 
        $client->setEmail($_POST['email']); 
        $client->setTelephone($_POST['telephone']); 
        $client->setAdresse($_POST['adresse']); 
        $this->clientRepository->update($client);

        header('Location: ?action=list'); 

    }
    public function delete(int $id)
    {
        $this->clientRepository->delete($id); 
        header('Location: ?action=list');
    }
    public function forbidden()
    {
        require_once __DIR__ .'/../views/404.php'; 
        http_response_code(404); 
    }

}