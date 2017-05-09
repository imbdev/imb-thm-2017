<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Page with Sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
<section class="container-fluid">
<!-- <h1>I am page</h1> -->
	<div id="primary" class="content-area col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="sidebar col-md-3 col-md-3">

		<?php get_sidebar();  ?>
		
	</div>
</section> <!-- End Container -->	
<?php
get_footer();
