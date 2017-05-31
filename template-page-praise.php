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

		<!-- <img class="praise-header-image hidden-md hidden-lg img-responsive" src="/wp-content/uploads/2017/04/imb-hero-img-MOBILE-800x600.jpg" alt=""> -->

	</div> <!-- END OVERLAY -->

</section>
<section class="container">
<!-- <h1>I am real praise</h1> -->
	<div id="primary" class="content-area col-md-12 col-lg-12">
	
		<main id="main" class="site-main" role="main">

		<?php


		$args = array(
		    // 'category_name' => 'news',
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
		         		<!-- // Post data goes here. -->
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
		 
		<!-- // Reset the `$post` data to the current post in main query. -->
		<?php wp_reset_postdata(); ?>
 

		</main><!-- #main -->
	</div><!-- #primary -->
	<div id="widget-box" class="col-sm-12 col-md-12 col-lg-12">


		<?php 
			if ( ! is_active_sidebar( 'page-bottom' ) ) {
				return;
			}

			dynamic_sidebar( 'page-bottom' ); 

		?>	
		
	</div>	

</section> <!-- End Container -->	
<?php
get_footer();
