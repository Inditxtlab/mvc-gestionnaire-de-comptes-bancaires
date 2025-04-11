<?php
require_once __DIR__ .'/../../views/templates/header.php';
require_once __DIR__ . '/../Compte.php';
require_once __DIR__ . '/../../lib/database.php';
require_once __DIR__ .'/ClientRepository.php'; 
require_once __DIR__ . '/../Client.php';

class CompteRepository{
    public DatabaseConnection $connection;
    private ClientRepository $clientRepository;

    public function __construct()
    {
        $this->connection= new DatabaseConnection(); 
        $this->clientRepository = new ClientRepository;

    }
    public function getComptes():array{
        $statement=
        $this->connection->getConnection()
        ->prepare('SELECT compte.*, client.nom, client.prenom FROM compte JOIN client ON compte.clientId = client.id'); 
        $statement->execute(); 
        $results=$statement->fetchAll(); 

        $comptes=[]; 
        foreach ($results as $row) {
            $compte= new Compte(); 
            $compte->setId($row['id']); 
            $compte->setRib($row['rib']); 
            $compte->setTypeDeCompte($row['typeDeCompte']);
            $compte->setSolde($row['soldeInitiale']); 
            $compte->setNom($row['nom']);
            $compte->setPrenom($row['prenom']);
            $compte->setClientId($row['clientId']);

            $comptes[]=$compte; 
        }
        return $comptes; 
    
}
    public function getCompte(int $id): ?Compte
    {
        $statement=
        $this->connection->getConnection()
        ->prepare('SELECT compte.*, client.nom AS nomClient, client.prenom AS prenomClient
            FROM compte
            JOIN client ON compte.clientId = client.id
            WHERE compte.id = :id'); 
        $statement->execute(['id'=>$id]); 
        $result=$statement->fetch(); 

        if (!$result){
            return null;
        }

        $compte= new Compte();
        $compte->setId($result['id']); 
        $compte->setRib($result['rib']); 
        $compte->setTypeDeCompte($result['typeDeCompte']); 
        $compte->setSolde($result['soldeInitiale']); 
        $compte->setNom($result['nomClient']);
        $compte->setPrenom($result['prenomClient']);
        $compte->setClientId($result['clientId']); 

        return $compte; 
    }

    public function getComptesByClientId(int $id):array
    {
        $statement=$this->connection->getConnection()->prepare('SELECT * FROM compte WHERE clientId = :id'); 
        $statement->execute(['id'=>$id]); 
        $comptes=[]; 
        foreach ($statement as $row) {
            $compte =new Compte(); 
            $compte->setId($row['id']); 
            $compte->setRib($row['rib']); 
            $compte->setTypeDeCompte($row['typeDeCompte']); 
            $compte->setSolde($row['soldeInitiale']); 
            $compte->setClientId($row['clientId']); 
    
        $comptes[]=$compte; 
        }
        return $comptes; 
    }
    

    public function create (Compte $compte):bool{
        $statement=$this->connection
        ->getConnection()
        ->prepare('INSERT INTO compte(rib, typeDeCompte, soldeInitiale, clientId) VALUES(:rib, :typeDeCompte, :soldeInitiale, :clientId);');
    
    return $statement ->execute([
        'rib'=>$compte->getRib(),
        'typeDeCompte'=>$compte->getTypeDeCompte(), 
        'soldeInitiale'=>$compte->getSolde(), 
        'clientId'=>$compte->getClientId(),
    ]); 
}
public function list():array
    {
        $statement=$this->connection
        ->getConnection()
        ->prepare('SELECT * FROM compte'); $statement->execute(); 
        $comptes=[]; 
        foreach ($statement as $row) {
            $compte = new Compte(); 
            $compte->setId($row['id']); 
            $compte->setRib($row['rib']); 
            $compte->setTypeDeCompte($row['typeDeCompte']); 
            $compte->setSolde($row['soldeInitiale']); 
            $compte->setClientId($row['clientId']); 
            
        $comptes[]=$compte; 
        }
        return $comptes; 

    }

public function update(Compte $compte):bool
{
    $statement= $this->connection 
    ->getConnection()
    ->prepare('UPDATE compte SET rib = :rib, typeDeCompte = :typeDeCompte, soldeInitiale = :soldeInitiale, clientId = :clientId WHERE id = :id'); 

    return $statement->execute([
        'id'=>$compte->getId(), 
        'rib'=>$compte->getRib(), 
        'typeDeCompte'=>$compte->getTypeDeCompte(),
        'soldeInitiale'=>$compte->getSolde(),
        'clientId'=>$compte->getClientId()
    ]); 
}
public function delete(int $id):bool
{
    $statement=$this->connection
    ->getConnection()
    ->prepare('DELETE FROM compte WHERE id=:id'); 
    $statement->bindParam(':id',$id); 

return $statement ->execute(); 
    }
        public function countAll(): int
        {
            $statement = $this->connection->getConnection()
            ->prepare('SELECT COUNT(*) AS NbCompte FROM compte');
            $statement->execute();
           $resultat= $statement->fetch();
            return $resultat['NbCompte']; 
        }
}

