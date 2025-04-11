<div class="sidebar-icons">
  <i class="bi bi-house-door" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" title="Accueil"></i>
  <i class="bi bi-person" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" title="clients"></i>
  <i class="bi bi-credit-card" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" title="comptes"></i>
  <i class="bi bi-file-earmark-text" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" title="contracts"></i>
</div>
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li><a href="?action=dashboard" class="nav-link text-white close-menu">Accueil</a></li>
      <br>
      <li><a href="?action=list" class="nav-link text-white close-menu">Clients</a></li>
      <br>
      <li><a href="?action=list_compte" class="nav-link text-white close-menu">Comptes</a></li>
      <br>
      <li><a href="?action=list_contract" class="nav-link text-white close-menu">Contract</a></li>
      <br>
    </ul>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  document.querySelectorAll('.close-menu').forEach(link => {
    link.addEventListener('click', () => {
      const offcanvasElement = document.getElementById('offcanvasMenu');
      const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
      if (bsOffcanvas) {
        bsOffcanvas.hide();
      }
    }); 
</script>

</body>
</html>