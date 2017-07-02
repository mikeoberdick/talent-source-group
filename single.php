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

			<main class="site-main col-sm-12 col-md-8" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<?php get_sidebar( 'right' ); ?>
			
		</div><!-- .row -->

			<hr>
				<nav class="col-sm-12 mt-3 mb-3 navigation post-navigation">
					<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>
						<div class="nav-links row">
							<div class="col-md-6">
								<?php

									if ( get_previous_post_link() ) {
										previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-arrow-left" aria-hidden="true"></i></i>&nbsp;%title', 'Previous post link', 'understrap' ) );
									} ?>
								</div><!-- .col-md-6 -->
								<div class="col-md-6">
									<?php

									if ( get_next_post_link() ) {
										next_post_link( '<span class="nav-next">%link</span>',     _x( '%title&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></i>', 'Next post link', 'understrap' ) );
									}  ?>
								</div><!-- .col-md-6 -->
								
						</div><!-- .nav-links -->
				</nav>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- wrapper -->

<?php get_footer(); ?>