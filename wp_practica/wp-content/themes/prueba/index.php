<?php get_header(); ?>
	<h1>Home</h1>
	<?php
		query_posts( 'posts_per_page=all' );
		// The Loop
		while ( have_posts() ) : the_post();
		    echo '<li>';
		    the_title();
		    echo '</li>';
		endwhile;

		// Reset Query
		wp_reset_query();
	?>

<?php

	if ( is_category( 'category-slug' ) ) : 

	 query_posts( array( 'Categoria1' => 'categoria1', 'posts_per_page' => -1 ) ); 

endif; 
?>
	<?php $args = array('orderby' => '',); ?>
<?php get_footer(); ?>