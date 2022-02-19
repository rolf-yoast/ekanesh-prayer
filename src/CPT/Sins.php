<?php
namespace Ekanesh_prayer\cpt;

use Ekanesh_prayer\Taxonomy\Sins_Category;
use Ekanesh_prayer\Metaboxes\Sins\Sins_Metaboxes;

class Sins {

	public function __construct() {
		add_action( 'init', [ $this, 'create_sins_cpt' ], 0 );
		new Sins_Metaboxes();
		new Sins_Category();
	}

	public function create_sins_cpt() {
		$menu_icon = file_get_contents( plugin_dir_path( __FILE__ ) . '../../assets/evil.svg' );

		$args = [
			'labels'        => [
				'name'          => __( 'Sins', 'ekanesh_prayer' ),
				'singular_name' => __( 'Sin', 'ekanesh_prayer' ),
			],
			'supports'      => [ 'title' ],
			'public'        => false,
			'show_ui'       => true,
			'show_in_menu'  => true,
			'menu_icon'     => 'data:image/svg+xml;base64,' . base64_encode( $menu_icon ),
			'menu_position' => 52,
		];

		register_post_type( 'ekanesh_sins', $args );
	}
}
