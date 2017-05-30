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


	@media ( min-width: 992px ) {

		#blog-page-header {
			background: url(/wp-content/uploads/2017/05/blog-index-header-img-1920x600.jpg) no-repeat;
			  background-size: 100%;
		}		
	}

</style>

<section id="blog-page-header">

<!-- <h1>this blog template home.php</h1> -->

	<div class="container">
		
		<div class="col-sm-12 col-md-12 col-lg-6">

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

	</div>

	<img class="blog-index-header-image hidden-md hidden-lg img-responsive" src="/wp-content/uploads/2017/05/blog-index-header-img-mobile-1000x500.jpg" alt="">

	
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

<section id="blog-page-optin-block">

	<main class="container">
		
		<div class="col-sm-12 col-md-6 col-lg-6">

			<article class="text-block text-center">

				<h3 class="sub-heading">JOIN OVER 200,000 SUBSCRIBERS</h3>

				<h1 class="heading">GET FREE UPDATES</h1>

				<div class="leadbox-embed center-block">
					<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <button data-leadbox-popup="14e99a133f72a2:142918c46b46dc" style="background: rgb(67, 72, 117);border-color: rgb(67, 72, 117);border-radius: 20px;color: #FFFFFF;display: inline-block;vertical-align: middle;padding: 16px 32px;min-width: 192px;border: 1px solid rgb(67, 72, 117);font-size: 1rem;font-family: Helvetica, Arial, sans-serif;text-align: center;outline: 0;line-height: 1;cursor: pointer;-webkit-transition: background 0.3s, color 0.3s, border 0.3s;transition: background 0.3s, color 0.3s, border 0.3s;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);">CLICK HERE TO SUBSCRIBE</button> 									
				</div>			
				
			</article>
			
		</div>
		<div class="col-md-6 col-lg-6 visible-md visible-lg">

			<figure class="image-block">
				
				<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/imb-blgindx-optin-650x400.png" alt="">

			</figure>
			
		</div>

	</main>
	
</section>

<section id="blog-most-popular-block">

	<main class="container">

		<div class="header-block row">

            <p class="sub-heading text-center">Want More Helpful Stuff? Check Out</p>
            
            <h3 class="heading"><span>
            	OUR MOST POPULAR RESOURCES
            </span></h3>

        </div>	
	
		<div class="content-block row">

			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
				
		</div>

		<div class="content-block row">

			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">

				<figure class="featured-image">
					
					<a href="#">
						<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/05/Screen-Shot-2017-05-30-at-7.43.30-PM.png" alt="">
					</a>

				</figure>

				<a href="#">
					<h3 class="block-title">HOW TO GET YOUR FIRST 5,000 SUBSCRIBERS EBOOK</h3>
				</a>
				
				<p class="block-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</p>
				
			</div>
				
		</div>
		

	</main>
	
</section>





<?php

get_footer();
