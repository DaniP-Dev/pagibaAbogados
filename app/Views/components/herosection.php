
<style>
  .hero-video-bg {
    position: relative;
    height: 90vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .hero-video-bg video {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
  }
  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: rgba(20, 20, 20, 0.5);
    z-index: 2;
  }
  .hero-content {
    position: relative;
    z-index: 3;
    color: #fff;
    text-align: center;
    padding: 2rem;
  }
</style>

<div class="hero-video-bg mt-3">
  <video autoplay muted loop playsinline>
    <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
    Tu navegador no soporta el video.
  </video>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h2 class="display-4 fw-bold">Bienvenido a Abogado Guerreros</h2>
    <p class="lead">Defendemos tus derechos con experiencia y compromiso.</p>
    <a href="#contacto" class="btn btn-primary btn-lg mt-3">Agenda tu consulta</a>
  </div>
</div>
