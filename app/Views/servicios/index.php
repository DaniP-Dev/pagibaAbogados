<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
    <div class="col-md-8 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-bold">Nuestros Servicios</h1>
        <h3 class="fw-normal text-muted mb-3">Conoce los servicios que ofrecemos para ti y tu empresa.</h3>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
        <?php foreach ($servicios as $servicio): ?>
            <div class="col d-flex align-items-stretch">
                <div class="card h-100 shadow-sm border-0">
                    <?php if (!empty($servicio['imagen'])): ?>
                        <img src="<?= esc($servicio['imagen']) ?>" class="card-img-top" alt="<?= esc($servicio['titulo']) ?>" loading="lazy" width="400" height="250">
                    <?php endif; ?>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= esc($servicio['titulo']) ?></h5>
                        <p class="card-text flex-grow-1"><?= esc($servicio['descripcion_corta'] ?? $servicio['descripcion']) ?></p>
                        <a href="<?= base_url('servicios/' . $servicio['slug']) ?>" class="btn btn-bd-primary mt-3">Ver más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
