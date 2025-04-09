<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>
<br>
<br>
<div class="d-flex flex-column align-items-center justify-content-center">
<h2 class="mb-4"> Détail du contract</h2>

<p><strong>Type de Contract : </strong> <?= $contract->getTypeDeContract() ?></p>
<p><strong> Montant souscrit: </strong> <?= $contract->getMontant() ?></p>
<p><strong>Duree du contract: </strong> <?= $contract->getDuree() ?></p>
<p><strong>Client ID : </strong> <?= $contract->getidClient() ?></p>
<div class="d-flex gap-2">
<a href="?action=edit_contract&id=<?= $contract->getId() ?>" class="btn btn-warning">Modifier le contract</a>
<a href="?action=list_contract" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
