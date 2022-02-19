<?php
namespace Ekanesh_prayer\Form;

class Form {

	public function generate_form() {
		$sins = new Get_Sins();

		$html  = '';
		$html .= '<form method="post" id="ekenash_prayer_form">';
		$html .= '<h3>Basic information</h3>';
		$html .= '<p>';
		$html .= '<label for="ekanesh-name">Name: <br /><input id="ekanesh-name" required name="title" type="text" /></label>';
		$html .= '</p>';
		$html .= '<p>';
		$html .= 'Biological gender:<br />';
		$html .= '<label for="ekanesh-female"><input id="ekanesh-female" value="female" name="ekanesh_gender" type="radio" required />Female</label><br />';
		$html .= '<label for="ekanesh-other"><input id="ekanesh-other" value="other" name="ekanesh_gender" type="radio" required />other</label>';
		$html .= '</p>';
		$html .= 'Are you a Maïraan or Ekanesh:<br />';
		$html .= '<label for="ekanesh-mairaan"><input id="ekanesh-mairaan" value="1" name="ekanesh_mariaan_checkbox" type="Checkbox" />Yes, I am a Maïraan or Ekanesh.</label><br />';
		$html .= '</p>';
		$html .= $sins->get_sins();
		$html .= '<button>Submit confession</button>';
		$html .= wp_nonce_field( 'cpt_nonce_action', 'cpt_nonce_field' );
		$html .= '</form>';

		return $html;
	}
}
