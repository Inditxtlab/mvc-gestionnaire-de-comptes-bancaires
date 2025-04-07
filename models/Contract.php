<?php

require_once __DIR__ . '/../lib/database.php';

class Contract
{
    private int $id;
    private string $typeDeContract;
    private string $montantSouscrit;
    private string $duree;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTypeDeContract(): string
    {
        return $this->typeDeContract;
    }

    public function getMontantSouscrit(): string
    {
        return $this->montantSouscrit;
    }

    public function getDuree(): string
    {
        return $this->duree;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTypedeContract(string $typeDeContract): void
    {
        $this->typeDeContract = htmlspecialchars($typeDeContract);
    }

    public function setMontantSouscrit(string $montantSouscrit): void
    {
        $this->montantSouscrit = htmlspecialchars($montantSouscrit);
    }

    public function setDuree(string $duree): void
    {
        $this->duree = htmlspecialchars($duree);
    }

}

