<?php
/**
 * Template Name: Categoria1
 */

?>
<?php get_header('header'); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="arbol_1" style="background-image: url(<?php print get_template_directory_uri(); ?>/img/1.jpeg);">

</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer('footer');?>