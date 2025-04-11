<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>

<div class="container d-flex justify-content-center">
    <div class="w-100" style="max-width: 85%;">

<h2 class="mb-4">Modifier un contract</h2>

<form action="?action=update_contract" method="POST">
    <input type="hidden" name="id" value="<?= $contract->getId() ?>">
    <div class="mb-3">
        <?php

        $typedeContract = $contract->getTypeDeContract();

        ?>
        <label for="TypeDeContract" class="form-label">Type de Contract :</label>
        <select class="form-control" name="typeDeContract" id="TypeDeContract">
            <option <?= $typedeContract == 'Assurance Vie' ? 'selected' : '' ?> value="assuranceVie">Assurance Vie</option>
            <option <?= $typedeContract == 'credit inmobilier' ? 'selected' : '' ?> value="creditInmobilier">Crédit Inmobilier</option>
            <option <?= $typedeContract == 'creditConsommation' ? 'selected' : '' ?> value="creditConsommation">Crédit à la Consommation</option>
            <option <?= $typedeContract == 'compteepargnelogement' ? 'selected' : '' ?> value="CEL">Compte Epargne Logement(CEL)</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="montant" class="form-label">Montant Souscrit :</label>
        <input type="text" class="form-control" id="montant" name="montantSouscrit" value="<?= $contract->getMontant() ?>">
    </div>
    <div class="mb-3">
        <label for="IdClient" class="form-label">Client Id :</label>
        <input type="text" class="form-control" id="idclient" name="idClient" value="<?= $contract->getidClient() ?>">
    </div>
    <div class="mb-3">
        <label for="duree" class="form-label">Durée du contrat (indiquer la date d'expiration) :</label>
        <input type="text" class="form-control" id="duree" name="duree" value="<?= $contract->getDuree() ?>" required>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=list_contract" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
