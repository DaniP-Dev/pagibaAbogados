<style>
  .navbar.custom-navbar {
    min-height: 80px;
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: 1.15rem;
  }
  @media (max-width: 991.98px) {
    .navbar.custom-navbar {
      min-height: 80px;
      font-size: 1rem;
      padding-top: 1.2rem;
      padding-bottom: 1.2rem;
    }
    .navbar-brand {
      font-size: 1.1rem;
    }
  }
  @media (max-width: 575.98px) {
    .navbar.custom-navbar {
      min-height: 100px;
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
    .navbar-brand {
      font-size: 1.2rem;
    }
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-opacity-75 position-fixed w-100 top-0 start-0 custom-navbar" style="z-index:1040; backdrop-filter: blur(8px);">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Abogado Guerreros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('servicios') ?>">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('contacto') ?>">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
