<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>
<h1><?= esc($titulo) ?></h1>
<p><?= esc($contenido) ?></p>
<!-- Aquí puedes agregar más campos dinámicos del blog -->
<?= $this->endSection() ?>
