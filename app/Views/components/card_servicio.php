<style>
.card-servicio-animada {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.6s, transform 0.6s;
}
.card-servicio-animada.visible {
  opacity: 1;
  transform: translateY(0);
}
.card-servicio-animada:hover {
  box-shadow: 0 8px 32px rgba(0,0,0,0.18);
  transform: translateY(-8px) scale(1.03);
  transition: box-shadow 0.3s, transform 0.3s;
}
</style>

<div class="card card-servicio-animada h-100 shadow-sm">
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
<script>
document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.card-servicio-animada');
  const showOnScroll = () => {
    cards.forEach(card => {
      const rect = card.getBoundingClientRect();
      if(rect.top < window.innerHeight - 60) {
        card.classList.add('visible');
      }
    });
  };
  window.addEventListener('scroll', showOnScroll);
  showOnScroll();
});
</script>
