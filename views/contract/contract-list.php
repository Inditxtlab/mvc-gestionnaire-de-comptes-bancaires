<?php

require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php';
?>
<br>
<h3 class="mb-4 text-center">Liste des contracts</h3>
<hr>
<div class="mx-auto mb-3" style="width: 70%;">
  <div class="text-end">
    <a href="?action=create_contract" class="btn btn-secondary">
      <i class="bi bi-plus text-center"></i> Nouveau Contract
    </a>
  </div>
</div>
<table class="table table-striped table-bordered mx-auto" style="width: 80%">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Type de Contract</th>
            <th>Montant Souscrit</th>
            <th>Duree du contract</th>
            <th>Client ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($contracts) && !empty($contracts)): ?>
            <?php foreach($contracts as $contract): ?>
                <tr>
                    <td><?= $contract->getId(); ?></td>
                    <td><?= $contract->getTypeDeContract(); ?></td>
                    <td><?= $contract->getMontant();?>€</td>
                    <td><?= $contract->getDuree(); ?></td>
                    <td><?= $contract->getidClient(); ?></td>
                    <td>
                        <a href="?action=view_contract&id=<?= $contract->getId() ?>" class="btn btn-primary btn-sm">Voir</a>
                        <a href="?action=edit_contract&id=<?= $contract->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a onclick="return confirm('T’es sûr ?');" href="?action=delete_contract&id=<?= $contract->getId() ?>" class="btn btn-dark btn-sm">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">Aucun contract disponible</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>