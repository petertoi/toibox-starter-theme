<?php
/**
 * Filename base.php
 *
 * @package Toi\ToiBox
 * @author  Peter Toi <peter@petertoi.com>
 */

use Toi\ToiBox\Templates;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'views/partials/head' ); ?>
<body <?php body_class(); ?>>
<?php
wp_body_open();
do_action( 'get_header' );
?>
<div class="wrap">
  <?php include Templates\get_main(); ?>
</div>
<?php do_action( 'get_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
