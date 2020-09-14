<?php
/*
Plugin Name: Meta Box
Plugin URI: https://bygiovanni.com.br
Description:
Version: 1.0
Author: Giovanni - Tableless
Author URI: https://bygiovanni.com.br
*/

//ADICIONANDO O META BOX
add_action( 'add_meta_boxes', 'vinil_meta_box_add' );
function vinil_meta_box_add()
{
add_meta_box( 'my-meta-box-id', 'Meu primeiro Meta Box', 'vinil_meta_box_vinil', 'post', 'normal', 'high' );
}

//FORMULARIO PARA SALVAS OS DADOS
function vinil_meta_box_vinil()
{
$values = get_post_custom( $post->ID );
$text = isset( $values['texto_meta_box'] ) ? esc_attr( $values['texto_meta_box'][0] ) : '';
$selected = isset( $values['meta_box_select'] ) ? esc_attr( $values['meta_box_select'][0] ) : '';
$check = isset( $values['meta_box_check'] ) ? esc_attr( $values['meta_box_check'][0] ) : '';
wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
?>
<p>
<label for="texto_meta_box">Text Label</label>
<input type="text" name="texto_meta_box" id="texto_meta_box" />
</p>
<p>
<label for="meta_box_select">Color</label>
<select name="meta_box_select" id="meta_box_select">
<option value="red" <?php selected( $selected, 'red' ); ?>>Vermelho</option>
<option value="blue" <?php selected( $selected, 'blue' ); ?>>Azul</option>
</select>
</p>
<p>
<input type="checkbox" name="meta_box_check" id="meta_box_check" <?php checked( $check, 'on' ); ?> />
<label for="meta_box_check">Don't Check This.</label>
</p>
<?php
}

add_action( 'save_post', 'vinil_meta_box_save' );
function vinil_meta_box_save( $post_id )
{
if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

if( !current_user_can( 'edit_post' ) ) return;

$allowed = array(
'a' => array(
'href' => array()
)
);

if( isset( $_POST['texto_meta_box'] ) )
update_post_meta( $post_id, 'texto_meta_box', wp_kses( $_POST['texto_meta_box'], $allowed ) );

if( isset( $_POST['meta_box_select'] ) )
update_post_meta( $post_id, 'meta_box_select', esc_attr( $_POST['meta_box_select'] ) );

$chk = ( isset( $_POST['meta_box_check'] ) && $_POST['meta_box_check'] ) ? 'on' : 'off';
update_post_meta( $post_id, 'meta_box_check', $chk );
}

?>