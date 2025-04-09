<?php require_once __DIR__ . '/templates/header.php';
 ?>


<h2 class=text-center>Bienvenue à l'espace de gestion de comptes bancaires de La Banque ECF</h2>
<br>
<p class=text-center>Veuillez vous connecter</p>
<br>
<div class="container d-flex justify-content-center align-items-center">
  <form action="?action=doLogin" method="POST" class="w-50 border p-4 rounded shadow">
    <h4 class="text-center mb-4">Connexion</h4>
    <div class="mb-3">
      <label for="email" class="form-label">Email :</label>
      <input type="email" name="email" class="form-control" id="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe :</label>
      <input type="password" name="password" class="form-control" id="password" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Se connecter</button>
  </form>
</div>
