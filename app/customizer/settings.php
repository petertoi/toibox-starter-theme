<?php
/**
 * Filename settings.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

/**
 * Register the Copyright section settings
 */
add_action( 'customize_register', function ( $wp_customize ) {
    /**
     * @var WP_Customize_Manager $wp_customize
     */

    // Register a setting.
    $wp_customize->add_setting(
        '_toibox_copyright',
        array(
            'default'           => '',
            'sanitize_callback' => 'force_balance_tags',
        )
    );

    // Create the setting field.
    $wp_customize->add_control(
        '_toibox_copyright',
        array(
            'label'       => esc_html__( 'Copyright Statement', '' ),
            'description' => esc_html__( 'Copyright statement. Basic HTML tags are allowed.', '' ),
            'section'     => '_toibox_copyright_section',
            'type'        => 'text',
        )
    );
} );

/**
 * Register the Additional scripts settings
 */
add_action( 'customize_register', function ( $wp_customize ) {
    /**
     * @var WP_Customize_Manager $wp_customize
     */

    // Register a setting.
    $wp_customize->add_setting(
        '_toibox_header_scripts',
        array(
            'default'           => '',
            'sanitize_callback' => 'force_balance_tags',
        )
    );

    // Create the setting field.
    $wp_customize->add_control(
        '_toibox_header_scripts',
        array(
            'label'       => esc_html__( 'Header Scripts', '' ),
            'description' => esc_html__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', '' ),
            'section'     => '_toibox_additional_scripts_section',
            'type'        => 'textarea',
        )
    );

    // Register a setting.
    $wp_customize->add_setting(
        '_toibox_body_open_scripts',
        array(
            'default'           => '',
            'sanitize_callback' => 'force_balance_tags',
        )
    );

    // Create the setting field.
    $wp_customize->add_control(
        '_toibox_body_open_scripts',
        array(
            'label'       => esc_html__( 'Body Open Scripts', '' ),
            'description' => esc_html__( 'Additional scripts to add just after the <body> open tag. Basic HTML tags are allowed.', '' ),
            'section'     => '_toibox_additional_scripts_section',
            'type'        => 'textarea',
        )
    );

    // Register a setting.
    $wp_customize->add_setting(
        '_toibox_footer_scripts',
        array(
            'default'           => '',
            'sanitize_callback' => 'force_balance_tags',
        )
    );

    // Create the setting field.
    $wp_customize->add_control(
        '_toibox_footer_scripts',
        array(
            'label'       => esc_html__( 'Footer Scripts', '' ),
            'description' => esc_html__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', '' ),
            'section'     => '_toibox_additional_scripts_section',
            'type'        => 'textarea',
        )
    );
} );
