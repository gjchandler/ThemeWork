<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper foot-nav-container" id="wrapper-footer ">

	<div class="<?php echo esc_attr( $container ); ?> ">

		<div class="row">

			<div class="col-md-12">

				<footer>

					<div class="container ">
						<div class="row">

							<div id="nav-footer" class="wrapper">
								<div class="col-sm-12">
									<div>
										<nav>
											<div>

												<!-- The WordPress Menu goes here -->

												<?php wp_nav_menu(
													array(
														'menu' 			=>  '3',
														'container_class' => '',
														'container_id'    => 'navFooter',
														'menu_class'      => 'card-columns',
														'fallback_cb'     => '',
														'menu_id'         => 'footer-menu',
													)
													); ?>


												</nav>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="social-bar">
					<div class="container">
						<div>
							<div class="wrapper">
								<div>
							<!--
									  <ul class="social">
										  <li><a href="#" class="twitter" title="Follow us on Twitter"></a></li>
										  <li><a href="#" class="facebook" title="Find us on Facebook"></a></li>
										  <li><a href="#" class="linkedin" title="Connect with us on LinkedId"></a></li>
										  <li><a href="#" class="rss" title="Subscribe to our RSS"></a></li>
										  <li><a href="#" class="google" title="Google Plus"></a></li>
										</ul>-->
									</div>
									<div> <span class="copywrite">© <?php echo date(Y) ?> AgriSecure</span>
									<br>
									 <span class="legalLinks"><a href="/terms-of-use">Terms of Use</a> | <a href="/privacy-policy">Privacy Policy</a></span> </div>
								</div>
							</div>
						</div>
					</div>
				</footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<script src="/wp-content/themes/agri/js/custom.js"></script>

<?php wp_footer(); ?>

</body>

</html>

