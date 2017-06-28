<div class="container">

<div class="row">
	<div class="col-sm-12">
		<h1 class = "sectionHeader">Seeking Your Next Opportunity?</h1>
	</div><!-- .col-sm-12 -->
</div><!-- .row -->

<div class="row">
    <div class="col-sm-12 col-md-6">
		<?php the_content(); ?>
    	<a class = 'btn btn-primary btn-large col-md-6 offset-md-3' href = '<?php echo bloginfo('url'); ?>/current-jobs'>View Current Jobs</a>
	</div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
    <?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "Talent Source Group candidates">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->
</div>

</div><!-- .container -->