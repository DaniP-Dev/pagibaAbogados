<?= $this->extend('layout_main') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-5">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title mb-3">Contáctanos</h1>
                    <p class="lead">¿Necesitas asesoría legal en Colombia? Estamos en Bogotá y atendemos todo el país.</p>
                    <h5 class="mb-3">Información de contacto</h5>
                    <ul class="list-unstyled mb-3">
                        <li><i class="bi bi-geo-alt-fill me-2"></i><strong>Dirección:</strong> Calle 123 #45-67, Bogotá, Colombia</li>
                        <li><i class="bi bi-telephone-fill me-2"></i><strong>Teléfono:</strong> <a href="tel:+573001234567">+57 300 123 4567</a></li>
                        <li><i class="bi bi-envelope-fill me-2"></i><strong>Email:</strong> <a href="mailto:info@abogadoguerreros.com">info@abogadoguerreros.com</a></li>
                        <li><i class="bi bi-clock-fill me-2"></i><strong>Horario:</strong> Lunes a Viernes, 8:00am - 6:00pm</li>
                    </ul>
                    <a href="https://wa.me/573001234567" class="btn btn-success w-100 mb-2" target="_blank"><i class="bi bi-whatsapp"></i> Contactar por WhatsApp</a>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3">Envíanos un mensaje</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Tu email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <iframe src="https://www.google.com/maps?q=4.7110,-74.0721&z=15&output=embed" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
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
