<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<!-- <h1>content-single</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php moose_frame_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	
	<?php if ( has_post_thumbnail() ) : ?> 
		
		<div class="featured-img">
			<?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?>
		</div>

	<?php endif; ?>
		
		<article class="only-text">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'moose-frame' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
				'after'  => '</div>',
			) );
		?>
		</article>
	</div><!-- .entry-content -->

	<!--====================================
	=            The Form Block            =
	=====================================-->
	
			<section id="single-post-form" class="container hide">

				<div class="img-holder">
					<!-- <img class="img-responsive" src="/wp-content/uploads/2016/05/tiana-top.jpg" alt=""> -->
				</div>

				<article class="popup-text">
					
					<h4>Ready to make more MONEY and have more FUN in your business?</h4>

					<p>Join thousands of other entrepreneurs and get instant access to my online marketing guides, worksheets and freebies.</p>

				</article>

				<article class="form-container">

					<!-- INFUSION READ CODE -->
					<form class="form" accept-charset="UTF-8" action="https://rp172.infusionsoft.com/app/form/process/8e7e8155679d72f01f3ee0775a3bd593" class="infusion-form" method="POST">
					    <input name="inf_form_xid" type="hidden" value="8e7e8155679d72f01f3ee0775a3bd593" />
					    <input name="inf_form_name" type="hidden" value="Free Marketing Worksheet" />
					    <input name="infusionsoft_version" type="hidden" value="1.53.0.67" />
					    <div class="infusion-field form-group">
					        <label for="inf_field_FirstName">First Name *</label>
					        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" required />
					    </div>
					    <div class="infusion-field form-group">
					        <label for="inf_field_Email">Valid Email *</label>
					        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="email"  required />
					    </div>
					    <div class="infusion-field checkbox hide">
					        <!-- <span class="infusion-option"> -->

					            <label for="inf_option_SignUpOnMyInspireList">
					           		<input checked="checked" id="inf_option_SignUpOnMyInspireList" name="inf_option_SignUpOnMyInspireList" type="checkbox" value="223" />
					            	Sign Up On My Inspire List
					            </label>
					        <!-- </span> -->
					    </div>
					    <div class="infusion-submit">
					        <input id="pop-submit" type="submit" value="Sign Up!" />
					    </div>
					</form>
					<script type="text/javascript" src="https://rp172.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6de7b0bc66d40391a6653e39e4657709"></script>

				</article>
				
			</section>
	
	
	<!--====  End of The Form Block  ====-->	

	<!--======================================
	=            The Author Block            =
	=======================================-->
	
	<section id="single-post-author-block" class="hide">
		
		<article class="author-content">

			<img class="img-responsive img-circle pull-left" src="/wp-content/uploads/2016/06/TianaNEWJuneSidebarImage-3.jpg" alt="">
			<h5>Author: Tiana Gustafson</h5>
			<p class="author-txt">
				"Tiana Gustafson is the owner of Firefly Media and creator of the popular Freedom Planner. With her undergrad from Berklee College of Music and her Masters Degree in New Media Marketing from Full Sail University Tiana is passionate about teaching others how to create online marketing funnels that work."
			</p>

			<ul class="author-social">
				<li><a target="_blank" href="https://www.facebook.com/tianagustafson/?fref=ts"><i class="fa fa-facebook fa-2x"></i></a></li>				
				<li><a target="_blank" href="https://www.instagram.com/freedom_planner/"><i class="fa fa-instagram fa-2x"></i></a></li>				
				<li><a target="_blank" href="https://www.pinterest.com/tianastar/"><i class="fa fa-pinterest fa-2x"></i></a></li>				
				<li><a target="_blank" href="https://www.youtube.com/user/coffeeshopgrrrl "><i class="fa fa-youtube fa-2x"></i></a></li>				
				<li><a target="_blank" href="https://www.linkedin.com/in/tianastar"><i class="fa fa-linkedin fa-2x"></i></a></li>				
			</ul>			
			
		</article>

	</section>
	<hr>
	
	<!--====  End of The Author Block  ====-->

	<!--======================================
	=            The Related Post Block            =
	=======================================-->
	

<?php 
$current_categories = get_the_category();

$args = array(
	'post_per_page' => 3,
	'post__not_in' => array( $post->ID )
);	

$related_post_items = new WP_Query($args);
?>

	<section id="single-related-post-block">
				
		<article class="post-content">

					<h4 class="text-center">Keep On Learning ...</h4>

		<?php if ( $related_post_items->have_posts() ) : ?>
			<?php while ( $related_post_items->have_posts() ) : $related_post_items->the_post(); ?>					

				<div class="col-sm-4 col-md-4 col-lg-4">

					<?php if ( has_post_thumbnail() ) : ?> 
						
						<div class="featured-img">
							<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'blog-size', array('class' => 'img-responsive'));  ?></a>

						</div>
					<?php else : ?>	

						<div class="featured-img">
						
							<a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/06/TianaNEWJuneBlock_no-featured-version.jpg" alt=""></a>

						</div>				

					<?php endif; ?>		

				
					<!-- <img class="img-responsive" src="/wp-content/uploads/2016/06/TianaNEWJuneBlock_no-featured-version.jpg" alt=""> -->
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				</div>
						
			<?php endwhile; ?>	

		<?php endif; 

		wp_reset_postdata();

		?>

		</article>

		<!-- <footer class="entry-footer"> -->

			<div id="single-post-nav" class="row">
				<!-- <h5 class="pull-left">Prev Post</h5> -->
				<!-- <i class="fa fa-backward pull-left" aria-hidden="true"></i> -->

				<!-- <h5 class="pull-right">Next Post</h5> -->
				<!-- <i class="fa fa-forward pull-right" aria-hidden="true"></i> -->
				<?php //moose_frame_entry_footer(); ?>

			</div>
		<!-- <hr> -->
		<!-- </footer> -->

	</section>	

	
	<!--====  End of The Related Post Block  ====-->	
	



























</article><!-- #post-## -->
