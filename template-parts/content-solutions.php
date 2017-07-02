<div class="container">
	
	<div class="row">
		<div class = "col-sm-12">
			<h1 class = "sectionHeader">Top-Tier Accounting and Finance Talent</h1>
		</div>
	</div>

	<div class="row">
    <div class="col-sm-12 col-md-6">
	
	<?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "<?php echo $image['alt']; ?>" title = "<?php echo $image['title']; ?>">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
		<?php the_field('content'); ?>
    </div><!-- .col-md-6 -->
</div>
</div><!-- .container -->