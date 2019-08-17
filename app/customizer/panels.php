<?php
/**
 * Filename panels.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

/**
 * Register the Site Options panel.
 */
add_action( 'customize_register', function ( $wp_customize ) {
    /**
     * @var WP_Customize_Manager $wp_customize
     */

    $wp_customize->add_panel(
        'site-options',
        array(
            'priority'       => 10,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Site Options', '' ),
            'description'    => esc_html__( 'Other theme options.', '' ),
        )
    );
} );
