<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= esc($meta_title ?? 'Abogado Guerreros | Abogados en Colombia, asesoría legal y defensa jurídica') ?></title>
    <meta name="description" content="<?= esc($meta_description ?? 'Abogados en Colombia. Asesoría legal, defensa penal, civil y más. Consulta con expertos en derecho colombiano.') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS: solo el core, mobile first -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- CSS crítico en línea para el above the fold -->
    <style>
        body { min-height: 100vh; max-width: 100vw; overflow-x: hidden; }
        .container { max-width: 960px; }
        .navbar { border-bottom: 1px solid #e5e5e5; }
        .card-img-top, img.bd-placeholder-img { width: 100%; height: auto; display: block; }
        .carousel-item { min-height: 480px; height: 60vh; }
        #myCarousel { margin-top: 4.5rem; }
        /* Puedes agregar aquí más CSS crítico para el header/navbar/hero */
    </style>
    <!-- CSS no crítico (custom/product/blog) -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="<?= base_url('css/product.css') ?>" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="<?= base_url('css/blog.rtl.css') ?>" media="print" onload="this.media='all'">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX'); // Reemplaza G-XXXXXXXXXX por tu ID real
    </script>
    <!-- Fin Google Analytics -->
</head>
<body>
    <?php echo view('components/navbar', ['navbar_links' => $navbar_links ?? []]); ?>
    <div class="main-content" style="margin-top: 100px;">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- Bootstrap JS Bundle: defer para no bloquear el render -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- Google Analytics y otros scripts -->
</body>
</html>
