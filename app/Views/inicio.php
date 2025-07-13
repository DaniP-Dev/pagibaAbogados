<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>

<?= view('components/bannerCuentaRegresiva') ?>

<?= view('components/herosection') ?>

<!-- Sección marketing: tres columnas -->
<?= view('components/vistaServicios', ['servicios' => $servicios]) ?>

<!-- Featurettes -->
<hr class="featurette-divider mb-2">
<div class="row featurette px-2 px-md-5 align-items-center mt-2 mb-2">
  <div class="col-md-7 text-center text-md-left">
    <h2 class="featurette-heading fw-normal lh-1 mb-1">Experiencia y resultados. <span class="text-body-secondary">Te sorprenderán.</span></h2>
    <p class="lead mb-2">Más de 15 años defendiendo los derechos de nuestros clientes en Colombia.</p>
  </div>
  <div class="col-md-5 text-center">
    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto p-2" height="500" width="500" xmlns="http://www.w3.org/2000/svg"><title>Experiencia</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">15 años</text></svg>
  </div>
</div>
<hr class="featurette-divider mb-2">
<div class="row featurette px-2 px-md-5 align-items-center mt-2 mb-2">
  <div class="col-md-7 order-md-2 text-center text-md-left">
    <h2 class="featurette-heading fw-normal lh-1 mb-1">Atención personalizada. <span class="text-body-secondary">Compruébalo.</span></h2>
    <p class="lead mb-2">Cada caso es único. Te acompañamos en todo el proceso legal.</p>
  </div>
  <div class="col-md-5 order-md-1 text-center">
    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto p-2" height="500" width="500" xmlns="http://www.w3.org/2000/svg"><title>Atención</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">Personalizada</text></svg>
  </div>
</div>
<hr class="featurette-divider mb-2">
<div class="row featurette px-2 px-md-5 align-items-center mt-2 mb-2">
  <div class="col-md-7 text-center text-md-left">
    <h2 class="featurette-heading fw-normal lh-1 mb-1">Resultados comprobados. <span class="text-body-secondary">Confía en nosotros.</span></h2>
    <p class="lead mb-2">Casos de éxito y testimonios de clientes satisfechos.</p>
  </div>
  <div class="col-md-5 text-center">
    <svg aria-label="Placeholder: 500x500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto p-2" height="500" width="500" xmlns="http://www.w3.org/2000/svg"><title>Resultados</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">Éxito</text></svg>
  </div>
</div>
<hr class="featurette-divider mb-2">

<?= $this->endSection() ?>
