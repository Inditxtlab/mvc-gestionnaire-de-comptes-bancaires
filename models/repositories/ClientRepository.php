<?php
require_once __DIR__ . '/../../lib/database.php'; 
require_once __DIR__ . '/../Client.php'; 

class ClientRepository{
    public DatabaseConnection $connection; 
    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
    public function getClients():array{
        $statement=$this->connection->getConnection()->prepare('SELECT * FROM client'); 
        $statement->execute();  
        $clients=[]; 
        foreach ($statement as $row) {
            $client= new Client(); 
            $client->setId($row['id']); 
            $client->setNom($row['nom']); 
            $client->setPrenom($row['prenom']); 
            $client->setEmail($row['email']); 
            $client->setTelephone($row['telephone']); 
            $client->setAdresse($row['adresse']); 
            $client->setCreatedAt(date_create_from_format('Y-m-d', $row['create_time']));
            $clients[]=$client; 
        }
        return $clients; 
    }  

    public function getClient(int $id): ?Client{
    $statement=
    $this->connection->getConnection()->prepare('SELECT * FROM client WHERE id=:id'); 
    $statement->execute(['id'=>$id]); 
    $result=$statement->fetch(); 
    if(!$result){
        return null; 
    }
    $client=new Client(); 
    $client->setId($result['id']); 
    $client->setNom($result['nom']); 
    $client->setPrenom($result['prenom']); 
    $client->setEmail($result['email']); 
    $client->setTelephone($result['telephone']); 
    $client->setAdresse($result['adresse']); 
    $client->setCreatedAt(date_create_from_format('Y-m-d', $result['create_time']));

    return $client; 
    }

    public function create (Client $client):bool
    {
        $statement=$this->connection
        ->getConnection()
        ->prepare('INSERT INTO client(nom, prenom, email, telephone, adresse)VALUES(:nom, :prenom, :email, :telephone, :adresse)'); 
        return $statement->execute([
            'nom'=>$client->getNom(),
            'prenom'=>$client->getPrenom(), 
            'email'=>$client->getEmail(),
            'telephone'=>$client->getTelephone(),
            'adresse'=>$client->getAdresse(),
        ]);
    }
    public function update(Client $client):bool
    {
        $statement=$this->connection
        ->getConnection()
        ->prepare('UPDATE client SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, adresse = :adresse WHERE id= :id'); 
        return $statement->execute([
            'id'=>$client->getId(),
            'nom'=>$client->getNom(),
            'prenom'=>$client->getPrenom(),
            'email'=>$client->getEmail(),
            'telephone'=>$client->getTelephone(),
            'adresse'=>$client->getAdresse()
        ]);
    }
        public function detele (int $id):bool{
            $statement=$this->connection->getConnection()
            ->prepare('DELETE FROM client WHERE id= :id'); 
            $statement->bindParam(':id',$id);
            return $statement->execute();
        }
    }