<?php
/**
 * Filename dashboard.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

add_action( 'admin_init', function () {
    // Depreciated / Legacy
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );

    // WordPress Events & News
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );

    // Quick Press
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );

    // Recent Drafts
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );

    // Recent Comments
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );

    // Activity: Recently Published / Recent Comments
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );

    // At a Glance: Number of Posts, Pages, Comments, Etc.
    // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
} );

add_filter( 'admin_footer_text', function ( $html ) {
    return '<span id="footer-thankyou">Made in 🇨🇦 by <a href="https://petertoi.com" target="_blank">Peter Toi</a>.</span>';
} );
