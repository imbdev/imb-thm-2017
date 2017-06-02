<?php
/**
 * The template for displaying all pages.
 * Template Name: Praise Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('startpg'); ?>

<!--========================================
=            TESTIMONIAL HEADER            =
=========================================-->
<style type="text/css" media="screen">


	@media ( min-width: 992px ) {

		#praise-page-header {
			background-image: url(/wp-content/uploads/2017/04/imb-hero-img-1900x600.jpg);
			background-size: 100%;
			background-repeat: no-repeat;
		}		
	}
	@media ( max-width: 991px ) {

		#praise-page-header {
			background-image: url(/wp-content/uploads/2017/04/imb-hero-img-MOBILE-800x600.jpg);
			background-size: 100%;
			background-repeat: no-repeat;
		}		
	}

</style>

<section id="praise-page-header">

	<div class="overlay">
		
		<div class="container">
			
			<div class="col-sm-12 col-md-12 col-lg-8">

				<article class="featured-post">
					
					<h2 class="headline">Some extraordinary client results.</h2>

						<h1 class="post-title">
							Our greatest joy is watching our clients succeed, here’s what they’re saying about us.
						</h1>

					<!-- <a class="btn btn-primary btn-lg" href="#">Read More »</a> -->

				</article>
				
			</div>

		</div>

	</div> <!-- END OVERLAY -->

</section>


<!--====  End of TESTIMONIAL HEADER  ====-->

<!--=========================================
=            TOP TEXT INFO BLOCK            =
==========================================-->

<section id="praise-text-info-block">

	<main class="container">
		
		<h1 class="heading text-center">
			Couple of things to keep in mind.
		</h1>


		<div class="flex-container">
			
			<article class="text-box flex-item">
				<span class="special">1)</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</article>

			<article class="text-box flex-item">
				<span class="special">2)</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</article>

			<article class="text-box flex-item">
				<span class="special">3)</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
			</article>

		</div>


	</main>

</section>

<!--====  End of TOP TEXT INFO BLOCK  ====-->

<!--==============================================
=            PRAISE OPT-IN BLOCK            =
===============================================-->
<section id="praise-page-optin-block">

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
				
				<img class="optin-right-image img-responsive" src="/wp-content/uploads/2017/06/mical-praise-OPT-IN-350x350.png" alt="">

			</figure>
			
		</div>

	</main>
	
</section>

<!--========================================
=            Normal Praise Loop            =
=========================================-->

<section id="normal-praise-loop" class="container">

	<div id="primary" class="content-area col-md-12 col-lg-12">
	
		<main id="main" class="site-main" role="main">

		<?php


		$args = array(
			'post_type'      => 'praises',
		    'posts_per_page' => -1
		);
		 
		$my_query = new WP_Query( $args );

		?>
		 
		<?php if ( $my_query->have_posts() ) : ?>
		 
		    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		 

		 	<?php 

		 		$client_designation = get_field( 'client_designation' ); 
		 		$client_url = get_field( 'client_url' );
		 		$client_name = get_field( 'client_name' );

		  	?>
		       
		        <section class="praise-block clearfix">
			     	<?php if ( has_post_thumbnail() ) : ?>


				        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
			    				<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
				        </div>

			         	<div class="col-xs-12 col-sm-9 col-md-10 col-md-10">

		         	<?php else :  ?>
		         	
		         		<div class="col-md-12 col-md-12 no-image">

					<?php endif; ?>


		         		<article class="praise-text">
			         		<span class="icon-praise"><i class="fa fa-quote-left fa-2x"></i></span>
			         		<h3><?php the_title(); ?></h3>
				        		<?php the_content(); ?>
			         		<span class="icon-praise pull-right"><i class="fa fa-quote-right fa-2x"></i></span>

			         	</article>
			         	<aside class="praise-title">
			         		<a href="<?php echo $client_url; ?>" title="Tiana Praise" target="_blank"><?php echo $client_name; ?></a> | <?php echo $client_designation; ?>
			         	</aside>
		         	</div>



		        	
		        </section>
		 
		    <?php endwhile; ?>
		 
		<?php endif; ?>
		 
		<?php wp_reset_postdata(); ?>
 

		</main><!-- #main -->
	</div><!-- #primary -->

</section> <!-- End Container -->	

<!--====  End of Normal Praise Loop  ====-->



<?php
get_footer();
