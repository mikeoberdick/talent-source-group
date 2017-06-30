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
						<h4>Current Opportunities</h4>
						<p>You’ve worked hard to get where you are today, but to get where you want to go tomorrow, you need the right connections, perspective and approach to your executive career.  We can help.</p>
						<a class = 'btn btn-primary btn-large col-md-6 offset-md-3' href = '<?php echo bloginfo('url'); ?>/current-jobs'>View Current Jobs</a>
					</div><!-- .jobLink -->
				<?php } ?>
	</div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
    <?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "Talent Source Group candidates">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->
</div>

</div><!-- .container -->