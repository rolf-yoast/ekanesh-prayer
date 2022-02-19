<?php
namespace Ekanesh_prayer\Form;

class Get_Sins {

	public function get_sins() {
		$html = '';

		$terms = get_terms(
			[
				'taxonomy'   => 'sin_categories',
				'hide_empty' => true,
			]
		);

		foreach ( $terms as $term ) {
			$html .= '<h3>' . $term->name . '</h3>';
			$html .= $this->get_sins_for_category( $term->slug );
		}

		return $html;
	}

	public function get_sins_for_category( $sin_category ) {
		$args = [
			'post_type'       => 'ekanesh_sins',
			'posts_per_page'  => 10,
			'post_status'     => 'publish',
			'orderby'         => 'title',
			'order'           => 'ASC',
			'tax_query'       => [
				[
					'taxonomy'       => 'sin_categories',
					'field'          => 'slug',
					'terms'          => $sin_category,
				],
			],
		];

		$html = '';

		$posts = new \WP_query( $args );

		if ( $posts->have_posts() ) {
			$html .= '<p>';
			while ( $posts->have_posts() ) {
				$posts->the_post();

				$html .= '<label>';
				$html .= '<input name="ekanesh_sins[]" value="' . get_the_id() . '" type="checkbox" />' . get_the_title();
				$html .= '</label><br />';
			}
			$html .= '</p>';
		}

		wp_reset_postdata();

		return $html;
	}
}
