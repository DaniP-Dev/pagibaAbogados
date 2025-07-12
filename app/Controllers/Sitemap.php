<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class Sitemap extends Controller
{
    public function index()
    {
        $urls = [
            [
                'loc' => base_url(),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
            [
                'loc' => base_url('quienes-somos'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => base_url('servicios'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => base_url('contacto'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
            [
                'loc' => base_url('blog'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ],
        ];

        $xml = view('sitemap', ['urls' => $urls]);
        return $this->response
            ->setStatusCode(ResponseInterface::HTTP_OK)
            ->setHeader('Content-Type', 'application/xml')
            ->setBody($xml);
    }
}
