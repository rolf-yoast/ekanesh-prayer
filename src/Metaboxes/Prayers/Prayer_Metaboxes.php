<?php
namespace Ekanesh_prayer\Metaboxes\Prayers;

class Prayer_Metaboxes {

	public function __construct() {
		add_action( 'add_meta_boxes', [ $this, 'add_sin_amount_field' ] );
		add_action( 'save_post', [ $this, 'save_sins_amount_value' ] );
		add_action( 'edit_post', [ $this, 'save_sins_amount_value' ] );
	}

	public function add_sin_amount_field() {
		add_meta_box(
			'sins_value',
			'Prayer extra info',
			[ $this, 'sins_amount_form' ],
			'ekanesh_prayer'
		);
	}

	public function sins_amount_form( $post ) {
		if ( get_post_custom_values( 'min_sin_value', $post->ID )[0] ) {
			$min_value = get_post_custom_values( 'min_sin_value', $post->ID )[0];
			$max_value = get_post_custom_values( 'max_sin_value', $post->ID )[0];
		}
		?>
		<label for="sins_value"><strong>Sins value</strong></label> <br />
		Enter a value between 0 and 1000 <br />
		<p>
			<input name="min_sin_value" id="min_sin_value" type="number" min="0" max="1000" value="<?php echo esc_attr( $min_value ); ?>" required /> Min
		</p>

		<input name="max_sin_value" id="max_sin_value" type="number" min="0" max="1000" value="<?php echo esc_attr( $max_value ); ?>" required /> Max
		<?php
	}

	public function save_sins_amount_value( $post_id ) {
		if ( get_post_type( $post_id ) !== 'ekanesh_prayer' ) {
			return;
		}

		if ( isset( $_REQUEST['min_sin_value'] ) ) {
			update_post_meta( $post_id, 'min_sin_value', $_REQUEST['min_sin_value'] );
			update_post_meta( $post_id, 'max_sin_value', $_REQUEST['max_sin_value'] );
		}
	}
}
