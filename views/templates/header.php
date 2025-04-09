<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Système de gestion de comptes bancaires - MVC</title>
</head>
    <style>
        .navbar-custom {
      background-color: rgb(2, 22, 41);
    }
    .sidebar-icons {
      width: 60px;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      background-color:rgb(2, 22, 41);
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 1rem;
      z-index: 1030;
      margin-top: 60px;
    }

    .sidebar-icons i {
      font-size: 1.5rem;
      margin: 1rem 0;
      cursor: pointer;
    }

    .sidebar-icons i:hover {
      color:rgb(178, 202, 238);
    }

    .offcanvas {
      width: 200px;
    }
    .container-custom {
      border: 2px solid #000; /* Bordure noire */
      padding: 20px; /* Espacement intérieur */
      min-height: 30vh; /* Hauteur minimale pour occuper toute la hauteur de la fenêtre */
      margin-top: 50px;
      width: 50%;
      border-radius: 10px;
    }
  </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark navbar-custom px-3">
  <a class="navbar-brand text-light" href="?action=dashboard">🏙 La Banque ECF</a>

  <div class="ms-auto d-flex align-items-center gap-3">
    <?php if (isset($_SESSION['user_id'])): ?>
      <a href="?action=dashboard" class="btn btn-outline-light">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>

      <a href="?action=logout" class="btn btn-outline-light d-flex align-items-center">
        <i class="bi bi-box-arrow-in-left me-2"></i> Déconnexion
      </a>
    <?php else: ?>
      <a href="?action=login" class="btn btn-outline-light d-flex align-items-center">
        <i class="bi bi-box-arrow-in-right me-2"></i> Connexion
      </a>
    <?php endif; ?>
  </div>
</nav>