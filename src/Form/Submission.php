<?php
namespace Ekanesh_prayer\Form;

use Ekanesh_prayer\Prayer\Select_Prayer;

class Submission {

	public function submit_form( $post ) {
		$mariaan = 0;
		if ( isset( $post['ekanesh_mariaan_checkbox'] ) ) {
			$mariaan = 1;
		}

		$sin_value = 0;

		foreach ( $post['ekanesh_sins'] as $sin_id ) {
			$sin_value = ( $sin_value + intval( get_post_meta( $sin_id, 'sins_value' )['0'] ) );
		}

		$prayer    = new Select_Prayer();
		$prayer_id = $prayer->select_prayer( $sin_value );

		$ekanesh_sins = implode( ',', $post['ekanesh_sins'] );

		$args = [
			'post_title' => $post['title'],
			'post_type'  => 'ekanesh_confession',
			'meta_input' => [
				'ekanesh_mariaan_checkbox' => $mariaan,
				'ekanesh_gender'           => $post['ekanesh_gender'],
				'ekanesh_sins'             => $ekanesh_sins,
				'ekanesh_sin_value'        => $sin_value,
				'ekanesh_prayer_id'        => $prayer_id,
			],
		];

		wp_insert_post( $args );

		return $prayer_id;
	}
}
