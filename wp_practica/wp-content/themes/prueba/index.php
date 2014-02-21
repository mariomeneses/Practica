<?php get_header(); ?>
	<h1>Home</h1>
<p>TODOS LOS POST ORDENADOS POR FECHA </p>
<ul>

<?php
$args = array( 'posts_per_page' => -1, 'orderby' => 'post_date', 'order' => 'DESC');
$rand_posts = get_posts( $args );
foreach ( $rand_posts as $post ) : 
  setup_postdata( $post ); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; 
wp_reset_postdata(); ?>
</ul>

<?php get_footer(); ?>