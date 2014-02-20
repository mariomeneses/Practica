<?php
/**
 * Template Name: Página1
 */

?>
<?php get_header('header'); ?>
<?php wp_list_categories('orderby=name&show_count=1&exclude=10'); ?>

<ul>
<p>Post de la categoría 1: </p>


	<?php
		query_posts( array('posts_per_page' => -1, 'cat' => 2) );
		// The Loop
		while ( have_posts() ) : the_post();
		    echo '<li>';
		    the_title();
		    echo '</li>';
		endwhile;

		// Reset Query
		wp_reset_query();
	?>
</ul>

<ul>
<p>Post de la categoría 2:</p>
	<?php
		query_posts( array('posts_per_page' => -1, 'cat' => 3) );
		// The Loop
		while ( have_posts() ) : the_post();
		    echo '<li>';
		    the_title();
		    echo '</li>';
		endwhile;

		// Reset Query
		wp_reset_query();
	?>
</ul>

<ul>
<p>Post sin categoría:</p>
	<?php
		query_posts( array('posts_per_page' => -1, 'cat' => 1) );
		// The Loop
		while ( have_posts() ) : the_post();
		    echo '<li>';
		    the_title();
		    echo '</li>';
		endwhile;

		// Reset Query
		wp_reset_query();
	?>
</ul>


<ul>
<p>POST SOLO EN CATEGORIA 1</p>
<?php

// The Query
$the_query = new WP_Query('cat=-1,-3');

// The Loop
if ( $the_query->have_posts() ) {
        echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
        echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</ul>


<ul>
<p>POST SOLO EN CATEGORIA 2</p>
<?php

// The Query
$the_query = new WP_Query('cat=-1,-2');

// The Loop
if ( $the_query->have_posts() ) {
        echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
        echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</ul>


<ul>
<p>POST SOLO SIN CATEGORIA </p>
	<?php
		$the_query = new WP_Query('cat=-2,-3');
		if ( $the_query->have_posts() ){
			echo '<ul>';
		while ( $the_query->have_posts() ){
			$the_query->the_post();
			echo '<li>' . get_the_title() . '</li>';
		}
		echo '</ul>';
		}else{

		}
		wp_reset_postdata();
	?>


</ul>

<ul>
<p>POST en categoria 1 y 2 </p>
	<?php
		$query = new WP_Query( array( 'category__and' => array( 2,3)));
		if ( $query->have_posts() ){
			echo '<ul>';
		while ( $query->have_posts() ){
			$query->the_post();
			echo '<li>' . get_the_title() . '</li>';
		}
		echo '</ul>';
		}else{

		}
		wp_reset_postdata();
	?>
</ul>





Contenido de los post de la categoría 1:
	<?php
		query_posts('cat=2');
			while (have_posts()) : the_post();
			the_content();
			endwhile;
	?>

Contenido de los post de la categoría 2:
	<?php
		query_posts('cat=3');
			while (have_posts()) : the_post();
			the_content();
			endwhile;
	?>

Contenido de los post sin categoria:
	<?php
		query_posts('cat=1');
			while (have_posts()) : the_post();
			the_content();
			endwhile;
	?>






<?php get_footer('footer'); ?>