<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>

<div class="container mt-3">
<h2 class="mb-4">Créer un nouvel contract</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8" style="width: 65%">

<form action="?action=store_contract" method="POST">
    <div class="mb-3">
        <label for="TypeDeContract" class="form-label">Type de contract :</label>
        <select class="form-control" name="typeDeContract" id="typeDeContract" required>
            <option value="AssuranceVie">Assurance vie</option>
            <option value="creditInmobilier">Crédit Inmobilier</option>
            <option value="creditConsommation">Crédit à la Consomation</option>
            <option value="CEL">Compte Epargne Logement (CEL)</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="montant" class="form-label">Montant Souscrit :</label>
        <input type="text" class="form-control" id="montant" name="montantSouscrit" required>
    </div>
    <div class="mb-3">
        <label for="idClient" class="form-label">Client Id :</label>
        <input type="text" class="form-control" id="idClient" name="idClient" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<br>
<a href="?action=list_contract" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
</div>
