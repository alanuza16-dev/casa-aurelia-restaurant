<?php

global $site;

$site = [
    'brand' => 'Casa Aurelia',
    'hero_title' => 'Casa Aurelia',
    'hero_subtitle' => 'Alta cocina, servicio impecable y una atmosfera pensada para celebrar con elegancia.',
    'about_title' => 'Una casa para el gusto refinado',
    'about_text' => 'Casa Aurelia es un restaurante de alta categoria inspirado en la hospitalidad clasica y la cocina contemporanea. Cada plato, cada mesa y cada detalle del servicio esta diseñado para transmitir sofisticacion, calma y deseo de volver.',
    'project_featured_title' => 'Shoreline',
    'project_featured_text' => 'Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!',
    'project_one_title' => 'Menu Degustacion',
    'project_one_text' => 'Un recorrido por ingredientes de temporada, tecnicas precisas y presentaciones cuidadas para una velada memorable.',
    'project_two_title' => 'Salon Privado',
    'project_two_text' => 'Un espacio reservado para cenas ejecutivas, celebraciones especiales y reuniones con servicio personalizado.',
    'project_three_title' => 'Maridaje de Autor',
    'project_three_text' => 'Selecciones de vino y cocteleria pensadas para elevar cada tiempo y realzar el caracter de la cocina.',
    'signup_title' => 'Subscribe to receive updates!',
    'address' => 'Escazu, San Jose, Costa Rica',
    'email' => 'reservas@casaaurelia.com',
    'phone1' => '(+506) 7100-4400',
    'phone2' => '(+506) 7100-5500'
];

if (file_exists(get_template_directory() . '/config/config.php')) {
    require_once get_template_directory() . '/config/config.php';
}

if (file_exists(get_template_directory() . '/functions/functions.php')) {
    require_once get_template_directory() . '/functions/functions.php';
}

function lanzah_enqueue_assets() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('lanzah-styles', get_template_directory_uri() . '/assets/css/styles.css', array('bootstrap-css'), '1.0');
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v6.3.0/js/all.js', array(), '6.3.0', false);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('lanzah-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('bootstrap-bundle'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lanzah_enqueue_assets');
