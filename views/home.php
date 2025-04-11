<?php require_once __DIR__ . '/templates/header.php';
 ?><br>
<h2 class=text-center>Bienvenue à l'espace admin de La Banque ECF</h2>
<br>
<p class=text-center>Veuillez vous connecter</p>
<br>
<div class="container d-flex justify-content-center align-items-center container-custom">
<form id="loginform" action="?action=doLogin" method="post" class="w-50">
<div class="mb-3">
    <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email" required>
    </div>
  <div>
    <label for="password">Mot de passe</label>
    <br>
    <input type="password" name="password" id="password" required>
    </div>
<br>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
</div>
<script>src:"mvc-banque/connexion.js"</script>


