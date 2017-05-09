<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

// ACF VARIABLES 
$contact_header_text = get_field('contact_header_text');
$contact_social_icons = get_field('contact_social_icons');
$contact_right_image = get_field('contact_right_image');

?>
<!-- <h1>I am contact content</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
	<header class="entry-header contact-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<article class="only-text">

			<!-- <section class="row contact-top-row">

				<div class="contact-image-container col-sm-12 col-md-6 col-lg-6 -col-sm-push-6 col-md-push-6 col-lg-push-6  wow slideInRight" data-wow-duration="2s" data-wow-delay=".5s">
					<img class="img-responsive" src="<?php echo $contact_right_image; ?>" alt="">
				</div>
				
				<div class="col-sm-12 col-md-6 col-lg-6 -col-sm-pull-6 col-md-pull-6 col-lg-pull-6 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s" >
					
					<h3><?php echo $contact_header_text; ?></h3>

					<ul class="contact-social">

						<?php echo $contact_social_icons; ?>

					</ul>

				</div>
							

			</section> -->

			<section class="contact-form-row  wow slideInUp" data-wow-duration="2s" data-wow-delay=".5s">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
						'after'  => '</div>',
					) );
				?>
			</section>
		
		</article>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'moose-frame' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
