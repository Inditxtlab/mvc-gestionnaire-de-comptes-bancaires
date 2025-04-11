<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>
<style>
    .error{
        color: red;
        font-style: italic;
    }
</style>
<div class="container mt-3">
<h2 class="mb-4 text-center">Créer un nouvel client</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8" style="width: 65%">
<form action="?action=store" method="POST" id="clientform" >
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div id="nom_erreur" class="error"></div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div id="prenom_erreur" class="error"></div>
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div id="mail_erreur" class="error"></div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone :</label>
        <input type="text" class="form-control" id="telephone" name="telephone">
    </div>
    <div id="tlf_erreur" class="error"></div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse">
    </div>
    <div id="adresse_erreur" class="error"></div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<br>

<a href="?action=list" class="btn btn-secondary">Retour à la liste</a>

</div>
</div>
</div>
<script src='/mvc-banque/client.js'></script>

