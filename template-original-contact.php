<?php
/**
 * The template for displaying Contact Page.
 *
 * Template Name: Contact Page Original
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
<section class="container">
<!-- <h1>I am contact</h1> -->
	<div id="primary" class="content-area col-md-12 col-lg-12">
		<main id="main" class="site-main contact-content" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

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
