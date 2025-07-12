<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller
{
    public function detalle($slug = null)
    {
        // Simulación de datos, normalmente vendrían de una base de datos
        $posts = [
            'primer-post' => [
                'titulo' => 'Mi primer post',
                'contenido' => 'Bienvenido a nuestro blog. Este es el primer post.',
                'meta_title' => 'Mi primer post | Blog Abogado Guerreros',
                'meta_description' => 'Descubre nuestro primer post en el blog de Abogado Guerreros.',
                'meta_keywords' => 'blog, abogados, primer post',
            ],
            'leyes-colombianas' => [
                'titulo' => 'Leyes Colombianas que debes conocer',
                'contenido' => 'Conoce las leyes más importantes que afectan a los ciudadanos y empresas en Colombia.',
                'meta_title' => 'Leyes Colombianas que debes conocer | Blog Abogado Guerreros',
                'meta_description' => 'Información clave sobre leyes colombianas para ciudadanos y empresas.',
                'meta_keywords' => 'leyes, colombia, derecho, blog',
            ],
        ];
        $data = $posts[$slug] ?? [
            'titulo' => 'Entrada no encontrada',
            'contenido' => 'La entrada solicitada no existe.',
            'meta_title' => 'Entrada no encontrada',
            'meta_description' => 'La entrada solicitada no existe.',
            'meta_keywords' => '',
        ];
        return view('blog/detalle', $data);
    }

    public function index()
    {
        $posts = [
            [
                'slug' => 'primer-post',
                'titulo' => 'Mi primer post',
                'resumen' => 'Bienvenido a nuestro blog. Este es el primer post.',
                'fecha' => '2025-07-01',
                'imagen' => null
            ],
            [
                'slug' => 'leyes-colombianas',
                'titulo' => 'Leyes Colombianas que debes conocer',
                'resumen' => 'Conoce las leyes más importantes que afectan a los ciudadanos y empresas en Colombia.',
                'fecha' => '2025-06-15',
                'imagen' => null
            ],
        ];
        $destacado = [
            'slug' => 'primer-post',
            'titulo' => 'Mi primer post',
            'resumen' => 'Bienvenido a nuestro blog. Este es el primer post.'
        ];
        $meta = [
            'meta_title' => 'Blog Jurídico | Noticias y Consejos Legales en Colombia | Abogado Guerreros',
            'meta_description' => 'Artículos, noticias y consejos legales para ciudadanos y empresas en Colombia. Mantente informado con el blog de Abogado Guerreros.',
            'meta_keywords' => 'blog jurídico, noticias legales, derecho Colombia, consejos legales, abogados'
        ];
        return view('blog/index', array_merge([
            'posts' => $posts,
            'destacado' => $destacado
        ], $meta));
    }
}
