<?php require_once __DIR__ . '/../templates/header.php';
require_once __DIR__ . '/../templates/barrelateral.php'; ?>

<div class="container mt-3">
<h2 class="mb-4">Créer un nouvel client</h2>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8" style="width: 65%">
<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email : :</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone :</label>
        <input type="text" class="form-control" id="telephone" name="telephone" required>
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<br>

<a href="?" class="btn btn-secondary">Retour à la liste</a>

</div>
</div>
</div>

<?php 