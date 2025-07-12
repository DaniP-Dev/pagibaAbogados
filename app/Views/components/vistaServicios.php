<?php
?>
<style>
  .servicios-carousel {
    display: flex;
    overflow-x: auto;
    gap: 2rem;
    scroll-behavior: smooth;
    padding-bottom: 1rem;
    width: 100vw;
    max-width: 100vw;
    margin-left: calc(-1 * ((100vw - 100%) / 2));
    scrollbar-width: thin;
    scrollbar-color: #ced4da #f8f9fa;
  }
  .servicios-carousel::-webkit-scrollbar {
    height: 8px;
    background: #f8f9fa;
  }
  .servicios-carousel::-webkit-scrollbar-thumb {
    background: #ced4da;
    border-radius: 4px;
  }
  .servicios-carousel::-webkit-scrollbar-track {
    background: #f8f9fa;
    border-radius: 4px;
  }
  .servicio-card {
    flex: 0 0 320px;
    background: #fff;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    padding: 2rem 1.5rem 1.5rem 1.5rem;
    margin-bottom: 1rem;
    transition: box-shadow 0.2s;
    position: relative;
    min-width: 280px;
    max-width: 95vw;
  }
  .servicio-card:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.14);
    z-index: 2;
  }
  .servicio-img {
    width: 96px;
    height: 96px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
    border: 3px solid #e9ecef;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  }
  .servicio-titulo {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #212529;
  }
  .servicio-desc {
    font-size: 1rem;
    color: #495057;
    margin-bottom: 1.2rem;
    min-height: 48px;
  }
  .servicio-btn {
    font-size: 0.95rem;
    padding: 0.5rem 1.2rem;
    border-radius: 2rem;
    background: var(--bs-secondary);
    color: #fff;
    border: none;
    transition: background 0.2s;
    text-decoration: none;
    display: inline-block;
  }
  .servicio-btn:hover {
    background: var(--bs-secondary-dark, #343a40);
    color: #fff;
  }
  @media (max-width: 900px) {
    .servicio-card {
      flex: 0 0 70vw;
      min-width: 220px;
      padding: 1.2rem 0.7rem 1rem 0.7rem;
    }
    .servicios-carousel {
      gap: 1rem;
    }
  }
  @media (max-width: 600px) {
    .servicio-card {
      flex: 0 0 90vw;
      min-width: 180px;
      padding: 1rem 0.5rem 0.7rem 0.5rem;
    }
    .servicio-img {
      width: 72px;
      height: 72px;
    }
    .servicios-carousel {
      gap: 0.5rem;
    }
  }
  .container-servicios {
    width: 100vw;
    max-width: 100vw;
    margin-left: calc(-1 * ((100vw - 100%) / 2));
    padding: 0;
  }
</style>
<div class="container-servicios py-5 px-0">
  <h2 class="text-center mb-4 fw-bold" style="letter-spacing:1px;">Nuestros Servicios</h2>
  <div class="servicios-carousel" id="servicios-carousel">
    <?php foreach ($servicios as $servicio): ?>
      <div class="servicio-card text-center">
        <?php if (!empty($servicio['imagen'])): ?>
          <img src="<?= esc($servicio['imagen']) ?>" class="servicio-img" alt="<?= esc($servicio['titulo']) ?>">
        <?php else: ?>
          <svg class="servicio-img" xmlns="http://www.w3.org/2000/svg" width="96" height="96">
            <rect width="100%" height="100%" fill="#dee2e6"/>
            <text x="50%" y="55%" text-anchor="middle" fill="#adb5bd" font-size="18"><?= esc($servicio['titulo'][0]) ?></text>
          </svg>
        <?php endif; ?>
        <div class="servicio-titulo"><?= esc($servicio['titulo']) ?></div>
        <div class="servicio-desc"><?= esc($servicio['descripcion_corta']) ?></div>
        <a class="servicio-btn" href="<?= base_url('servicios/' . $servicio['slug']) ?>">
          Ver detalles &raquo;
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<script>
  const carousel = document.getElementById('servicios-carousel');
  carousel.addEventListener('wheel', function(e) {
    const atStart = carousel.scrollLeft === 0;
    const atEnd = Math.ceil(carousel.scrollLeft + carousel.offsetWidth) >= carousel.scrollWidth;
    if ((e.deltaY < 0 && atStart) || (e.deltaY > 0 && atEnd)) {
      return;
    }
    if (e.deltaY !== 0) {
      e.preventDefault();
      carousel.scrollLeft += e.deltaY;
    }
  });
</script>