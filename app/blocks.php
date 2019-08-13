<?php
/**
 * Filename blocks.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

namespace Toi\ToiBox\Blocks;

add_filter( 'block_categories', function ( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'my-category',
                'title' => __( 'My category', 'toibox' ),
                'icon'  => 'wordpress',
            ),
        )
    );
}, 10, 2 );

add_filter( 'allowed_block_types', function ( $allowed_block_types, $post ) {
    return $allowed_block_types;
}, 10, 2 );
