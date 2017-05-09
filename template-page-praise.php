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

get_header(); ?>
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

		         	<?php else : ; ?>
		         	
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
