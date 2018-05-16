<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php 
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

<?php if (has_post_thumbnail()){ ?>

<div class="fi-wrap-outer">



	<div class="fi-wrap" style="background-image:url(<?php echo $image; ?>)">

		<div class="container">

			<div class="row">

				<div class="col-12 fi-inner">

					

					
					<div class="banner <?php echo do_shortcode('[ct id="ct_Banner_Col_checkbox_2925" property="title | description | value | link | image"]');  ?>">

						<?php  echo get_post_meta( get_the_ID(), 'ct_Banner_Top_editor_0bd6', true );  ?>

						<?php echo do_shortcode('[ct id="ct_Banner_Bot_editor_c858" property="title | description | value | link | image"]'); ?>

						<?php 
					};
					?>

				</div>

			</div>

		</div>

	</div>	

</div>

</div>

<div class="wrapper" id="page-wrapper">




	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
