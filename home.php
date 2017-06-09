<?php
/**
 * The blog template file.
 *
 *
 * @package understrap
 */

get_header(); ?>

<?php

	if ( has_post_thumbnail() ) { ?>
		
	<header class="entry-header" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class = "titleWrapper">
		<?php single_post_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
		
		<?php }
		else { ?>

	    <header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/header_bg.jpg';?>)">
	    	<div class = "titleWrapper">
			<?php single_post_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
			</div>
		</header><!-- .entry-header -->
		
		<?php } ?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="col-md-8 content-area" id="primary">

				<main class="site-main" id="main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

			<?php get_sidebar( 'right' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>