<?php

require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; 

?>

<br>
<h3 class="text-center">Liste de Clients</h3>
<hr>
<table class="table table-striped table-bordered mx-auto" style="width: 70%">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
<?php foreach($clients as $client): ?>

<tr>

<td><?= $client->getId()?></td>
    <td><?=$client->getNom() ?></a></td>
    <td><?= $client->getPrenom() ?></td>
    <td><?= $client->getEmail() ?></td>
    <td><?= $client->getTelephone() ?></td>
    <td><?= $client->getAdresse()?></td>
    <td>
        <a href="?action=view&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm">Voir</a>
        <a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm">Modifier</a>
        <a onclick="return confirm('Vous êtes sur le point de supprimer un client');" href="?action=delete&id=<?= $client->getId() ?>" class="btn btn-danger btn-sm">Supprimer</a>
    </td>

</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php require_once __DIR__ . '/../templates/footer.php'; 