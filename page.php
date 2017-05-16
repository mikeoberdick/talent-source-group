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

<div class="wrapper" id="page-wrapper">

<div id = "sideTabs">
	<a id = "getHired" href = "<?php echo bloginfo('url'); ?>/candidates"><i class="fa fa-arrow-left" aria-hidden="true"></i> Get Hired</a>
	<a id = "hireSomeone" href = "<?php echo bloginfo('url'); ?>/employers"><i class="fa fa-arrow-left" aria-hidden="true"></i> Hire Someone</a>
</div>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php

	if ( is_page( 'homepage' ) ) {
		get_template_part( 'template-parts/content', 'home' );
	}

	else if ( is_page( 'pio-imperati' ) ) {
		get_template_part( 'template-parts/content', 'pio-imperati' );
	}

	else if ( is_page( 'about-the-firm' ) ) {
		get_template_part( 'template-parts/content', 'about-the-firm' );
	}

	else if ( is_page ( 'current-jobs' ) ) {
		get_template_part( 'template-parts/content', 'jobs' );
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
