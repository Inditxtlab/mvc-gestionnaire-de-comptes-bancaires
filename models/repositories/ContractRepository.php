<?php
require_once __DIR__ . '/../../lib/database.php'; 
require_once __DIR__ . '/../Contract.php'; 

class ContractRepository{
    public DatabaseConnection $connection; 
    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
    public function getContracts(): array {
        try {
            $statement = $this->connection->getConnection()->prepare('SELECT * FROM contract'); 
            $statement->execute();
            $rows = $statement->fetchAll(); 
            
            $contracts = [];
            foreach ($rows as $row) { // Recorremos $rows, no $contracts
                $contract = new Contract(); 
                $contract->setId($row['id']);
                $contract->setTypeDeContract($row['typeDeContract']); 
                $contract->setMontant($row['montantSouscrit']); 
                $contract->setDuree($row['duree']);
                $contract->setidClient($row['idClient']);  
    
                $contracts[] = $contract; 
            }
            return $contracts; 
            
        } catch (PDOException $e) {
            error_log("Error fetching contracts: " . $e->getMessage());
            return [];
        }
    }
    

    public function getContract(int $id): ?Contract{
    $statement=
    $this->connection->getConnection()->prepare('SELECT * FROM contract WHERE id=:id'); 
    $statement->execute(['id'=>$id]); 
    $result=$statement->fetch(); 
    if(!$result){
        return null; 
    }
 
    $contract=new Contract(); 
    $contract->setId($result['id']); 
    $contract->setTypeDeContract($result['typeDeContract']); 
    $contract->setMontant($result['montantSouscrit']);
    $contract->setDuree($result['duree']); 
    $contract->setidClient($result['idClient']); 

    return $contract; 
    }

    public function create (Contract $contract):bool
    {
        $statement=$this->connection
        ->getConnection()
        ->prepare('INSERT INTO contract( typeDeContract, montantSouscrit, duree, idClient)VALUES(:typeDeContract, :montantSouscrit, :duree, :idClient)'); 
        return $statement->execute([
            'typeDeContract'=>$contract->getTypeDeContract(),
            'montantSouscrit'=>$contract->getMontant(), 
            'duree'=>$contract->getDuree(),
            'idClient'=>$contract->getidClient()
        ]);
    }
    public function update(Contract $contract
    ):bool
    {
        $statement=$this->connection
        ->getConnection()
        ->prepare('UPDATE contract SET typeDeContract= :typeDeContract, montantSouscrit = :montantSouscrit, duree = :duree, idClient = :idClient  WHERE id= :id'); 
        return $statement->execute([
            'id'=>$contract->getId(),
            'typeDeContract'=>$contract->getTypeDeContract(),
            'montantSouscrit'=>$contract->getMontant(),
            'duree'=>$contract->getDuree(),
            'idClient'=>$contract->getidClient()
        ]);
    }

        public function delete (int $id):bool{
            $statement=$this->connection->getConnection()
            ->prepare('DELETE FROM contract WHERE id= :id'); 
            $statement->bindParam(':id',$id);
            return $statement->execute();
        }

        public function countAll(): int
        {
            $statement = $this->connection->getConnection()
            ->prepare('SELECT COUNT(*) AS NbContract FROM contract');
            $statement->execute();
           $resultat= $statement->fetch();
            return $resultat['NbContract']; 
        }
    }