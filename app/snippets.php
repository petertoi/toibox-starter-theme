<?php
/**
 * Filename snippets.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

namespace Toi\ToiBox\Snippets;

/**
 * Returns a formatted year to year string suitable for use in copyright statements etc.
 *
 * @param string $from
 * @param string $separator
 *
 * @return string Range of years if different, single year if the same.
 */
function year_from_to( $from, $separator = '&ndash;' ) {
    $to = date( 'Y' );

    $from_to = ( $from === $to )
        ? $from
        : "{$from}{$separator}{$to}";

    return $from_to;
}
