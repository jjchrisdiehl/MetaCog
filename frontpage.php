<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

   <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
           <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">  

				<div class="sidebar-brand">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;?>
					</div><!-- .site-branding -->
					<div class="logo">
	                    <img src="http://localhost/metacog/wp-content/uploads/2017/06/kestrel_sq.jpg" class="img-responsive center-block" alt="Logo">
	                </div>
                </div>



<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'primary',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav sidebar-nav')
);
?>
            </nav>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
        	<button type="button" class="hamburger is-open" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
	<?php
					// Create Slider
 
    function post_slider() {
 
        // Query Arguments
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );  
 
        // The Query
        $the_query = new WP_Query( $args );
 
        // Check if the Query returns any posts
        if ( $the_query->have_posts() ) {
 
            // Start the Slider ?>
            <div class="flexslider">
                <ul class="slides">
 
                    <?php
                    // The Loop
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li>
                         
                         <div class="header-image"><?php 
 
                        // The Slide's Image
                        echo the_post_thumbnail();
                         ?></div>

                        <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
						<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

						<p><?php echo the_content(); ?></p>
                       
 
                        </li>
                    <?php endwhile; ?>
 
                </ul><!-- .slides -->
            </div><!-- .flexslider -->
 
        <?php }
 
        // Reset Post Data
        wp_reset_postdata();
    }
		?>

		<?php echo post_slider(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php
get_footer();
