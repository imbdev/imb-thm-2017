<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>
		<div class="footer-container container-fluid">

			<footer id="footer-main" class="footer-main">

				<div class="row">

					<article class="col-sm-8 col-md-8 col-lg-8">

						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 
								if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
									return;
								}

								dynamic_sidebar( 'footer-sidebar-1' ); 

							?>

					   	</aside>

				
					</article>

					<article class="col-sm-2 col-md-2 col-lg-2">

						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 
								if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
									return;
								}

								dynamic_sidebar( 'footer-sidebar-2' ); 

							?>

					   	</aside>

					
					</article>

					<article class="col-sm-2 col-md-2 col-lg-2">

						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 
								if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
									return;
								}

								dynamic_sidebar( 'footer-sidebar-2' ); 

							?>

					   	</aside>

					</article>

				</div>


				<div class="row">
					<div id="copyright" class="copyright col-sm-12 col-md-12 col-lg-12">
						<!-- <p class="text-center">All Rights Reserved TianaGustafson.com &copy; <?php echo date('Y'); ?>. Development by <a href="www.htmlfivedev.com">HTMLfiveDev.com</a></p> -->
						<img src="/wp-content/uploads/2017/04/logo-400x57.png" alt="">
						<h4>COPYRIGHT INSPIREDMOMMYBOSS.COM</h4>
						<h4>
							<a href="http://tianagustafson.com/privacy-policy/">PRIVACY POLICY</a> | 
							<a href="http://tianagustafson.com/terms-of-service/">TERMS</a> | 
							<a href="http://tianagustafson.com/earnings-disclaimer/">DISCLAIMER</a> | 
							<a href="/contact/">CONTACT</a>
						</h4>
					</div>
				</div>

			</footer>
		</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<?php wp_footer(); ?>
</body>
</html>