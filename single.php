<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<div class="row mt-3 mb-3">
							<div class="col-md-12">
								<nav class="navigation post-navigation">
									<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
									<div class="nav-links">
										<?php

											if ( get_previous_post_link() ) {
												previous_post_link( '<span class="nav-previous btn btn-primary btn-large float-sm-left">%link</span>', _x( '<i class="fa fa-arrow-left" aria-hidden="true"></i></i>&nbsp;%title', 'Previous post link', 'understrap' ) );
											}
											if ( get_next_post_link() ) {
												next_post_link( '<span class="nav-next btn btn-primary btn-large float-sm-right">%link</span>',     _x( '%title&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></i>', 'Next post link', 'understrap' ) );
											}
										?>
									</div><!-- .nav-links -->
								</nav><!-- .navigation -->
							</div>
						</div>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
