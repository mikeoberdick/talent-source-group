<?php
/**
 * Single job partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class = "row">
	<div class = "col-sm-9">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
	<hr>

<div class = "col-sm-3">
		<div>
			<button type = "button" id = "applyBtn" class = "btn btn-primary btn-lg" href = "#" data-featherlight="#application"><i class="fa fa-check" aria-hidden="true"></i> Apply</button>
		</div>
</div>

</div><!-- .row -->

<div id = "application" class = "lightbox">
	<h3>Apply for <?php the_title(); ?></h3>
		<?php echo do_shortcode('[ninja_form id=2]'); ?>
</div>


	<div class="entry-content">
		<h5 class = "mt-3">Description</h5>
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->