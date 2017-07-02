<div class="container">

<div class="row">
	<div class="col-sm-12">
		<h1 class = "sectionHeader">Seeking Your Next Opportunity?</h1>
	</div><!-- .col-sm-12 -->
</div><!-- .row -->

<div class="row">
    <div class="col-sm-12 col-md-6">
		<?php the_content(); ?>
		<?php 
				// Check to see how many jobs are currently posted and below conditionally show the jobs menu link if there are three or more jobs
				$job_count = wp_count_posts( 'jobs' )->publish;

				if ($job_count >= 3) { ?>
					<div class="jobLink mt-3">
						<a class = 'btn btn-primary btn-lg col-md-6 offset-md-3' href = '<?php echo bloginfo('url'); ?>/current-jobs'>View Current Jobs</a>
					</div><!-- .jobLink -->
				<?php } ?>
	</div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
    <?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "<?php echo $image['alt']; ?>" title = "<?php echo $image['title']; ?>">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->
</div>

</div><!-- .container -->