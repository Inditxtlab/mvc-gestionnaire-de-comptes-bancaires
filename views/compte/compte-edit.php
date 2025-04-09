<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>

<div class="container d-flex justify-content-center">
    <div class="w-100" style="max-width: 85%;">

<h2 class="mb-4">Modifier une compte</h2>

<form action="?action=update_compte" method="POST">
    <input type="hidden" name="id" value="<?= $compte->getId() ?>">
    <div class="mb-3">
        <label for="RIB" class="form-label">RIB :</label>
        <input type="text" class="form-control" id="rib" name="rib" value="<?= $compte->getRib() ?>" required>
    </div>
    <div class="mb-3">
        <?php

        $typedeCompte = $compte->getTypeDeCompte();

        ?>
        <label for="TypeDeCompte" class="form-label">Type de Compte :</label>
        <select class="form-control" name="typeDeCompte" id="TypeDeCompte" required>
            <option <?= $typedeCompte == 'Courant' ? 'selected' : '' ?> value="Courant">Compte courant</option>
            <option <?= $typedeCompte == 'epargne' ? 'selected' : '' ?> value="epargne">Compte epargne</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="RIB" class="form-label">Solde Initiale:</label>
        <input type="text" class="form-control" id="solde" name="solde" value="<?= $compte->getSolde() ?>" required>
    </div>
    <div class="mb-3">
        <label for="ClientId" class="form-label">Client Id:</label>
        <input type="text" class="form-control" id="clientid" name="clientid" value="<?= $compte->getClientId() ?>" required>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=list_compte" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
