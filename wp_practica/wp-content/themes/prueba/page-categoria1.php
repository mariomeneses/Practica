<?php
/**
 * Template Name: Categoria1
 */

?>
<?php get_header('header'); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

permalink = link q me envia a la pagina 1	
<a href="<?php echo get_permalink(30); ?>">Link a página 1</a>
<?php endwhile; // end of the loop. ?>

<?php get_footer('footer');?>