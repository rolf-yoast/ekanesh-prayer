<?php
namespace Ekanesh_prayer\Metaboxes\Sins;

class Sins_Metaboxes {

	public function __construct() {
		add_action( 'add_meta_boxes', [ $this, 'add_sin_amount_field' ] );
		add_action( 'save_post', [ $this, 'save_sins_amount_value' ] );
		add_action( 'edit_post', [ $this, 'save_sins_amount_value' ] );
	}

	public function add_sin_amount_field() {
		add_meta_box(
			'sins_value',
			'Sin extra info',
			[ $this, 'sins_amount_form' ],
			'ekanesh_sins'
		);
	}

	public function sins_amount_form( $post ) {
		if ( get_post_custom_values( 'sins_value', $post->ID )[0] ) {
			$value = get_post_custom_values( 'sins_value', $post->ID )[0];
		}
		?>
		<label for="sins_value"><strong>Sins value</strong></label> <br />
		Enter a value between 0 and 10 <br />
		<input name="sins_value" id="sins_value" type="number" min="0" max="10" value="<?php echo esc_attr( $value ); ?>" />
		<?php
	}

	public function save_sins_amount_value( $post_id ) {
		if ( get_post_type( $post_id ) !== 'ekanesh_sins' ) {
			return;
		}

		if ( isset( $_REQUEST['sins_value'] ) ) {
			update_post_meta( $post_id, 'sins_value', $_REQUEST['sins_value'] );
		}
	}
}
