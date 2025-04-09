<?php require_once __DIR__ . '/templates/header.php';
require_once __DIR__ .'/../views/templates/barrelateral.php' ?>
<br>
<h2 class="text-center mb-4">Tableau de bord</h2>
<div class="row d-flex justify-content-center gap-4" style="flex-wrap: nowrap;">
  <div class="col-md-3">
    <a href="?action=list" class="text-decoration-none">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header">Nombre de Clients</div>
        <div class="card-body">
          <h4 class="card-title"><?= $nbClients ?></h4>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="?action=list_compte" class="text-decoration-none">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Nombre de Comptes</div>
        <div class="card-body">
          <h4 class="card-title"><?= $nbComptes ?></h4>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a href="?action=list_contract" class="text-decoration-none">
      <div class="card text-white bg-warning mb-3">
        <div class="card-header">Nombre de Contracts</div>
        <div class="card-body">
          <h5 class="card-title"><?= $nbContracts ?></h5>
        </div>
      </div>
    </a>
  </div>
</div>