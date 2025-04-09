<?php

require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>

<h3 class="mb-4 text-center">Liste des comptes</h3>
<hr>
<div class="mx-auto mb-3" style="width: 70%;">
  <div class="text-end">
    <a href="?action=create_compte" class="btn btn-primary">
      <i class="bi bi-plus"></i> Nouvelle Compte
    </a>
  </div>
</div>
<table class="table table-striped table-bordered mx-auto" style="width: 70%">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>RIB</th>
            <th>Type de Compte</th>
            <th>Solde initiale</th>
            <th>Client ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($comptes as $compte): ?>

            <tr>

                <td><?= $compte->getId(); ?></td>
                <td><?=$compte->getRib(); ?>
                <td><?= $compte->getTypeDeCompte(); ?></td>
                <td><?= $compte->getSolde(); ?>€</td>
                <td><?= $compte->getClientId(); ?></td>
                <td>
                    <a href="?action=view_compte&id=<?= $compte->getId() ?>" class="btn btn-primary btn-sm">Voir</a>
                    <a href="?action=edit_compte&id=<?= $compte->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a onclick="return confirm('T’es sûr ?');" href="?action=delete_compte&id=<?= $compte->getId() ?>" class="btn btn-dark btn-sm">Supprimer</a>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
