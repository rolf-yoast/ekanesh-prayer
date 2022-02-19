<?php
namespace Ekanesh_prayer\CPT;

use Ekanesh_prayer\Metaboxes\Prayers\Prayer_Metaboxes;

class Prayers {

	public function __construct() {
		add_action( 'init', [ $this, 'create_prayer_cpt' ], 0 );
		new Prayer_Metaboxes();
	}

	public function create_prayer_cpt() {
		$menu_icon = file_get_contents( plugin_dir_path( __FILE__ ) . '../../assets/mair.svg' );

		$args = [
			'labels'        => [
				'name'          => __( 'Prayers', 'ekanesh_prayer' ),
				'singular_name' => __( 'Prayer', 'ekanesh_prayer' ),
			],
			'public'        => false,
			'show_ui'       => true,
			'show_in_menu'  => true,
			'show_in_rest'  => true,
			'supports'      => [ 'title', 'editor' ],
			'menu_icon'     => 'data:image/svg+xml;base64,' . base64_encode( $menu_icon ),
			'menu_position' => 51,
		];

		register_post_type( 'ekanesh_prayer', $args );
	}
}
