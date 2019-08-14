<?php
/**
 * Filename customizer.php
 *
 * @package clean50
 * @author  Peter Toi <peter@petertoi.com>
 */

add_action( 'customize_register', function ( $wp_customize ) {
    /** @var WP_Customize_Manager $wp_customize */
//    $wp_customize->remove_control( 'custom_css' );
    $wp_customize->remove_section( 'custom_css' );
} );

