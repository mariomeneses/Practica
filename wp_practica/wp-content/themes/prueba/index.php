<?php get_header(); ?>
	<h1>Home</h1>
	<?php
		query_posts( 'posts_per_page=5' );
		// The Loop
		while ( have_posts() ) : the_post();
		    echo '<li>';
		    the_title();
		    echo '</li>';
		endwhile;

		// Reset Query
		wp_reset_query();
	?>
<?php get_footer(); ?>