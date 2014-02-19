<html>
<head>
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

		?></title>
		<!-- llamado bootstrap-->
		<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/css/main.css">
        <!-- llamado scripts-->
        <script src="<?php print get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php print get_template_directory_uri(); ?>/js/bootstrap.js"></script>
        <script src="<?php print get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
        <script src="<?php print get_template_directory_uri(); ?>/js/less.js"></script>


</head>
<body>
<nav class="navbar navbar-static-top" role="navigation">
  <div class="container">
    <ul>
    	<li>Link 1</li>
    	<li>Link 1</li>
    	<li>Link 1</li>
   </ul>
  </div>
</nav>