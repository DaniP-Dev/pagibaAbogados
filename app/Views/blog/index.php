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
            <h1 class="display-4 fst-italic">Título de un post destacado largo</h1>
            <p class="lead my-3">Varias líneas de texto que forman la introducción, informando rápidamente a los nuevos lectores sobre lo más interesante del contenido de este post.</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Leer más...</a></p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Actualidad</strong>
                    <h3 class="mb-0">Post destacado</h3>
                    <div class="mb-1 text-body-secondary">12 Nov</div>
                    <p class="card-text mb-auto">Esta es una tarjeta más amplia con texto de apoyo debajo como introducción natural a contenido adicional.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Leer más
                        <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img" height="250" width="200" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Diseño</strong>
                    <h3 class="mb-0">Título del post</h3>
                    <div class="mb-1 text-body-secondary">11 Nov</div>
                    <p class="mb-auto">Esta es una tarjeta más amplia con texto de apoyo debajo como introducción natural a contenido adicional.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Leer más
                        <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img" height="250" width="200" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Desde el Firehose
            </h3>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Ejemplo de post</h2>
                <p class="blog-post-meta">1 Enero, 2021 por <a href="#">Mark</a></p>
                <p>Este post muestra diferentes tipos de contenido soportados y estilizados con Bootstrap. Tipografía básica, listas, tablas, imágenes, código y más.</p>
                <hr>
                <p>Este es contenido adicional de párrafo de ejemplo. Se repite para mostrar cómo afecta el contenido circundante.</p>
                <h2>Citas</h2>
                <p>Ejemplo de cita:</p>
                <blockquote class="blockquote">
                    <p>Texto citado aquí.</p>
                </blockquote>
                <p>Más contenido de ejemplo para mostrar el flujo del texto.</p>
                <h3>Listas de ejemplo</h3>
                <p>Lista desordenada:</p>
                <ul>
                    <li>Primer ítem</li>
                    <li>Segundo ítem con descripción larga</li>
                    <li>Tercer ítem</li>
                </ul>
                <p>Lista ordenada:</p>
                <ol>
                    <li>Primer ítem</li>
                    <li>Segundo ítem con descripción larga</li>
                    <li>Tercer ítem</li>
                </ol>
                <p>Lista de definiciones:</p>
                <dl>
                    <dt>HTML</dt>
                    <dd>Lenguaje para describir el contenido de una página web</dd>
                    <dt>CSS</dt>
                    <dd>Describe la apariencia del contenido web</dd>
                    <dt>JavaScript</dt>
                    <dd>Lenguaje para construir sitios y aplicaciones web avanzadas</dd>
                </dl>
                <h2>Elementos HTML en línea</h2>
                <p>HTML define una larga lista de etiquetas en línea, puedes ver la lista completa en <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">MDN</a>.</p>
                <ul>
                    <li><strong>Texto en negrita</strong> con <code>&lt;strong&gt;</code>.</li>
                    <li><em>Texto en cursiva</em> con <code>&lt;em&gt;</code>.</li>
                    <li>Abreviaturas como <abbr title="HyperText Markup Language">HTML</abbr> usan <code>&lt;abbr&gt;</code>.</li>
                    <li>Citas como <cite>— Mark Otto</cite> usan <code>&lt;cite&gt;</code>.</li>
                    <li><del>Texto eliminado</del> con <code>&lt;del&gt;</code> y <ins>insertado</ins> con <code>&lt;ins&gt;</code>.</li>
                    <li>Superíndice <sup>texto</sup> con <code>&lt;sup&gt;</code> y subíndice <sub>texto</sub> con <code>&lt;sub&gt;</code>.</li>
                </ul>
                <p>La mayoría de estos elementos son estilizados por los navegadores.</p>
                <h2>Encabezado</h2>
                <p>Más contenido de ejemplo para mostrar el flujo del texto.</p>
                <h3>Sub-encabezado</h3>
                <p>Más contenido de ejemplo para mostrar el flujo del texto.</p>
                <pre><code>Bloque de código de ejemplo</code></pre>
                <p>Contenido adicional de ejemplo.</p>
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Otro post</h2>
                <p class="blog-post-meta">23 Diciembre, 2020 por <a href="#">Jacob</a></p>
                <p>Contenido adicional de ejemplo para mostrar el flujo del texto.</p>
                <blockquote>
                    <p>Cita larga aquí, quizá con <strong>texto enfatizado</strong> en medio.</p>
                </blockquote>
                <p>Más contenido de ejemplo para mostrar el flujo del texto.</p>
                <h3>Ejemplo de tabla</h3>
                <p>No olvides las tablas:</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Votos positivos</th>
                            <th>Votos negativos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alice</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Bob</td>
                            <td>4</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Charlie</td>
                            <td>7</td>
                            <td>9</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <td>21</td>
                            <td>23</td>
                        </tr>
                    </tfoot>
                </table>
                <p>Contenido adicional de ejemplo.</p>
            </article>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Nueva funcionalidad</h2>
                <p class="blog-post-meta">14 Diciembre, 2020 por <a href="#">Chris</a></p>
                <p>Contenido adicional de ejemplo para mostrar el flujo del texto.</p>
                <ul>
                    <li>Primer ítem</li>
                    <li>Segundo ítem con descripción larga</li>
                    <li>Tercer ítem</li>
                </ul>
                <p>Contenido adicional de ejemplo.</p>
            </article>
            <nav class="blog-pagination" aria-label="Paginación">
                <a class="btn btn-outline-primary rounded-pill" href="#">Anterior</a>
                <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Siguiente</a>
            </nav>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h4 class="fst-italic">Acerca de</h4>
                    <p class="mb-0">Personaliza esta sección para contarle a tus visitantes sobre tu publicación, autores, contenido o lo que desees.</p>
                </div>
                <div>
                    <h4 class="fst-italic">Posts recientes</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg aria-hidden="true" class="bd-placeholder-img" height="96" width="100%" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Ejemplo de título de post</h6>
                                    <small class="text-body-secondary">15 Enero, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg aria-hidden="true" class="bd-placeholder-img" height="96" width="100%" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Este es otro título de post</h6>
                                    <small class="text-body-secondary">14 Enero, 2024</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                                <svg aria-hidden="true" class="bd-placeholder-img" height="96" width="100%" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg>
                                <div class="col-lg-8">
                                    <h6 class="mb-0">Título largo de post: ¡Este tiene varias líneas!</h6>
                                    <small class="text-body-secondary">13 Enero, 2024</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">Archivos</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Marzo 2021</a></li>
                        <li><a href="#">Febrero 2021</a></li>
                        <li><a href="#">Enero 2021</a></li>
                        <li><a href="#">Diciembre 2020</a></li>
                        <li><a href="#">Noviembre 2020</a></li>
                        <li><a href="#">Octubre 2020</a></li>
                        <li><a href="#">Septiembre 2020</a></li>
                        <li><a href="#">Agosto 2020</a></li>
                        <li><a href="#">Julio 2020</a></li>
                        <li><a href="#">Junio 2020</a></li>
                        <li><a href="#">Mayo 2020</a></li>
                        <li><a href="#">Abril 2020</a></li>
                    </ol>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">En otros sitios</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Social</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
    <p>Blog de Abogado Guerreros &copy; <?= date('Y') ?></p>
    <p class="mb-0"><a href="#">Volver arriba</a></p>
</footer>
<?= $this->endSection() ?>
