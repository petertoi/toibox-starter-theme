<?php
/**
 * Filename page.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */
?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
    <?php the_title( '<h1>', '</h1>' ); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>


