<?php require_once __DIR__ . '/templates/header.php'; ?>

<form>
  <div class="container d-flex justify-content-center align-items-center container-custom">
    <form class="w-50" action="?action=doLogin" method="POST">
      <div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input type="email" class="form-control" id="emailadmin" required>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe :</label>
    <input type="password" class="form-control" id="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require_once __DIR__ . '/../views/templates/footer.php'; 