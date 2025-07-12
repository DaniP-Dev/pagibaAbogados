<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Servicios extends Controller
{
    public function getServiciosArray() // Cambiado a public
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
            [
                'slug' => 'administrativo',
                'titulo' => 'Derecho Administrativo',
                'descripcion_corta' => 'Asesoría y defensa en procedimientos administrativos, licitaciones y recursos ante entidades públicas.',
                'descripcion' => 'Asesoría y defensa en procedimientos administrativos, licitaciones, recursos ante entidades públicas y procesos sancionatorios. Representación ante autoridades administrativas y defensa de derechos frente al Estado.',
                'meta_title' => 'Derecho Administrativo | Abogado Guerreros',
                'meta_description' => 'Asesoría y defensa en derecho administrativo, licitaciones y recursos.',
                'meta_keywords' => 'administrativo, derecho, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 200000,
                'rating' => 4.6,
                'reviews' => 18,
                'caracteristicas' => [
                    'Defensa en procesos administrativos',
                    'Asesoría en licitaciones',
                    'Recursos ante entidades públicas',
                    'Representación ante autoridades',
                ]
            ],
            [
                'slug' => 'comercial',
                'titulo' => 'Derecho Comercial',
                'descripcion_corta' => 'Constitución de empresas, sociedades, contratos mercantiles y litigios comerciales.',
                'descripcion' => 'Constitución de empresas, sociedades, contratos mercantiles, litigios comerciales y asesoría en derecho empresarial. Acompañamiento en la creación y gestión de negocios.',
                'meta_title' => 'Derecho Comercial | Abogado Guerreros',
                'meta_description' => 'Asesoría en derecho comercial, sociedades y contratos mercantiles.',
                'meta_keywords' => 'comercial, derecho, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 220000,
                'rating' => 4.7,
                'reviews' => 20,
                'caracteristicas' => [
                    'Constitución de empresas y sociedades',
                    'Contratos mercantiles',
                    'Litigios comerciales',
                    'Asesoría empresarial',
                ]
            ],
            [
                'slug' => 'familia',
                'titulo' => 'Derecho de Familia',
                'descripcion_corta' => 'Divorcios, custodias, alimentos, adopciones y procesos de familia.',
                'descripcion' => 'Divorcios, custodias, alimentos, adopciones, procesos de familia y asesoría en conflictos familiares. Acompañamiento en procesos judiciales y extrajudiciales.',
                'meta_title' => 'Derecho de Familia | Abogado Guerreros',
                'meta_description' => 'Asesoría en derecho de familia: divorcios, custodias y más.',
                'meta_keywords' => 'familia, derecho, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 170000,
                'rating' => 4.6,
                'reviews' => 15,
                'caracteristicas' => [
                    'Divorcios y custodias',
                    'Procesos de alimentos',
                    'Adopciones',
                    'Conflictos familiares',
                ]
            ],
            [
                'slug' => 'laboral',
                'titulo' => 'Derecho Laboral',
                'descripcion_corta' => 'Despidos, indemnizaciones, contratos laborales y asesoría a empleadores y empleados.',
                'descripcion' => 'Despidos, indemnizaciones, contratos laborales, asesoría a empleadores y empleados, y representación en procesos laborales. Soluciones para conflictos de trabajo.',
                'meta_title' => 'Derecho Laboral | Abogado Guerreros',
                'meta_description' => 'Asesoría en derecho laboral para empresas y trabajadores.',
                'meta_keywords' => 'laboral, derecho, abogados',
                'imagen' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
                'imagenes' => [
                    'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
                ],
                'precio' => 160000,
                'rating' => 4.5,
                'reviews' => 12,
                'caracteristicas' => [
                    'Despidos e indemnizaciones',
                    'Contratos laborales',
                    'Asesoría a empleadores y empleados',
                    'Procesos laborales',
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
