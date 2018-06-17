<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111107542-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111107542-3');
</script>

</head>

<body <?php body_class(); ?>>

	<div class="hfeed site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

			<div class="container">
				<div class="row flex-row-reverse">


					<!-- Search Function
					<div class="col-sm-12 col-md-3 col-lg-3 search-col d-none d-md-block">
						<div class="input-group stylish-input-group search-col-inner">   -->
							<!-- <input type="text" class="form-control"  placeholder="Search" >
							<span class="input-group-addon">
								<button type="submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</span> --><!-- Continue search function, ingnore previous comment

<?php get_search_form() ?>
						</div>
					</div>-->

				</div>
			</div>

			<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

			<nav class="navbar navbar-expand-lg">
				<div class="navbar container"



				<?php if ( 'container' == $container ) : ?>
					<div class="container" >
					<?php endif; ?>


					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>




					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<div id="navbarNavDropdown" class="navbar-collapse collapse flex-row-reverse">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse-old navbar-collapse-old flex-row-reverse',
							'container_id'    => 'navbarNavDropdown-old',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
						);

					echo '
<div class="col-sm-12 col-md-3 col-lg-3 search-col d-xs-flex d-sm-flex d-md-none d-lg-none">
						<div class="input-group stylish-input-group search-col-inner">
							<input type="text" class="form-control"  placeholder="Search" >
							<span class="input-group-addon">
								<button type="submit">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</span>
						</div>
					</div>
					';


						 ?>
						 </div>




						<?php if ( 'container' == $container ) : ?>
						</div><!-- .container -->
					<?php endif; ?>
				</div>
				</nav><!-- .site-navigation -->

			</div><!-- #wrapper-navbar end -->
