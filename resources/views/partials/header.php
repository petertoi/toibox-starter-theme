<?php
/**
 * Filename header.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */
?>
<header role="banner">
  <div class="container">
    Header
    <?php bloginfo( 'name' ); ?>
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
      <nav aria-label="Primary">
        <?php
        wp_nav_menu( [
          'container'      => '',
          'theme_location' => 'primary',
        ] );
        ?>
      </nav>
    <?php endif; ?>
    <?php
    get_search_form( [
      'aria_label' => 'Sitewide'
    ] );
    ?>
  </div>
</header>
