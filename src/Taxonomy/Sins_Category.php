<?php
namespace Ekanesh_prayer\Taxonomy;

class Sins_Category {

	public function __construct() {
		add_action( 'init', [ $this, 'sins_category' ], 0 );
	}

	public function sins_category() {
		$args = [
			'label'             => __( 'Sin categories', 'ekanesh_prayer' ),
			'public'            => true,
			'rewrite'           => false,
			'hierarchical'      => true,
			'show_admin_column' => true,
		];

		register_taxonomy( 'sin_categories', 'ekanesh_sins', $args );
	}
}
