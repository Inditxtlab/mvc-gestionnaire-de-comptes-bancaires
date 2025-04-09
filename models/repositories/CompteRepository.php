<?php
require_once __DIR__ .'/../../views/templates/header.php';
require_once __DIR__ . '/../Compte.php';
require_once __DIR__ . '/../../lib/database.php';

class CompteRepository{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection= new DatabaseConnection(); 

    }
    public function getComptes():array{
        $statement=
        $this->connection->getConnection()
        ->prepare('SELECT * FROM compte'); 
        $statement->execute(); 
        $results=$statement->fetchAll(); 

        $comptes=[]; 
        foreach ($results as $row) {
            $compte= new Compte(); 
            $compte->setId($row['id']); 
            $compte->setRib($row['rib']); 
            $compte->setTypeDeCompte($row['typeDeCompte']);
            $compte->setSolde($row['soldeInitiale']); 
            $compte->setClientId($row['clientId']);

            $comptes[]=$compte; 
        }
        return $comptes; 
    
}
    public function getCompte(int $id): ?Compte
    {
        $statement=
        $this->connection->getConnection()
        ->prepare('SELECT * FROM compte WHERE id=:id'); 
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
        $compte->setClientId($result['clientId']); 

        return $compte; 
    }
    

    public function create (Compte $compte):bool{
        $statement=$this->connection
        ->getConnection()
        ->prepare('INSERT INTO compte(rib, typeDeCompte, soldeInitiale, ClientId) VALUES(:rib, :typeDeCompte, :soldeInitiale, :ClientId);');
    
    return $statement ->execute([
        'rib'=>$compte->getRib(),
        'typeDeCompte'=>$compte->getTypeDeCompte(), 
        'soldeInitiale'=>$compte->getSolde(), 
        'ClientId'=>$compte->getClientId(),
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
        $statement= $this->connection->getConnection()->prepare('SELECT COUNT(*) FROM compte');
        return (int) $statement->fetchColumn();
    }
}

