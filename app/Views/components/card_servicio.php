<div class="card h-100 shadow-sm">
    <?php if (!empty($imagen)): ?>
        <img src="<?= esc($imagen) ?>" class="card-img-top" alt="<?= esc($titulo) ?>" loading="lazy" width="400" height="250">
    <?php endif; ?>
    <div class="card-body">
        <h5 class="card-title"><?= esc($titulo) ?></h5>
        <p class="card-text"><?= esc($descripcion_corta ?? $descripcion) ?></p>
        <?php if (!empty($url)): ?>
            <a href="<?= esc($url) ?>" class="btn btn-primary">Ver más</a>
        <?php endif; ?>
    </div>
</div>
