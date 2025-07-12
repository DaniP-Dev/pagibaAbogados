<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<style>
.product-image {
    max-height: 400px;
    object-fit: cover;
}
.thumbnail {
    width: 80px;
    height: 80px;
    object-fit: cover;
    cursor: pointer;
    opacity: 0.6;
    transition: opacity 0.3s ease;
}
.thumbnail:hover, .thumbnail.active {
    opacity: 1;
}
</style>
<div class="container mt-5">
    <div class="row">
        <!-- Service Images -->
        <div class="col-md-6 mb-4">
            <img src="<?= esc($imagen_principal ?? $imagen ?? 'https://via.placeholder.com/600x400?text=Servicio') ?>" alt="<?= esc($titulo) ?>" class="img-fluid rounded mb-3 product-image" id="mainImage" loading="eager" width="600" height="400">
            <?php if (!empty($imagenes) && is_array($imagenes)): ?>
            <div class="d-flex justify-content-between">
                <?php foreach ($imagenes as $img): ?>
                    <img src="<?= esc($img) ?>" alt="Miniatura <?= esc($titulo) ?>" class="thumbnail rounded<?= ($img === ($imagen_principal ?? $imagen)) ? ' active' : '' ?>" loading="lazy" width="80" height="80" onclick="changeImage(event, this.src)">
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- Service Details -->
        <div class="col-md-6">
            <h2 class="mb-3"><?= esc($titulo) ?></h2>
            <?php if (!empty($precio)): ?>
            <div class="mb-3">
                <span class="h4 me-2">Desde $<?= esc(number_format($precio, 2)) ?></span>
            </div>
            <?php endif; ?>
            <?php if (!empty($rating)): ?>
            <div class="mb-3">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <?php if ($i <= floor($rating)): ?>
                        <i class="bi bi-star-fill text-warning"></i>
                    <?php elseif ($i - $rating < 1): ?>
                        <i class="bi bi-star-half text-warning"></i>
                    <?php else: ?>
                        <i class="bi bi-star text-warning"></i>
                    <?php endif; ?>
                <?php endfor; ?>
                <span class="ms-2"><?= esc($rating) ?><?= !empty($reviews) ? ' (' . esc($reviews) . ' opiniones)' : '' ?></span>
            </div>
            <?php endif; ?>
            <p class="mb-4"><?= esc($descripcion) ?></p>
            <?php if (!empty($caracteristicas) && is_array($caracteristicas)): ?>
            <div class="mt-4">
                <h5>¿Por qué elegir este servicio?</h5>
                <ul>
                    <?php foreach ($caracteristicas as $carac): ?>
                        <li><?= esc($carac) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="mt-4">
                <a href="<?= base_url('contacto') ?>" class="btn btn-primary btn-lg">
                    <i class="bi bi-envelope"></i> Solicitar asesoría
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    function changeImage(event, src) {
        document.getElementById('mainImage').src = src;
        document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>
<?= $this->endSection() ?>
