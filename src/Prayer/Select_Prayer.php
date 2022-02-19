<?php
namespace Ekanesh_prayer\Prayer;

class Select_Prayer {

	public function select_prayer( $sin_value ) {
		$args = [
			'post_type'       => 'ekanesh_prayer',
			'posts_per_page'  => 1,
			'post_status'     => 'publish',
			'orderby'         => 'rand',
			'meta_query'      => [
				'relation' => 'OR',
				[
					'key'     => 'min_sin_value',
					'value'   => $sin_value,
					'compare' => '<=',
				],
				[
					'key'     => 'max_sin_value',
					'value'   => $sin_value,
					'compare' => '>=',
				],
			],
		];

		$posts = new \WP_query( $args );

		$id = $posts->post->ID;

		return $id;
	}
}
