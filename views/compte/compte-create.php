<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>
<style>
    .error{
        color: red;
        font-style: italic;
    }
</style>

<div class="container mt-3">
<h2 class="mb-4 text-center">Créer une nouvelle compte</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8" style="width: 65%">

<form action="?action=store_compte" method="POST" id="compteform">
    <div class="mb-3">
        <label for="rib" class="form-label">RIB :</label>
        <input type="text" class="form-control" id="rib" name="rib">
    </div>
    <div id="rib_erreur" class="error"></div>
    <div class="mb-3">
        <label for="TypeDeCompte" class="form-label">Type de compte :</label>
        <select class="form-control" name="typeDeCompte" id="typeDeCompte">
            <option value="curant">Compte courant</option>
            <option value="epargne">Compte epargne</option>
        </select>
    </div>
    <div id="typedecompte_erreur" class="error"></div>
    <div class="mb-3">
        <label for="solde" class="form-label">Solde initiale :</label>
        <input type="text" class="form-control" id="solde" name="solde">
    </div>
    <div id="solde_erreur" class="error"></div>
    <div class="mb-3">
        <label for="clientId" class="form-label">Client Id :</label>
        <input type="text" class="form-control" id="clientId" name="clientId">
    </div>
    <div id="clientId_erreur" class="error"></div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<br>
<a href="?action=list_compte" class="btn btn-secondary">Retour à la liste</a>
</div>
</div>
</div>

<script src='/mvc-banque/compte.js'></script>