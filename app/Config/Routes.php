<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes-somos', 'Home::quienes_somos');
$routes->get('sitemap.xml', 'Sitemap::index');
$routes->get('servicios/(:segment)', 'Servicios::detalle/$1');
$routes->get('blog/(:segment)', 'Blog::detalle/$1');
$routes->get('contacto', 'Home::contacto');
$routes->get('servicios', 'Servicios::index');
$routes->get('blog', 'Blog::index');
