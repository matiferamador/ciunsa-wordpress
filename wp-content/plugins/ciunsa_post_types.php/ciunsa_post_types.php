<?php
/*
    Plugin Name: CIUNSa - Post Type
    Plugin URI: https://www.instagram.com/matiferamador/
    Description: Añade Post Types al sitio CIUNSa
    Version: 1.0.0
    Author: Matias Fernando Amador 
    Author URI: https://www.instagram.com/matiferamador/
    Text Domain: ciunsa
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function ciunsa_revista_post_type() {

	$labels = array(
		'name'                  => _x('Revistas', 'Post Type General Name', 'ciunsa_revista'),
		'singular_name'         => _x('Revista', 'Post Type Singular Name', 'ciunsa_revista'),
		'menu_name'             => __('Revista CIUNSa', 'ciunsa_revista'),
		'name_admin_bar'        => __('Revista', 'ciunsa_revista'),
		'archives'              => __('Archivos de Revistas', 'ciunsa_revista'),
		'attributes'            => __('Atributos de Revista', 'ciunsa_revista'),
		'parent_item_colon'     => __('Revista Padre', 'ciunsa_revista'),
		'all_items'             => __('Todas las Revistas', 'ciunsa_revista'),
		'add_new_item'          => __('Agregar Revista', 'ciunsa_revista'),
		'add_new'               => __('Agregar Revista', 'ciunsa_revista'),
		'new_item'              => __('Nueva Revista', 'ciunsa_revista'),
		'edit_item'             => __('Editar Revista', 'ciunsa_revista'),
		'update_item'           => __('Actualizar Revista', 'ciunsa_revista'),
		'view_item'             => __('Ver Revista', 'ciunsa_revista'),
		'view_items'            => __('Ver Revistas', 'ciunsa_revista'),
		'search_items'          => __('Buscar Revista', 'ciunsa_revista'),
		'not_found'             => __('No Encontrada', 'ciunsa_revista'),
		'not_found_in_trash'    => __('No Encontrada en Papelera', 'ciunsa_revista'),
		'featured_image'        => __('Imagen Destacada de Revista', 'ciunsa_revista'),
		'set_featured_image'    => __('Guardar Imagen destacada de Revista', 'ciunsa_revista'),
		'remove_featured_image' => __('Eliminar Imagen destacada de Revista', 'ciunsa_revista'),
		'use_featured_image'    => __('Utilizar como Imagen Destacada de Revista', 'ciunsa_revista'),
		'insert_into_item'      => __('Insertar en Revista', 'ciunsa_revista'),
		'uploaded_to_this_item' => __('Agregado en Revista', 'ciunsa_revista'),
		'items_list'            => __('Lista de Revistas', 'ciunsa_revista'),
		'items_list_navigation' => __('Navegación de Revistas', 'ciunsa_revista'),
		'filter_items_list'     => __('Filtrar Revistas', 'ciunsa_revista'),
	);

	$args = array(
		'label'                 => __('Revista', 'ciunsa_revista'),
		'description'           => __('Revistas para la Revista CIUNSa', 'ciunsa_revista'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => true, 
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-book', 
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type('ciunsa_revista', $args);

}

add_action('init', 'ciunsa_revista_post_type', 0);

function ciunsa_novedades_destacadas_post_type() {
	$labels = array(
		'name'                  => _x( 'Novedades Destacadas', 'Post Type General Name', 'ciunsa' ),
		'singular_name'         => _x( 'Novedad Destacada', 'Post Type Singular Name', 'ciunsa' ),
		'menu_name'             => __( 'Sliders', 'ciunsa' ),
		'name_admin_bar'        => __( 'Novedad Destacada', 'ciunsa' ),
		'archives'              => __( 'Archivo', 'ciunsa' ),
		'attributes'            => __( 'Atributos', 'ciunsa' ),
		'parent_item_colon'     => __( 'Novedad Destacada Padre', 'ciunsa' ),
		'all_items'             => __( 'Todas Las Novedades Destacadas', 'ciunsa' ),
		'add_new_item'          => __( 'Agregar Novedad Destacada', 'ciunsa' ),
		'add_new'               => __( 'Agregar Novedad Destacada', 'ciunsa' ),
		'new_item'              => __( 'Nueva Novedad Destacada', 'ciunsa' ),
		'edit_item'             => __( 'Editar Novedad Destacada', 'ciunsa' ),
		'update_item'           => __( 'Actualizar Novedad Destacada', 'ciunsa' ),
		'view_item'             => __( 'Ver Novedad Destacada', 'ciunsa' ),
		'view_items'            => __( 'Ver Novedades Destacadas', 'ciunsa' ),
		'search_items'          => __( 'Buscar Novedad Destacada', 'ciunsa' ),
		'not_found'             => __( 'No Encontrada', 'ciunsa' ),
		'not_found_in_trash'    => __( 'No Encontrada en Papelera', 'ciunsa' ),
		'featured_image'        => __( 'Imagen Destacada', 'ciunsa' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'ciunsa' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'ciunsa' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'ciunsa' ),
		'insert_into_item'      => __( 'Insertar en Novedad Destacada', 'ciunsa' ),
		'uploaded_to_this_item' => __( 'Agregado en Novedad Destacada', 'ciunsa' ),
		'items_list'            => __( 'Lista de Novedades Destacadas', 'ciunsa' ),
		'items_list_navigation' => __( 'Navegación de Novedades Destacadas', 'ciunsa' ),
		'filter_items_list'     => __( 'Filtrar Novedades Destacadas', 'ciunsa' ),
	);
	$args = array(
		'label'                 => __( 'Novedades Destacadas', 'ciunsa' ),
		'description'           => __( 'Novedades Destacadas para el Sitio Web', 'ciunsa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'            => array('category'),
	);
	register_post_type('novedades_destacadas', $args );
}
add_action( 'init', 'ciunsa_novedades_destacadas_post_type', 0 );
