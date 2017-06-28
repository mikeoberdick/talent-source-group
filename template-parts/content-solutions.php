<div class="container">
	
	<div class="row">
		<div class = "col-sm-12">
			<h1 class = "sectionHeader">Top-Tier Accounting and Finance Talent</h1>
		</div>
	</div>

	<div class="row">
    <div class="col-sm-12 col-md-6">
	
	<?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "Solutions for a Professional Workforce">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
		<?php the_field('content'); ?>
    </div><!-- .col-md-6 -->
</div>
</div><!-- .container -->
<?php /*
<div class="row solutionBlurbs mt-4">
	<div class="col-sm-6 text-center">
		<i class="fa fa-handshake-o mb-3" aria-hidden="true"></i>
		<h3>Permanent Placement</h3>
		<p><?php the_field('pp_blurb', 9); ?></p>
	</div><!-- .col-sm-6 -->
	<div class="col-sm-6 text-center">
		<i class="fa fa-file-text mb-3" aria-hidden="true"></i>
		<h3>Contract or Contract-to-Hire</h3>
		<p><?php the_field('cth_blurb', 9); ?></p>
	</div><!-- .col-sm-6 -->
</div><!-- .row --> 

*/ ?>


