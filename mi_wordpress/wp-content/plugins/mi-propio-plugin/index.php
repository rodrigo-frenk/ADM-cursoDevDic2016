<?php

/*
Plugin Name: Mi propio Plugin
*/



add_action( 'init', 'registrar_cpts' );

add_action( 'init', 'registrar_taxonomias' );

function registrar_taxonomias() {

	register_taxonomy(
		'color',
		'herramienta',
		array(
			'label' => __( 'Colores' ),
			'rewrite' => array( 'slug' => 'color' ),
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'tamanno',
		'herramienta',
		array(
			'label' => __( 'Tamaños' ),
			'rewrite' => array( 'slug' => 'tamanno' ),
			'hierarchical' => true,
		)
	);


}


function registrar_cpts() {
	$labels = array(
		'name'               => _x( 'Herramientas', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Herramienta', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Herramientas', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Herramienta', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'herramienta', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Herramienta', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Herramienta', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Herramienta', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Herramienta', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Herramientas', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Herramientas', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Herramientas:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No herramientas found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No herramientas found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'herramienta' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'			=> array( 'color', 'tamanno' ),
	);

	register_post_type( 'herramienta', $args );

}

?>
