<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Start Page Template
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

get_header('startpg'); ?>

<section id="imb-startpg-top-hero-unit" class="container-fluid">

	<div class="content-box container">

		<div class="col-md-6 col-lg-6">

			<article class="left-text-box">

				<h4 class="sub-heading">
					<!-- WELCOME TO INSPIRED MOMMY BOSS -->
					<?php the_field('top_hero_sub_headline'); ?>
				</h4>
				
				<h1 class="headline">
					<!-- LET ME HELP YOU REACH YOUR LIFE & BUSINESS GOALS. -->
					<?php the_field('top_hero_headline'); ?>
				</h1>

				<?php the_field('top_hero_left_text_block'); ?>

				<img class="hero-image-mobile-bg img-responsive hidden-md hidden-lg" src="/wp-content/uploads/2017/05/imb-startpg-top-hero-mobile-bg-992w.jpg" alt="">

			</article>



		</div>
		<div class="col-md-6 col-lg-6 hidden-sm hidden-xs">

			<figure class="right-img-box">
				
				<img class="hero-image img-responsive" src="<?php the_field('top_hero_right_hero_image'); ?>" alt="">
				<!-- <img class="hero-image img-responsive" src="/wp-content/uploads/2017/05/imb-startpg-top-hero-650x400.jpg" alt=""> -->
				
			</figure>

		</div>

	</div>

</section> <!-- End imb-startpg-top-hero-unit -->

<section id="imb-startpg-top-roadmap" class="">

	<section class="imb-startpg-top-roadmap-unit white" class="container-fluid">
		
		<div class="content-box container">
			
			<div class="row">
				<article class="text-content col-sm-7 col-md-7 col-lg-7">

					<h3 class="sub-headline">
						<!-- I want to ... -->
						<?php the_field('top_roadmap_sub_headline_1'); ?>
					</h3>
					
					<h1 class="headline">
						<!-- JUMP START MY FACEBOOK FOLLOWING IN 5 DAYS -->
						<?php the_field('top_roadmap_headline_1'); ?>
					</h1>

					<a href="<?php the_field('top_roadmap_left_button_url_1'); ?>" class="btn btn-primary btn-lg"><?php the_field('top_roadmap_left_button_text_1'); ?> &nbsp;></a>

				</article>
				<article class="col-sm-5 col-md-5 col-lg-5">
					
					<!-- <img class="center-block" src="http://lorempixel.com/700/450/abstract/6" alt=""> -->
					<img class="center-block" src="<?php the_field('top_roadmap_right_image_1'); ?>" alt="">

				</article>			
			</div>

		</div>

	</section> 

	<section class="imb-startpg-top-roadmap-unit purple" class="container-fluid">
		
		<div class="content-box container">
			
			<div class="row">
				<article class="text-content col-sm-7 col-md-7 col-lg-7">

					<h3 class="sub-headline">
						<!-- I want to ... -->
						<?php the_field('top_roadmap_sub_headline_2'); ?>
					</h3>
					
					<h1 class="headline">
						<!-- JUMP START MY FACEBOOK FOLLOWING IN 5 DAYS -->
						<?php the_field('top_roadmap_headline_2'); ?>
					</h1>

					<a href="<?php the_field('top_roadmap_left_button_url_2'); ?>" class="btn btn-primary btn-lg"><?php the_field('top_roadmap_left_button_text_2'); ?> &nbsp;></a>

				</article>
				<article class="col-sm-5 col-md-5 col-lg-5">
					
					<!-- <img class="center-block" src="http://lorempixel.com/700/450/abstract/6" alt=""> -->
					<img class="center-block" src="<?php the_field('top_roadmap_right_image_2'); ?>" alt="">

				</article>			
			</div>

		</div>

	</section> 

	<section class="imb-startpg-top-roadmap-unit white" class="container-fluid">
		
		<div class="content-box container">
			
			<div class="row">
				<article class="text-content col-sm-7 col-md-7 col-lg-7">

					<h3 class="sub-headline">
						<!-- I want to ... -->
						<?php the_field('top_roadmap_sub_headline_3'); ?>
					</h3>
					
					<h1 class="headline">
						<!-- JUMP START MY FACEBOOK FOLLOWING IN 5 DAYS -->
						<?php the_field('top_roadmap_headline_3'); ?>
					</h1>

					<a href="<?php the_field('top_roadmap_left_button_url_3'); ?>" class="btn btn-primary btn-lg"><?php the_field('top_roadmap_left_button_text_3'); ?> &nbsp;></a>

				</article>
				<article class="col-sm-5 col-md-5 col-lg-5">
					
					<!-- <img class="center-block" src="http://lorempixel.com/700/450/abstract/6" alt=""> -->
					<img class="center-block" src="<?php the_field('top_roadmap_right_image_3'); ?>" alt="">

				</article>			
			</div>

		</div>

	</section> 

	<section class="imb-startpg-top-roadmap-unit purple" class="container-fluid">
		
		<div class="content-box container">
			
			<div class="row">
				<article class="text-content col-sm-7 col-md-7 col-lg-7">

					<h3 class="sub-headline">
						<!-- I want to ... -->
						<?php the_field('top_roadmap_sub_headline_4'); ?>
					</h3>
					
					<h1 class="headline">
						<!-- JUMP START MY FACEBOOK FOLLOWING IN 5 DAYS -->
						<?php the_field('top_roadmap_headline_4'); ?>
					</h1>

					<a href="<?php the_field('top_roadmap_left_button_url_4'); ?>" class="btn btn-primary btn-lg"><?php the_field('top_roadmap_left_button_text_4'); ?> &nbsp;></a>

				</article>
				<article class="col-sm-5 col-md-5 col-lg-5">
					
					<!-- <img class="center-block" src="http://lorempixel.com/700/450/abstract/6" alt=""> -->
					<img class="center-block" src="<?php the_field('top_roadmap_right_image_4'); ?>" alt="">

				</article>			
			</div>

		</div>

	</section> 

