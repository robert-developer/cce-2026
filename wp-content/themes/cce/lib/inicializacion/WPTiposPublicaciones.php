<?php 
if ( ! function_exists('wpn_productos') ) {

// Register Custom Post Type
function wpn_productos() {

	$labels = array(
		'name'                  => _x( 'htmlcontacto', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'htmlcontacto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'htmlcontacto', 'text_domain' ),
		'name_admin_bar'        => __( 'htmlcontacto', 'text_domain' ),
		'archives'              => __( 'Archivo de htmlcontacto', 'text_domain' ),
		'attributes'            => __( 'Atributos de htmlcontacto', 'text_domain' ),
		'parent_item_colon'     => __( 'htmlcontacto padre', 'text_domain' ),
		'all_items'             => __( 'Todos los htmlcontacto', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo htmlcontacto', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo htmlcontacto', 'text_domain' ),
		'edit_item'             => __( 'Editar htmlcontacto', 'text_domain' ),
		'update_item'           => __( 'Actualizar htmlcontacto', 'text_domain' ),
		'view_item'             => __( 'Ver htmlcontacto', 'text_domain' ),
		'view_items'            => __( 'ver htmlcontacto', 'text_domain' ),
		'search_items'          => __( 'Buscar htmlcontacto', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el htmlcontacto', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este htmlcontacto', 'text_domain' ),
		'items_list'            => __( 'Listado de proyectos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de proyectos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de proyectos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'htmlcontacto', 'text_domain' ),
		'description'           => __( 'Entradas de htmlcontacto', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'htmlcontacto', $args );

	
}
add_action( 'init', 'wpn_productos', 0 );

}

?>