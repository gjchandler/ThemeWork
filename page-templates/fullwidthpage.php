<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


	<?php 
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>

	<div class="fi-wrap" style="background-image:url(<?php echo $image; ?>)">
		
		
<?php 
/*$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
echo $image;

echo "hi there";

$custom = get_post_custom();

foreach($custom as $key => $value) {
     echo $key.': '.$value.'<br />';
}

if(isset($custom['price'])) {
    echo 'Price: '.$custom['price'];
}*/
?>

	</div>

<div class="wrapper" id="full-width-page-wrapper">


	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

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

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
