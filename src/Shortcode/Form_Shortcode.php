<?php
namespace Ekanesh_prayer\Shortcode;

use Ekanesh_prayer\Form\Form;
use Ekanesh_prayer\Form\Submission;

class Form_Shortcode {

	public function __construct() {
		add_action( 'init', [ $this, 'register_shortcode' ] );
	}

	public function register_shortcode() {
		add_shortcode( 'ekanesh_prayer_form', [ $this, 'show_prayer_form' ] );
	}

	public function show_prayer_form() {
		$form = new Form();
		if ( ! isset( $_POST['cpt_nonce_field'] ) ) {
			return $form->generate_form();
		}

		if ( ( isset( $_POST['cpt_nonce_field'] ) ) && wp_verify_nonce( $_POST['cpt_nonce_field'], 'cpt_nonce_action' ) ) {
			$submission = new Submission();
			$prayer_id  = $submission->submit_form( $_POST );

			$html  = '';
			$html .= get_the_title( $prayer_id );
			$html .= get_post_field( 'post_content', $prayer_id );

			return $html;

		}
	}
}
