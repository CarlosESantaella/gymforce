<?php 
/*
 Plugin Name: Gym Force - Post Types
 Plugin URI:
 Description: Añade post types al sitio gym force
 Version: 1.0.0
 Author: Carlos Santaella
 Author URI:
 Text Domain: gymforce


*/
if(!defined('ABSPATH')) die();
// Registrar Custom Post Type
function gymforce_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'gymforce' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymforce' ),
		'menu_name'             => __( 'Clases', 'gymforce' ),
		'name_admin_bar'        => __( 'Clase', 'gymforce' ),
		'archives'              => __( 'Archivo', 'gymforce' ),
		'attributes'            => __( 'Atributos', 'gymforce' ),
		'parent_item_colon'     => __( 'Clase Padre', 'gymforce' ),
		'all_items'             => __( 'Todas Las Clases', 'gymforce' ),
		'add_new_item'          => __( 'Agregar Clase', 'gymforce' ),
		'add_new'               => __( 'Agregar Clase', 'gymforce' ),
		'new_item'              => __( 'Nueva Clase', 'gymforce' ),
		'edit_item'             => __( 'Editar Clase', 'gymforce' ),
		'update_item'           => __( 'Actualizar Clase', 'gymforce' ),
		'view_item'             => __( 'Ver Clase', 'gymforce' ),
		'view_items'            => __( 'Ver Clases', 'gymforce' ),
		'search_items'          => __( 'Buscar Clase', 'gymforce' ),
		'not_found'             => __( 'No Encontrado', 'gymforce' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymforce' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymforce' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymforce' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymforce' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymforce' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'gymforce' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'gymforce' ),
		'items_list'            => __( 'Lista de Clases', 'gymforce' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'gymforce' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'gymforce' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'gymforce' ),
		'description'           => __( 'Clases para el Sitio Web', 'gymforce' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false, // true = posts, false = páginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymforce_clases', $args );

}
add_action( 'init', 'gymforce_clases_post_type', 0 );


// Register Custom Post Type
function gymforce_instructores() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'gymforce' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymforce' ),
		'menu_name'             => __( 'Instructores', 'gymforce' ),
		'name_admin_bar'        => __( 'Instructor', 'gymforce' ),
		'archives'              => __( 'Archivo', 'gymforce' ),
		'attributes'            => __( 'Atributos', 'gymforce' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'gymforce' ),
		'all_items'             => __( 'Todas Las Instructores', 'gymforce' ),
		'add_new_item'          => __( 'Agregar Instructor', 'gymforce' ),
		'add_new'               => __( 'Agregar Instructor', 'gymforce' ),
		'new_item'              => __( 'Nueva Instructor', 'gymforce' ),
		'edit_item'             => __( 'Editar Instructor', 'gymforce' ),
		'update_item'           => __( 'Actualizar Instructor', 'gymforce' ),
		'view_item'             => __( 'Ver Instructor', 'gymforce' ),
		'view_items'            => __( 'Ver Instructores', 'gymforce' ),
		'search_items'          => __( 'Buscar Instructor', 'gymforce' ),
		'not_found'             => __( 'No Encontrado', 'gymforce' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymforce' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymforce' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymforce' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymforce' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymforce' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'gymforce' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'gymforce' ),
		'items_list'            => __( 'Lista de Instructores', 'gymforce' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'gymforce' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'gymforce' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'gymforce' ),
		'description'           => __( 'Instructores para el Sitio Web', 'gymforce' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'gymforce_instructores', 0 );

function gymforce_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymforce' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymforce' ),
		'menu_name'             => __( 'Testimoniales', 'gymforce' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymforce' ),
		'archives'              => __( 'Archivo', 'gymforce' ),
		'attributes'            => __( 'Atributos', 'gymforce' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'gymforce' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'gymforce' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'gymforce' ),
		'add_new'               => __( 'Agregar Testimonial', 'gymforce' ),
		'new_item'              => __( 'Nueva Testimonial', 'gymforce' ),
		'edit_item'             => __( 'Editar Testimonial', 'gymforce' ),
		'update_item'           => __( 'Actualizar Testimonial', 'gymforce' ),
		'view_item'             => __( 'Ver Testimonial', 'gymforce' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymforce' ),
		'search_items'          => __( 'Buscar Testimonial', 'gymforce' ),
		'not_found'             => __( 'No Encontrado', 'gymforce' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymforce' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymforce' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymforce' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymforce' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymforce' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'gymforce' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'gymforce' ),
		'items_list'            => __( 'Lista de Testimoniales', 'gymforce' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'gymforce' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'gymforce' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'gymforce' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'gymforce' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'gymforce_testimoniales', 0 );