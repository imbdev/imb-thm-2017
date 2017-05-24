<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('startpg'); ?>

<style type="text/css" media="screen">


	@media ( min-width: 1200px ) {

		#blog-page-header {
			/* min-height: 600px; */
			background: url(/wp-content/uploads/2017/05/blog-index-header-img-1920x600.jpg) no-repeat;
			  background-size: 100%;
			  /* background-position: 10% 20%; */
		}		
	}

</style>

<section id="blog-page-header">



	<div class="container">
		
		<div class="col-sm-12 col-md-6 col-lg-6">

			<article class="featured-post">
				
				<h2 class="headline">FEATURED POST</h2>

				<a href="#">
					<h1 class="post-title">
						MEET DR. BRETT KOTLUS, A NYC COSMETIC SURGEON WHO DOUBLED HIS TRAFFIC AND NOW GETS HALF HIS NEW PATIENTS FROM HIS BLOG
					</h1>
				</a>

				<p>
					Two years ago, Dr. Brett Kotlus quit his job as a cosmetic surgeon.
					Everyone thought he was nuts. Why?
					He ...
				</p>

				<a class="btn btn-primary btn-lg" href="#">Read More »</a>

			</article>
			
		</div>
		<!-- <figure class="col-lg-6">

			<img class="blog-index-header-image visible-lg img-responsive" src="/wp-content/uploads/2017/05/blog-index-header-img-1920x600.jpg" alt="">
			
		</figure> -->
	</div>

	<img class="blog-index-header-image hidden-lg img-responsive" src="/wp-content/uploads/2017/05/blog-index-header-img-1920x600.jpg" alt="">

	
</section>

<section class="container">
<!-- <h1>I am blog page coming from home.php</h1> -->
	<div id="primary" class="content-area col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'blog' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

</section>

<section id="single-btn-optin-widget" class="">

	<div class="container">

		<article id="widget-box" class="col-sm-6 col-md-6 col-lg-6 text-center">

			<?php 
				if ( ! is_active_sidebar( 'page-bottom' ) ) {
					return;
				}

				dynamic_sidebar( 'page-bottom' ); 

			?>	
			
		</article>		
	</div>
	
</section>






<?php

get_footer();
