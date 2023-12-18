<?php

require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';


function ciunsa_setup() {
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ciunsa_setup');
function ciunsa_menus() {
    register_nav_menus(array(
        'menu-principal' => __("Menu Principal", 'ciunsa')
    ));

}
add_action('init', 'ciunsa_menus');

function ciunsa_scripts_styles () {
    // archivo css
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/latest/normalize.css', array(),'8.0.1');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '11.0.5');
    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'), '1.0.0' );

    // archivos js 
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '11.0.5', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js'), '1.0.0', true);

}
add_action ('wp_enqueue_scripts', 'ciunsa_scripts_styles');

function ciunsa_widgets() {
    register_sidebar (array (
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class=" text-center text-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar (array (
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class=" text-center text-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => 'Barra Enlaces Recomendados',
        'id'            => 'mi_area_de_widgets',
        'description'   => 'Esta es una descripción opcional de la nueva área de widgets.',
        'before_widget' => '<div class="widget-personalizado">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-titulo">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => "Categorias",
        'id'            => 'barraBusqueda',
        'description'   => 'Agrega una barra para filtrar los post por categorias',
        'before_widget' => '<div class="barra">',
        'after_widget'  =>'</div>',
        'before_title'  => '<h4 class="text-primario">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array (
        'name'          => "Redes Sociales",
        'id'            => 'redes_sociales',
        'description'   => 'Agrega una widget de Redes Sociales',
        'before_widget' => '<div class="redesSociales">',
        'after_widget'  =>'</div>',   
    ));
}
add_action('widgets_init', 'ciunsa_widgets');


// mejorar el linkbox
// shortcode pdf
function linkbox_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'href' => '',
            'icono' => 'pdf',
        ),
        $atts,
        'linkbox'
    );

    // Ruta del ícono
    $icon_url = get_template_directory_uri() . '/img/icono-pdf.svg';

    // Construir el HTML del enlace con los atributos proporcionados
    $output = '<a href="' . esc_url($atts['href']) . '" class="box-link">';
    $output .= '<img src="' . esc_url($icon_url) . '" alt="Icono PDF" class="w-[40px] h-[40px]">';
    $output .= '<span>' . esc_html($content) . '</span>';
    $output .= '</a>';

    return $output;
}

add_shortcode('linkbox', 'linkbox_shortcode');

// shortcode-word
function linkbox_word_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'href' => '',
            'icono' => 'word',
        ),
        $atts,
        'linkbox_word'
    );

    // Ruta del ícono
    $icon_url = get_template_directory_uri() . '/img/icon-word.svg';

    // Construir el HTML del enlace con los atributos proporcionados
    $output = '<a href="' . esc_url($atts['href']) . '" class="box-link">';
    $output .= '<img src="' . esc_url($icon_url) . '" alt="Icono Word" class="w-[40px] h-[40px]">';
    $output .= '<span>' . esc_html($content) . '</span>';
    $output .= '</a>';  

    return $output;
}

add_shortcode('linkbox_word', 'linkbox_word_shortcode');
