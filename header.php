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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<div id = "logoContainer">
	<div class = "container">
		<div class = "row">
			<div class = "col-sm-3 mt-3 headerPhone phoneFirst">
				<h5>Westchester/Fairfield County</h5>
				<p><a href = "tel:<?php the_field('fairfield_phone', 'option'); ?>"><?php the_field('fairfield_phone', 'option'); ?></a></p>
			</div>
			
			<a class = "col-sm-6 text-center" href ="<?php echo site_url(); ?>"><img id = "headerLogo" src = "<?php the_field('company_logo', 'option'); ?>" alt = "<?php echo bloginfo('name') ?>"></a>
			
			<div class = "col-sm-3 mt-3 headerPhone phoneSecond">
				<h5>New Haven/Hartford County</h5>
				<p><a href = "tel:<?php the_field('nh_phone', 'option'); ?>"><?php the_field('nh_phone', 'option'); ?></a></p>
			</div>
		</div>
	</div>
</div><!-- #logoContainer -->

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md navbar-inverse">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class = "mobileToggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
				</button>
				
				<?php 
				// Check to see how many jobs are currently posted and below conditionally show the jobs menu link if there are three or more jobs
					$job_count = wp_count_posts( 'jobs' )->publish; ?>
					
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => ($job_count >= 3 ? 'navbar-nav' : 'navbar-nav hideJobs'),
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->