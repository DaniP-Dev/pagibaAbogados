<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Servicios extends Controller
{
    private function getServiciosArray()
    {
        return [
            [
                'slug' => 'penal',
                'titulo' => 'Defensa Penal',
                'descripcion_corta' => 'Defensa y asesoría en procesos penales, delitos económicos y más.',
                'descripcion' => 'Ofrecemos asesoría y defensa integral en procesos penales, desde la etapa de indagación hasta la representación en juicio oral. Nuestro equipo de abogados penalistas cuenta con amplia experiencia en delitos económicos, violencia intrafamiliar, delitos informáticos y más. Garantizamos acompañamiento personalizado y estrategias legales efectivas para proteger tus derechos.',
                'meta_title' => 'Defensa Penal | Abogado Guerreros',
                'meta_description' => 'Servicio de defensa penal profesional y personalizada.',
                'meta_keywords' => 'penal, defensa, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 250000,
                'rating' => 4.8,
                'reviews' => 37,
                'caracteristicas' => [
                    'Atención 24/7 en casos urgentes',
                    'Defensa en delitos económicos y comunes',
                    'Acompañamiento en audiencias y diligencias',
                    'Estrategias legales personalizadas',
                ]
            ],
            [
                'slug' => 'civil',
                'titulo' => 'Derecho Civil',
                'descripcion_corta' => 'Soluciones legales en contratos, herencias y propiedad.',
                'descripcion' => 'Brindamos soluciones legales en materia civil: contratos, sucesiones, responsabilidad civil, propiedad y más. Nuestro equipo te asesora en la redacción y revisión de documentos, representación en procesos judiciales y resolución de conflictos civiles.',
                'meta_title' => 'Derecho Civil | Abogado Guerreros',
                'meta_description' => 'Servicio de derecho civil para particulares y empresas.',
                'meta_keywords' => 'civil, derecho, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 180000,
                'rating' => 4.7,
                'reviews' => 22,
                'caracteristicas' => [
                    'Asesoría en contratos y documentos',
                    'Procesos de sucesión y herencias',
                    'Defensa en demandas civiles',
                    'Solución de conflictos de propiedad',
                ]
            ],
        ];
    }

    public function index()
    {
        $servicios = $this->getServiciosArray();
        $meta = [
            'meta_title' => 'Servicios Legales en Colombia | Abogado Guerreros',
            'meta_description' => 'Descubre todos nuestros servicios legales en Colombia. Defensa penal, derecho civil, asesoría jurídica y más. Atención personalizada por abogados expertos.',
            'meta_keywords' => 'servicios legales, abogados Colombia, defensa penal, derecho civil, asesoría jurídica'
        ];
        return view('servicios/index', array_merge(['servicios' => $servicios], $meta));
    }

    public function detalle($slug = null)
    {
        $servicios = $this->getServiciosArray();
        $servicio = null;
        foreach ($servicios as $s) {
            if ($s['slug'] === $slug) {
                $servicio = $s;
                break;
            }
        }
        if (!$servicio) {
            $servicio = [
                'titulo' => 'Servicio no encontrado',
                'descripcion' => 'El servicio solicitado no existe.',
                'meta_title' => 'Servicio no encontrado',
                'meta_description' => 'El servicio solicitado no existe.',
                'meta_keywords' => '',
                'imagen' => null
            ];
        }
        return view('servicios/detalle', $servicio);
    }

    public function json()
    {
        return $this->response->setJSON($this->getServiciosArray());
    }
}
