<?php

require_once __DIR__ . '/../models/repositories/ContractRepository.php'; 
require_once __DIR__ . '/../models/Contract.php';

class ContractController 
{
    private ContractRepository $contractRepository;

    public function __construct()
    {
        $this->contractRepository =new ContractRepository(); 
    }
    public function list()
    {
        $contracts = $this->contractRepository->getContracts();

        require_once __DIR__ . '/../views/contract/contract-list.php';
    }
    public function show(int $id){
        $contract=$this->contractRepository->getContract($id);
        require_once __DIR__ .'/../views/contract/contract-view.php';
    }
    public function create()
    {
        require_once __DIR__ . '/../views/contract/contract-create.php'; 
    }
    public function store(){
        $contract = new Contract(); 
        $contract->setTypedeContract($_POST['typeDeContract']); 
        $contract->setMontant($_POST['montantSouscrit']); 
        $contract->setDuree($_POST['duree']); 
        $contract->setidClient($_POST['idClient']);
        $this->contractRepository->create($contract); 
        header('Location: ?action=list_contract'); 
    }
    public function edit(int $id)
    {
        $contract=$this->contractRepository->getContract($id); 
        require_once __DIR__ .'/../views/contract/contract-edit.php'; 
    }
    public function update()
{
    $contract = new Contract();
    $contract->setTypeDeContract($_POST['typeDeContract']);
    $contract->setMontant($_POST['montantSouscrit']);
    $contract->setDuree($_POST['duree']); 
    $contract->setidClient($_POST['idClient']);

    $this->contractRepository->update($contract);
    header('Location: ?action=list_contract');
    exit;
}

    public function delete(int $id)
    {
        $this->contractRepository->delete($id);

        header('Location: ?action=list_contract');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
}