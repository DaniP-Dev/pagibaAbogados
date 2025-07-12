<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>
<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Suscríbete</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Buscar</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Crear cuenta</a>
            </div>
        </div>
    </header>
    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="#">Actualidad</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Derecho</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Empresas</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Penal</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Civil</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Familia</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Laboral</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Más</a>
        </nav>
    </div>
</div>
<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic"><?= esc($destacado['titulo'] ?? 'Post destacado') ?></h1>
            <p class="lead my-3"><?= esc($destacado['resumen'] ?? 'Resumen del post destacado.') ?></p>
            <p class="lead mb-0"><a href="<?= base_url('blog/' . ($destacado['slug'] ?? '')) ?>" class="text-body-emphasis fw-bold">Leer más...</a></p>
        </div>
    </div>
    <div class="row mb-2">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Blog</strong>
                        <h3 class="mb-0"><?= esc($post['titulo']) ?></h3>
                        <div class="mb-1 text-body-secondary"><?= esc($post['fecha']) ?></div>
                        <p class="card-text mb-auto"><?= esc($post['resumen']) ?></p>
                        <a href="<?= base_url('blog/' . $post['slug']) ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Leer más
                            <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                    <?php if (!empty($post['imagen'])): ?>
                        <div class="col-auto d-none d-lg-block">
                            <img src="<?= esc($post['imagen']) ?>" class="bd-placeholder-img" width="200" height="250" alt="<?= esc($post['titulo']) ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
    <p>Blog de Abogado Guerreros &copy; <?= date('Y') ?></p>
    <p class="mb-0"><a href="#">Volver arriba</a></p>
</footer>
<?= $this->endSection() ?>
