<?php
?>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
    body {
    font-family: "Martel Sans", sans-serif;
    }
    .servicios-carousel {
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        gap: 2rem;
        overflow-x: auto;
        width: 100vw;
        max-width: 100vw;
        margin-left: calc(-1 * ((100vw - 100%) / 2));
        padding-bottom: 2rem;
        scrollbar-width: thin;
        scrollbar-color: #ced4da #f8f9fa;
    }
    .servicios-carousel::-webkit-scrollbar {
        height: 8px;
        background: #f8f9fa;
    }
    .servicios-carousel::-webkit-scrollbar-thumb {
        background: #ced4da;
        border-radius: 4px;
    }
    .servicios-carousel::-webkit-scrollbar-track {
        background: #f8f9fa;
        border-radius: 4px;
    }
    .wrap {
        display: flex;
        flex-direction: column;
        flex: 0 0 400px;
        width: 400px;
        height: 350px;
        margin: 2rem 0;
        border: 8px solid;
        border-image: linear-gradient(-50deg, green, #00b300, forestgreen, green, lightgreen, #00e600, green) 1;
        transition: 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
        background: linear-gradient(to right, #008000, #00e600, #b3ffb3, #00e600, #008000);
    }
    .wrap:hover .overlay {
        transform: translateX(-60%);
    }
    .wrap:hover .image-content {
        width: 30%;
    }
    .wrap:hover .overlay-content {
        border: none;
        transition-delay: 0.2s;
        transform: translateX(60%);
    }
    .wrap:hover .dots {
        transform: translateX(1rem);
    }
    .wrap:hover .dots .dot {
        background: white;
    }
    .overlay {
        position: relative;
        display: flex;
        width: 100%;
        height: 100%;
        padding: 1rem 0.75rem;
        background: #186218;
        transition: 0.4s ease-in-out;
        z-index: 1;
    }
    .overlay-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 120px;
        height: 100%;
        padding: 0.5rem 0 0 0.5rem;
        border: 3px solid;
        border-image: linear-gradient(to bottom, #aea724 5%, forestgreen 35% 65%, #aea724 95%) 0 0 0 100%;
        transition: 0.3s ease-in-out 0.2s;
        z-index: 1;
    }
    .image-content {
        position: absolute;
        top: 0;
        right: 0;
        width: 60%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: 0.3s ease-in-out;
    }
    .dots {
        position: absolute;
        bottom: 1rem;
        right: 2rem;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        width: 70px;
        height: 4vmin;
        transition: 0.3s ease-in-out 0.3s;
    }
    .dot {
        width: 1rem;
        height: 1rem;
        background: yellow;
        border: 1px solid indigo;
        border-radius: 50%;
        transition: 0.3s ease-in-out 0.3s;
    }
    .text {
        display: grid;
        position: absolute;
        top: 0;
        right: 0;
        width: 60%;
        height: 100%;
        padding: 3vmin 4vmin;
        background: #fff;
        box-shadow: inset 1px 1px 15px 0 rgba(0 0 0 / 0.4);
        overflow-y: auto;
    }
    .servicio-img {
        max-width: 50%;
        margin: 0.25em 1em 1em 0;
        border-radius: 0.25em;
        float: left;
    }
    .servicio-titulo {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #212529;
    }
    .servicio-desc {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 1.2rem;
        min-height: 48px;
    }
    .servicio-btn {
        font-size: 0.95rem;
        padding: 0.5rem 1.2rem;
        border-radius: 2rem;
        background: var(--bs-secondary, #186218);
        color: #fff;
        border: none;
        transition: background 0.2s;
        text-decoration: none;
        display: inline-block;
        margin-top: 1rem;
    }
    .servicio-btn:hover {
        background: var(--bs-secondary-dark, #343a40);
        color: #fff;
    }
    @media (max-width: 900px) {
        .wrap {
            flex: 0 0 70vw;
            width: 70vw;
            height: 320px;
        }
        .servicios-carousel {
            gap: 1rem;
        }
    }
    @media (max-width: 600px) {
        .wrap {
            flex: 0 0 90vw;
            width: 90vw;
            height: 260px;
        }
        .servicios-carousel {
            gap: 0.5rem;
        }
    }
    .container-servicios {
        width: 100vw;
        max-width: 100vw;
        margin-left: calc(-1 * ((100vw - 100%) / 2));
        padding: 0;
    }
    /* Animaciones */
    .animate {
        animation-duration: 0.7s;
        animation-timing-function: cubic-bezier(0.26, 0.53, 0.74, 1.48);
        animation-fill-mode: backwards;
    }
    .pop {
        animation-name: pop;
    }
    @keyframes pop {
        0% {
            opacity: 0;
            transform: scale(0.5, 0.5);
        }
        100% {
            opacity: 1;
            transform: scale(1, 1);
        }
    }
    .slide {
        animation-name: slide;
    }
    @keyframes slide {
        0% {
            opacity: 0;
            transform: translate(4em, 0);
        }
        100% {
            opacity: 1;
            transform: translate(0, 0);
        }
    }
    .slide-left {
        animation-name: slide-left;
    }
    @keyframes slide-left {
        0% {
            opacity: 0;
            transform: translate(-40px, 0);
        }
        100% {
            opacity: 1;
            transform: translate(0, 0);
        }
    }
    .slide-up {
        animation-name: slide-up;
    }
    @keyframes slide-up {
        0% {
            opacity: 0;
            transform: translateY(3em);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }
    .delay-3 { animation-delay: 0.9s; }
    .delay-4 { animation-delay: 1.2s; }
    .delay-5 { animation-delay: 1.5s; }
    .delay-6 { animation-delay: 1.8s; }
    .delay-7 { animation-delay: 2.1s; }
    .delay-8 { animation-delay: 2.4s; }
</style>
<div class="container-servicios py-5 px-0 container-fluid">
    <h2 class="text-center mb-4 fw-bold" style="letter-spacing:1px;">Nuestros Servicios</h2>
    <div class="servicios-carousel d-flex flex-nowrap" id="servicios-carousel">
        <?php foreach ($servicios as $i => $servicio): ?>
            <div class="wrap animate pop card shadow-sm">
                <div class="overlay">
                    <div class="overlay-content animate slide-left delay-2">
                        <h3 class="animate slide-left pop delay-4 text-white" style="font-size:1.2rem; margin-bottom:1rem;"> <?= esc($servicio['titulo']) ?> </h3>
                        <p class="animate slide-left pop delay-5 text-white mb-4" style="font-size:0.95rem;"> <?= esc($servicio['categoria'] ?? 'Servicio') ?> </p>
                    </div>
                    <div class="image-content animate slide delay-5" style="background-image: url('<?= !empty($servicio['imagen']) ? esc($servicio['imagen']) : 'https://assets.codepen.io/4787486/trees.png' ?>');"></div>
                    <div class="dots animate">
                        <div class="dot animate slide-up delay-6"></div>
                        <div class="dot animate slide-up delay-7"></div>
                        <div class="dot animate slide-up delay-8"></div>
                    </div>
                </div>
                <div class="text d-flex flex-column justify-content-end">
                    <p class="mb-2">
                        <?php if (!empty($servicio['imagen'])): ?>
                            <img class="servicio-img img-fluid rounded" src="<?= esc($servicio['imagen']) ?>" alt="<?= esc($servicio['titulo']) ?>" />
                        <?php endif; ?>
                        <span class="servicio-desc"> <?= esc($servicio['descripcion_corta']) ?> </span>
                    </p>
                    <div class="d-flex justify-content-center align-items-end" style="height:60px;">
                        <a class="servicio-btn btn btn-success w-auto" href="<?= base_url('servicios/' . $servicio['slug']) ?>">
                            Ver detalles &raquo;
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    const carousel = document.getElementById('servicios-carousel');
    carousel.addEventListener('wheel', function(e) {
        const atStart = carousel.scrollLeft === 0;
        const atEnd = Math.ceil(carousel.scrollLeft + carousel.offsetWidth) >= carousel.scrollWidth;
        if ((e.deltaY < 0 && atStart) || (e.deltaY > 0 && atEnd)) {
            return;
        }
        if (e.deltaY !== 0) {
            e.preventDefault();
            carousel.scrollLeft += e.deltaY;
        }
    });
</script>