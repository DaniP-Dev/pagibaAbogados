<?php

namespace App\Controllers;

use App\Controllers\Servicios;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'meta_title' => 'Inicio | Abogado Guerreros',
            'meta_description' => 'Bienvenido a Abogado Guerreros, expertos en defensa y asesoría legal.',
            'meta_keywords' => 'abogados, defensa, asesoría legal, guerreros',
        ];

        // Obtener servicios del controlador Servicios
        $serviciosController = new Servicios();
        $data['servicios'] = $serviciosController->getServiciosArray();

        return view('inicio', $data);
    }

    public function quienes_somos(): string
    {
        $data = [
            'meta_title' => '¿Quiénes Somos? | Abogado Guerreros',
            'meta_description' => 'Conoce al equipo de Abogado Guerreros y nuestra experiencia en el sector jurídico.',
            'meta_keywords' => 'abogados, quienes somos, equipo, experiencia',
        ];
        return view('quienes_somos', $data);
    }

    public function contacto(): string
    {
        $data = [
            'meta_title' => 'Contacto | Abogado Guerreros en Bogotá, Colombia',
            'meta_description' => 'Contáctanos para asesoría legal en Colombia. Abogados expertos en Bogotá.',
            'meta_keywords' => 'abogados, contacto, Bogotá, Colombia, asesoría legal',
        ];
        return view('contacto', $data);
    }
}
