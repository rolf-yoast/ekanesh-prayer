<?php
namespace Ekanesh_prayer\Metaboxes\Confessions;

class Confessions_Metaboxes {

	public function __construct() {
		add_action( 'add_meta_boxes', [ $this, 'add_sin_amount_field' ] );
	}

	public function add_sin_amount_field() {
		add_meta_box(
			'ekanesh_mariaan_checkbox',
			'Confession extra info',
			[ $this, 'mariaan_checkbox' ],
			'ekanesh_confession'
		);
	}

	public function mariaan_checkbox( $post ) {
		$checked = '';
		if ( get_post_custom_values( 'ekanesh_mariaan_checkbox', $post->ID )[0] === '1' ) {
			$checked = 'checked';
		}

		$gender = '';
		if ( isset( get_post_custom_values( 'ekanesh_gender', $post->ID )[0] ) ) {
			$gender = get_post_custom_values( 'ekanesh_gender', $post->ID )[0];
		}

		?>
		<p>
			<label for="mariaan_checkbox"><strong>Is this person a Maïraan?</strong></label> <br />
			<input name="ekanesh_mariaan_checkbox" disabled id="mariaan_checkbox" type="checkbox" value="1" <?php echo esc_attr( $checked ); ?> />
		</p>
		<p>
			<label>
				<strong>
					Biological gender
				</strong>
			</label><br />
			<label>
				<input name="ekanesh_gender" type="radio" value="female" disabled
				<?php
				if ( $gender === 'female' ) {
					echo 'checked';}
				?>
				/> Female
			</label><br />
			<label>
				<input name="ekanesh_gender" type="radio" value="other" disabled
				<?php
				if ( $gender === 'other' ) {
					echo 'checked';}
				?>
				/> Other
			</label>
		</p>
		<p>
			<label>
				<strong>
					Total sin value of confession: <?php echo esc_html( get_post_custom_values( 'ekanesh_sin_value', $post->ID )[0] ); ?>
				</strong>

			</label>
		</p>
		<p>
		<?php echo esc_html( get_post_custom_values( 'ekanesh_prayer_id', $post->ID )[0] ); ?>
		</p>
		<?php
	}
}
