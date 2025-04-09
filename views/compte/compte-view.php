<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>
<br>
<br>
<div class="d-flex flex-column align-items-center justify-content-center">
<h2 class="mb-4">Détail de la compte</h2>

<p><strong>Rib : </strong> <?= $compte->getRib() ?></p>
<p><strong> Type de Compte: </strong> <?= $compte->getTypeDeCompte() ?></p>
<p><strong>Solde : </strong> <?= $compte->getSolde() ?></p>
<p><strong>Client ID : </strong> <?= $compte->getClientId() ?></p>
<div class="d-flex gap-2">
<a href="?action=edit_compte&id=<?= $compte->getId() ?>" class="btn btn-warning">Modifier la compte</a>
<a href="?action=list_compte" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
