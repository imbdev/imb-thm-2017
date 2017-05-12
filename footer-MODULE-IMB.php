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

			<footer id="footer-main" class="footer-main container">

				<div class="row">

					<article class="col-sm-6 col-md-6 col-lg-6">

						<aside id="text-1" class="widget-footer-container widget_text">

							<?php 

								if ( is_active_sidebar( 'footer-sidebar-1' ) ) {
									
									dynamic_sidebar( 'footer-sidebar-1' ); 

								}


							?>

					   	</aside>

				
					</article>

					<article class="col-sm-3 col-md-3 col-lg-3">

						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 

								if ( is_active_sidebar( 'footer-sidebar-2' ) ) {
									
									dynamic_sidebar( 'footer-sidebar-2' ); 
								}


							?>

					   	</aside>

					
					</article>

					<article class="col-sm-3 col-md-3 col-lg-3">

						<aside id="text-3" class="widget-footer-container widget_text">

							<?php 

								if ( is_active_sidebar( 'footer-sidebar-3' ) ) {
									
									dynamic_sidebar( 'footer-sidebar-3' ); 
								}


							?>

					   	</aside>

					</article>

				</div> <!-- ROW ENDS -->


				<div class="row">
					
					<article class="col-sm-12 col-md-12 col-lg-12">

						<aside id="text-4" class="widget-footer-container widget_text">

							<?php 

								if ( is_active_sidebar( 'page-bottom' ) ) {
									
									dynamic_sidebar( 'page-bottom' ); 
									
								}


							?>

					   	</aside>

					</article>


				</div> <!-- ROW ENDS -->

			</footer>
		</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<?php wp_footer(); ?>
</body>
</html>