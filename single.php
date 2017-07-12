<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MetaCog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$args = array( 'numberposts' => '1' );
			$recent_posts = wp_get_recent_posts( $args );
			$post_date = get_the_date( 'l F j, Y' );
			foreach( $recent_posts as $recent ){
				echo '<h1><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h1> ';
				echo '<p>' . $recent["post_date"] . '</p>';
				echo '<p>' . $recent["post_content"] . '</p>';
			
			}

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