</section>

<section id="imb-startpg-optin-CTA" class="container-fluid">
	
	<div class="content-box">
		
		<article class="col-sm-2 col-md-2 col-lg-2"></article>
		<article class="text-content col-sm-8 col-md-8 col-lg-8">
			
			<h1 class="headline">
				<!-- Do you Want To Know How You Can Balance Your Life, Family and Finances (plus have FUN)	while growing an AWESOME Business? -->
				<?php the_field('blue_cta_text'); ?>
			</h1>

			<a href="<?php the_field('blue_cta_button_url'); ?>" class="btn btn-primary btn-lg"><?php the_field('blue_cta_button_text'); ?> &nbsp;></a>

		</article>
		<article class="col-sm-2 col-md-2 col-lg-2"></article>

	</div>

</section> <!-- End imb-startpg-optin-CTA -->


<section id="imb-startpg-roadmap" class="container-fluid">

	<div class="content-box container">
		
		<h1 class="headline">
			<!-- A FEW WAYS I CAN HELP YOU -->
			<?php the_field('middle_optin_roadmap_headline'); ?>
		</h1>

		<div class="image-group row">

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="image-holder">
					<a href="<?php the_field('middle_optin_roadmap_left_image_url'); ?>" title=""><img class="roadmap-image img-responsive" src="<?php the_field('middle_optin_roadmap_left_image'); ?>" alt=""></a>
				</div>
			
				<article class="roadmap-image-text">
					
					<h4 class="text-only">
						<!-- Free Checklist: Grow Your Business Anywhere with a Laptop and Smart Phone -->
						<?php the_field('middle_optin_roadmap_left_text'); ?>	
					</h4>
					
				</article>

				<div class="roadmap-button">

					<a href="<?php the_field('middle_optin_roadmap_left_button_url'); ?>" class="btn btn-primary btn-lg"><?php the_field('middle_optin_roadmap_left_button_text'); ?></a>
				
				</div>

			</figure>

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="image-holder">
					<a href="<?php the_field('middle_optin_roadmap_middle_image_url'); ?>" title=""><img class="roadmap-image img-responsive" src="<?php the_field('middle_optin_roadmap_middle_image'); ?>" alt=""></a>
					<!-- <a href="#" title=""><img class="roadmap-image img-responsive" src="/wp-content/uploads/2017/05/middle-420x300.jpg" alt=""></a> -->
				</div>
			
				<article class="roadmap-image-text">
					
					<h4 class="text-only">
						<?php the_field('middle_optin_roadmap_middle_text'); ?>	
						<!-- How To Create a Side Hustle using Facebook -->
					</h4>
					
				</article>

				<div class="roadmap-button">

					<a href="<?php the_field('middle_optin_roadmap_middle_button_url'); ?>" class="btn btn-primary btn-lg"><?php the_field('middle_optin_roadmap_middle_button_text'); ?></a>
				
				</div>
				
			</figure>

			<figure class="image-box col-sm-4 col-md-4 col-lg-4">
				
				<div class="image-holder">
					<a href="<?php the_field('middle_optin_roadmap_right_image_url'); ?>" title=""><img class="roadmap-image img-responsive" src="<?php the_field('middle_optin_roadmap_right_image'); ?>" alt=""></a>
					<!-- <a href="#" title=""><img class="roadmap-image img-responsive" src="/wp-content/uploads/2017/05/right-420x300.jpg" alt=""></a> -->
				</div>
			
				<article class="roadmap-image-text">
					
					<h4 class="text-only">
						<?php the_field('middle_optin_roadmap_right_text'); ?>	
						<!-- How To Attract Other Leaders using Social Media onto Your Network Marketing Team -->
					</h4>
					
				</article>

				<div class="roadmap-button">

					<a href="<?php the_field('middle_optin_roadmap_right_button_url'); ?>" class="btn btn-primary btn-lg"><?php the_field('middle_optin_roadmap_right_button_text'); ?></a>
				
				</div>
				
			</figure>
			
		</div>

	</div>

	
