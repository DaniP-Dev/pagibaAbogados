<style>
  .hero-video-bg {
    position: relative;
    height: 90vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100vw;
    left: 50%;
    transform: translateX(-50%);
  }
  .hero-video-bg video {
    position: absolute;
    top: 0; left: 0;
    width: 100vw;
    height: 100%;
    object-fit: cover;
    z-index: 1;
  }
  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100vw;
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
<style>
  .scroll-indicator {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 32px;
    z-index: 10;
    text-align: center;
  }
  .arrow-down {
    display: inline-block;
    width: 32px;
    height: 32px;
    border-left: 4px solid #fff;
    border-bottom: 4px solid #fff;
    transform: rotate(-45deg);
    animation: bounce 1.2s infinite;
  }
  @keyframes bounce {
    0%, 100% { transform: translateY(0) rotate(-45deg); }
    50% { transform: translateY(12px) rotate(-45deg); }
  }
</style>

<div class="hero-video-bg mt-3">
  <!-- SEO: Título principal y enlace canónico -->
  <link rel="canonical" href="https://www.guerreroabogados.co/" />
  <h1 class="visually-hidden">Abogado Guerreros - Defensa y asesoría legal en Colombia</h1>
  <video autoplay muted loop playsinline>
    <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
    Tu navegador no soporta el video.
  </video>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h2 class="display-4 fw-bold">Bienvenido a Abogado Guerreros</h2>
    <p class="lead">Defendemos tus derechos con experiencia y compromiso.</p>
    <a href="#contacto" class="btn btn-primary btn-lg mt-3">Agenda tu consulta</a>
      <div class="container mt-4">
        <div class="row justify-content-center">
          <div class="col-6 col-md-4 mb-3">
            <div class="card bg-dark bg-opacity-75 text-white text-center border-0 shadow">
              <div class="card-body">
                <h3 class="counter display-5 fw-bold" data-target="15">0</h3>
                <p class="mb-0">Años de experiencia</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="card bg-dark bg-opacity-75 text-white text-center border-0 shadow">
              <div class="card-body">
                <h3 class="counter display-5 fw-bold" data-target="1200">0</h3>
                <p class="mb-0">Casos ganados</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 mb-3">
            <div class="card bg-dark bg-opacity-75 text-white text-center border-0 shadow">
              <div class="card-body">
                <h3 class="counter display-5 fw-bold" data-target="800">0</h3>
                <p class="mb-0">Clientes satisfechos</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 60;
        if(count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 30);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  });
</script>
  <div class="scroll-indicator">
    <span class="arrow-down"></span>
  </div>
