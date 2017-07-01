<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta mb-3">

			<small>Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> in <?php the_category( ', ' ); ?></small>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail($post->ID, 'large', array('class' => 'mb-3 mr-3 float-left') ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

<!-- 		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
 -->
	</div><!-- .entry-content -->

</article><!-- #post-## -->