<style>
  .footer-responsive {
    width: 100%;
    padding-left: 1rem;
    padding-right: 1rem;
  }
  @media (min-width: 576px) {
    .footer-responsive {
      padding-left: 2rem;
      padding-right: 2rem;
    }
  }
</style>
<footer class="bg-dark text-white pt-4 pb-2 mt-5">
  <div class="container footer-responsive">
    <div class="row gy-4">
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <h5 class="fw-bold">Abogado Guerreros</h5>
        <p class="mb-1">Defensa y asesoría legal en Colombia.</p>
        <p class="small mb-0">&copy; <?= date('Y') ?> Guerrero Abogados. Todos los derechos reservados.</p>
      </div>
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <h6 class="fw-bold">Contacto</h6>
        <ul class="list-unstyled mb-0">
          <li><i class="bi bi-envelope"></i> contacto@guerreroabogados.co</li>
          <li><i class="bi bi-telephone"></i> +57 300 123 4567</li>
          <li><i class="bi bi-geo-alt"></i> Bogotá, Colombia</li>
        </ul>
      </div>
      <div class="col-12 col-md-4">
        <h6 class="fw-bold">Síguenos</h6>
        <a href="https://facebook.com/guerreroabogados" class="text-white me-3" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/guerreroabogados" class="text-white me-3" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/573001234567" class="text-white" target="_blank"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
    <hr class="border-secondary mt-4 mb-2">
    <div class="row">
      <div class="col text-center small">
        <a href="/privacidad" class="text-white-50 me-3">Política de privacidad</a>
        <a href="/terminos" class="text-white-50">Términos y condiciones</a>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
