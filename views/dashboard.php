<?php require_once __DIR__ . '/templates/header.php';
require_once __DIR__ .'/../views/templates/barrelateral.php' ?>

<h2 class="text-center mb-4">📊 Tableau de bord</h2>
<div class="row justify-content-center gap-4">
  <div class="col-md-3">
  <a href="?action=list" class="text-decoration-none">
    <div class="card text-white bg-primary mb-3">
      <div class="card-header">👥 Clients</div>
      <div class="card-body">
        <h4 class="card-title"><?= $nbClients ?></h4>
      </div>
    </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="?action=list_compte" class="text-decoration-none">
    <div class="card text-white bg-secondary mb-3">
      <div class="card-header">💳 Comptes</div>
      <div class="card-body">
        <h4 class="card-title"><?= $nbComptes ?></h4>
        </div>
      </div>
      </div>
      </a>
  </div>

  <!-- <div class="col-md-3">
  <a href="?action=list_compte" class="text-decoration-none">
    <div class="card text-white bg-warning mb-3">
      <div class="card-header">💰 Contracts</div>
      <div class="card-body">
      <h5 class="card-title"><?= $nbContracts ?></h5>
      </div>
    </div>
  </div>
  </a>
</div> -->