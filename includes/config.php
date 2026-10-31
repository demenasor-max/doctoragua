<?php
/**
 * DOCTOR AGUA VZLA - CONFIGURACIÓN CENTRALIZADA
 * Lee data/site_data.json y define constantes y variables globales.
 */

$jsonPath = __DIR__ . '/../data/site_data.json';
$siteData = [];

if (file_exists($jsonPath)) {
    $jsonContent = file_get_contents($jsonPath);
    $siteData = json_decode($jsonContent, true) ?: [];
}

$company      = $siteData['company'] ?? [];
$nav          = $siteData['navigation'] ?? [];
$hero         = $siteData['hero'] ?? [];
$benefits     = $siteData['benefits'] ?? [];
$process      = $siteData['purificationSteps'] ?? [];
$products     = $siteData['products'] ?? [];
$campaigns    = $siteData['campaigns'] ?? [];
$testimonials = $siteData['testimonials'] ?? [];
$faqs         = $siteData['faq'] ?? [];

// Helper para definir la página activa en el menú
function isCurrentPage($pageName, $currentPage) {
    return ($pageName === $currentPage) ? 'active' : '';
}
