<?php

require_once __DIR__ . '/../lib/database.php';

class Compte
{
    private int $id;
    private string $rib;
    private string $typeDeCompte;
    private string $soldeInitiale;
    private int $clientId;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setRib(string $rib): void
    {
        $this->rib = htmlspecialchars($rib);
    }

    public function setTypeDeCompte(string $typeDeCompte): void
    {
        $this->typeDeCompte= htmlspecialchars($typeDeCompte);
    }

    public function setSolde(string $soldeInitiale): void
    {
        $this->soldeInitiale = htmlspecialchars($soldeInitiale);
    }

    public function setClientId($clientId):void
    {
        $this->clientId = $clientId;
    } 


    public function getId(): int
    {
        return $this->id;
    }

    public function getRib(): string
    {
        return $this->rib;
    }

    public function getTypeDeCompte(): string
    {
        return $this->typeDeCompte;
    }

    public function getSolde(): string
    {
        return $this->soldeInitiale;
    }

    public function getClientId():int
    {
        return $this->clientId; 
    } 
}