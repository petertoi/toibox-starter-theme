<?php
/**
 * Filename shortcodes.php
 *
 * @package dev
 * @author  Peter Toi <peter@petertoi.com>
 */
add_shortcode( 'year_from_to', function ( $atts ) {
    // Setup defaults.
    $args = shortcode_atts(
        array(
            'from'      => date( 'Y' ),
            'to'        => date( 'Y' ),
            'separator' => ' &ndash; ',
        ),
        $atts
    );

    // Return current year if starting year is empty.
    if ( $args['from'] === $args['to'] ) {
        return $args['from'];
    }

    return esc_html( $args['from'] . $args['separator'] . $args['to'] );
} );
