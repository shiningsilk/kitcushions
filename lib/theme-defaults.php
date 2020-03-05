<?php
/**
 * KitCushions.
 *
 * This file adds the default theme settings to the KitCushions Theme.
 *
 * @package KitCushions
 * @author  KGeorge
 * @license GPL-2.0-or-later
 * @link    https://kgeorge.co/
 */

add_filter( 'simple_social_default_styles', 'kitcushions_social_default_styles' );
/**
 * Set Simple Social Icon defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults Social style defaults.
 * @return array Modified social style defaults.
 */
function kitcushions_social_default_styles( $defaults ) {

	$args = genesis_get_config( 'simple-social-icons-settings' );

	return wp_parse_args( $args, $defaults );

}
