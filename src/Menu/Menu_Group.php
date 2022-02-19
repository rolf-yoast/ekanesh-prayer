<?php
namespace Ekanesh_prayer\Menu;

class Menu_Group {

	public function __construct() {
		add_action( 'admin_init', [ $this, 'add_admin_menu_separator' ] );
		add_action( 'admin_menu', [ $this, 'set_admin_menu_separator' ] );
	}

	public function add_admin_menu_separator( $position ) {
		global $menu;
		$menu[ $position ] = [
			0 => '',
			1 => 'read',
			2 => 'separator' . $position,
			3 => '',
			4 => 'wp-menu-separator',

		];
	}

	public function set_admin_menu_separator() {
		do_action( 'admin_init', 49 );
		do_action( 'admin_init', 53 );
	}
}
