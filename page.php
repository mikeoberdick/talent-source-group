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

?>

<?php

if ( !is_page('homepage' ) ) {

	if ( has_post_thumbnail() ) { ?>
		
	<header class="entry-header" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
		
		<?php }
		else { ?>

	    <header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/header_bg.jpg';?>)">
	    	<div class = "titleWrapper">
			<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
			</div>
		</header><!-- .entry-header -->
		
		<?php } 
	} ?>

<div class="wrapper" id="page-wrapper">

<div id = "sideTabs">
	<a id = "getHired" href = "<?php echo bloginfo('url'); ?>/candidates"><i class="fa fa-arrow-left" aria-hidden="true"></i> Candidates</a>
	<a id = "hireSomeone" href = "<?php echo bloginfo('url'); ?>/employers"><i class="fa fa-arrow-left" aria-hidden="true"></i> Employers</a>
</div>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php

	if ( is_page( 'homepage' ) ) {
		get_template_part( 'template-parts/content', 'home' );
	}

	else if ( is_page( 'about-the-firm' ) ) {
		get_template_part( 'template-parts/content', 'about-the-firm' );
	}

	else if ( is_page( 'pio-imperati' ) ) {
		get_template_part( 'template-parts/content', 'pio-imperati' );
	}

	else if ( is_page( 'solutions' ) ) {
		get_template_part( 'template-parts/content', 'solutions' );
	}

	else if ( is_page( 'representative-areas' ) ) {
		get_template_part( 'template-parts/content', 'representative_areas' );
	}

	else if ( is_page ( 'current-jobs' ) ) {
		get_template_part( 'template-parts/content', 'jobs' );
	}

	else if ( is_page ( 'employers' ) ) {
		get_template_part( 'template-parts/content', 'employers' );
	}

	else if ( is_page ( 'candidates' ) ) {
		get_template_part( 'template-parts/content', 'candidates' );
	}

	else if ( is_page( 'contact' ) ) {
		get_template_part( 'template-parts/content', 'contact' );
	}

	

	else {
	get_template_part( 'loop-templates/content', 'page' );
	}

	?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
	comments_template();
	endif;
	?>

	<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<?php get_footer(); ?>