</section> <!-- End imb-startpg-top-roadmap -->	


<section id="imb-startpg-testimonial" class="container-fluid">
	
	<div class="content-box">
		
		<!-- <img class="bg-smudge-image" src="/wp-content/uploads/2017/05/the-moose-smudge-200KB-700x700.png" alt=""> -->
		
		<div class="testimonial-block container">
			
			<div class="col-md-2 col-lg-2 col-sm-1 hidden-xs"></div>

			<div class="col-md-8 col-lg-8 col-sm-9 col-xs-12">

				<article class="testimonial container-fluid">
					
					<div class="image-box col-sm-3 col-md-3 col-lg-3">
						<img class="author-image img-responsive" src="<?php the_field('start_page_single_testimonial_image'); ?>" alt="">
					</div>
					<div class="text-box col-sm-9 col-md-9 col-lg-9">

						<i class="fa fa-quote-left" aria-hidden="true"></i>

						<h3><?php the_field('start_page_single_testimonial_headline'); ?></h3>

						<p>
							<?php the_field('start_page_single_testimonial_text'); ?>
						</p>

						<i class="fa fa-quote-right pull-right" aria-hidden="true"></i>

						<div class="author-info">
							<strong><!-- Sharee Moore --><?php the_field('start_page_single_testimonial_client_name'); ?></strong> | <?php the_field('start_page_single_testimonial_client_description'); ?><!-- Author & Speaker -->
						</div>
						
					</div>


				</article>
				
			</div>

			<div class="col-md-2 col-lg-2 col-sm-1 hidden-xs"></div>


		</div>

	</div>

</section> <!-- End imb-home-testimonial -->




<?php
get_footer();
