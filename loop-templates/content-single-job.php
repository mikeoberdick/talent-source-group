<?php
/**
 * Single job partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class = "row">
	<div class = "col-sm-12">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<hr>
		</header><!-- .entry-header -->
	</div>
</div><!-- .row -->
	
<div id = "jobStats" class="row">

<?php
$termID = get_field('industry');
$taxonomy = 'job-industry';
$term = get_term_by( 'id', $termID, $taxonomy );
$name = $term->name;
?>

	<div class="col-sm-3"><h4 class = "mt-3 d-inline">Industry: </h4><?php echo $name; ?></div><!-- .col-sm-3 -->
	<div class="col-sm-3"><h4 class = "mt-3 d-inline">Location: </h4><?php the_field('location'); ?></div><!-- .col-sm-3 -->
	<div class="col-sm-4"><h4 class = "mt-3 d-inline">Compensation: </h4>$<?php the_field('compensation'); ?></div><!-- .col-sm-3 -->
	<div class = "col-sm-2">
		<div>
			<button type = "button" id = "applyBtn" class = "btn btn-primary btn-lg apply" href = "#"><i class="fa fa-check" aria-hidden="true"></i> Apply</button>
		</div>
	</div>
</div>

<div id = "application">
	<?php echo do_shortcode('[ninja_form id=2]'); ?>
</div>

<div id="jobDetails">
<div class="row">

<?php if( get_field('client') ): ?>
	<div class="col-sm-12">
		<h3 class="mt-3">Client: </h3><?php the_field('client'); ?></h3>
	</div><!-- .col-sm-12 -->
<?php endif; ?>

<?php if( get_field('role') ): ?>
	<div class="col-sm-12">
		<h3 class="mt-3">Role: </h3><?php the_field('role'); ?></h3>
	</div><!-- .col-sm-12 -->
<?php endif; ?>

<?php if( get_field('qualifications') ): ?>
	<div class="col-sm-12 qualifications">
		<h3 class="mt-3">Qualifications: </h3><?php the_field('qualifications'); ?></h3>
	</div><!-- .col-sm-12 -->
<?php endif; ?>

</div><!-- .row -->
</div><!-- #jobDetails -->

</article><!-- #post-## -->