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


					</div>
				</div>
				<div class="social-bar">
					<div class="container">
						<div>
							<div class="wrapper">
								<div>
									<?php	echo do_shortcode('[fl_builder_insert_layout slug="footer-trio"]');?>
									</div>
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
