<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>
<div class="container d-flex justify-content-center">
    <div class="w-100">
<h2 class="mb-4">✏️ Modifier un client</h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= $client->getNom() ?>" required>
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $client->getPrenom() ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $client->getEmail() ?>" required>
    </div>
    <div class="mb-3">
        <label for="telephome" class="form-label">Téléphone :</label>
        <input type="text" class="form-control" id="telephone" name="telephone" value="<?= $client->getTelephone() ?>" required>
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $client->getAdresse() ?>" required>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?action=list" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>

