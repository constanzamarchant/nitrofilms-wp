<?php 
// Register Custom Post Type
function portafolio_post_type() {

	$labels = array(
		'name'                  => _x( 'trabajos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'trabajo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Trabajos', 'text_domain' ),
		'name_admin_bar'        => __( 'Trabajo', 'text_domain' ),
		'archives'              => __( 'Trabajos del portafolio', 'text_domain' ),
		'attributes'            => __( 'Atributos del portafolio', 'text_domain' ),
		'parent_item_colon'     => __( 'Trabajo principal', 'text_domain' ),
		'all_items'             => __( 'Todos los trabajos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo trabajo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo trabajo', 'text_domain' ),
		'edit_item'             => __( 'Editar trabajo', 'text_domain' ),
		'update_item'           => __( 'Subir trabajo', 'text_domain' ),
		'view_item'             => __( 'Ver trabajo', 'text_domain' ),
		'view_items'            => __( 'Ver trabajos', 'text_domain' ),
		'search_items'          => __( 'Buscar trabajos', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el trabajo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este trabajo', 'text_domain' ),
		'items_list'            => __( 'Lista de trabajos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de trabajos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de trabajos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'trabajo', 'text_domain' ),
		'description'           => __( 'Post dedicado a las imágenes del portafolio de Nitrofilms', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio_post_type', 0 );
?>