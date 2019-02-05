<?php
/**
 * Field "Input Number"
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( isset( $options[ $args[ 'id' ] ] ) ) {
	$value = $options[ $args[ 'id' ] ];
} else {
	$value = isset( $args[ 'std' ] ) ? $args[ 'std' ] : '';
}

$placeholder = isset( $args[ 'placeholder' ] ) ? $args[ 'placeholder' ] : '';
$size        = ( isset( $args[ 'size' ] ) && ! is_null( $args[ 'size' ] ) ) ? $args[ 'size' ] : 'regular';
$min         = isset( $args[ 'min' ] ) ? $args[ 'min' ] : '';
$max         = isset( $args[ 'max' ] ) ? $args[ 'max' ] : '';
?>

<div class="htl-ui-setting htl-ui-setting--number htl-ui-setting--<?php echo esc_attr( $args[ 'id' ] ); ?>">
	<input type="number" class="<?php echo esc_attr( $size ); ?>-text htl-ui-input htl-ui-input--number" id="hotelier_settings[<?php echo esc_attr( $args[ 'id' ] ); ?>]" name="hotelier_settings[<?php echo esc_attr( $args[ 'id' ] ); ?>]" value="<?php echo esc_attr( $value ); ?>" placeholder="<?php echo esc_attr( $placeholder ); ?>" min="<?php echo esc_attr( $min ); ?>" max="<?php echo esc_attr( $max ); ?>" />

	<label class="htl-ui-label htl-ui-label--text htl-ui-setting__description htl-ui-setting__description--number htl-ui-setting__description--<?php echo esc_attr( $args[ 'id' ] ); ?>" for="hotelier_settings[<?php echo esc_attr( $args[ 'id' ] ); ?>]"><?php echo wp_kses_post( $args[ 'desc' ] ); ?></label>
</div>
