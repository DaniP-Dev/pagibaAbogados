<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <h1 class="mb-4">Contáctanos</h1>
    <p class="lead">¿Necesitas asesoría legal en Colombia? Estamos en Bogotá y atendemos todo el país.</p>
    <div class="row g-4">
        <div class="col-md-6">
            <h5 class="mb-3">Información de contacto</h5>
            <ul class="list-unstyled">
                <li><strong>Dirección:</strong> Calle 123 #45-67, Bogotá, Colombia</li>
                <li><strong>Teléfono:</strong> <a href="tel:+573001234567">+57 300 123 4567</a></li>
                <li><strong>Email:</strong> <a href="mailto:info@abogadoguerreros.com">info@abogadoguerreros.com</a></li>
                <li><strong>Horario:</strong> Lunes a Viernes, 8:00am - 6:00pm</li>
            </ul>
            <div class="mt-3">
                <a href="https://wa.me/573001234567" class="btn btn-success" target="_blank">Contactar por WhatsApp</a>
            </div>
        </div>
        <div class="col-md-6">
            <h5 class="mb-3">Ubicación</h5>
            <iframe src="https://www.google.com/maps?q=4.7110,-74.0721&z=15&output=embed" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!-- Datos estructurados LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Abogado Guerreros",
  "image": "<?= base_url('img/logo.png') ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Calle 123 #45-67",
    "addressLocality": "Bogotá",
    "addressRegion": "Cundinamarca",
    "postalCode": "110111",
    "addressCountry": "CO"
  },
  "url": "<?= base_url() ?>",
  "telephone": "+57 300 123 4567",
  "email": "info@abogadoguerreros.com",
  "openingHours": "Mo-Fr 08:00-18:00",
  "priceRange": "$$",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 4.7110,
    "longitude": -74.0721
  }
}
</script>
<?= $this->endSection() ?>
