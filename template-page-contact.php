<?php
/**
 * The template for displaying Contact Page.
 *
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('startpg'); ?>
<section class="container">
<!-- <h1>I am contact</h1> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main contact-content" role="main">

			<div class="col-sm-6 col-md-6 col-lg-6">
				<article class="imb-contact-page-left-text-only">

					<?php the_field('contact_page_left_text_block'); ?>
							
				</article>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<figure>
					
					<img class="img-responsive" src="<?php the_field('contact_page_right_image'); ?>" alt="">
					<!-- <img src="/wp-content/uploads/2017/05/contact-pg-img-600x929.jpg" alt=""> -->
					
				</figure>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	
<?php
get_footer();
