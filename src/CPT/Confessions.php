<?php
namespace Ekanesh_prayer\CPT;

use Ekanesh_prayer\Metaboxes\Confessions\Confessions_Metaboxes;

class Confessions {

	public function __construct() {
		add_action( 'init', [ $this, 'create_confessions_cpt' ], 0 );
		new Confessions_Metaboxes();
	}

	public function create_confessions_cpt() {
		$menu_icon = file_get_contents( plugin_dir_path( __FILE__ ) . '../../assets/pray.svg' );

		$args = [
			'labels'        => [
				'name'          => __( 'Confessions', 'ekanesh_prayer' ),
				'singular_name' => __( 'Confession', 'ekanesh_prayer' ),
			],
			'supports'      => [ 'title' ],
			'public'        => false,
			'show_ui'       => true,
			'show_in_menu'  => true,
			'menu_icon'     => 'data:image/svg+xml;base64,' . base64_encode( $menu_icon ),
			'menu_position' => 50,
		];

		register_post_type( 'ekanesh_confession', $args );
	}
}
