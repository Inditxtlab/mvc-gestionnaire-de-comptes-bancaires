<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php';  ?>

<br>
<br>
<div class="d-flex flex-column align-items-center justify-content-center">
<h2 class="mb-4"> Détail de Client</h2>

<p><strong>Nom : </strong> <?= $client->getNom()?></p>
<p><strong>Prenom : </strong> <?= $client->getPrenom()?></p>
<p><strong>E-mail: </strong> <?= $client->getEmail()?></p>
<p><strong>Téléphone: </strong> <?= $client->getTelephone()?></p>
<p><strong>Adresse: </strong> <?= $client->getAdresse()?></p>
<div class="d-flex gap-2">
<a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning">Modifier</a>
<a href="?action=list" class="btn btn-secondary">Retour à l'accueil</a>
</div>
</div>
