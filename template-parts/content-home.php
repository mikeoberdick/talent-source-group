<div class="container-fluid heroSection" style = "background-image: url('<?php the_field('hero_image'); ?>')">
	<div class = "row opacityLayer">
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-12 hpCallout">
						<h2 class = "mb-5 text-center pl-5 pr-5 hpCTA"><?php the_field('homepage_cta'); ?></h2>
				</div>
			</div>
				
				<div class ="row hpButtons">
					<div class = "col-sm-6 text-center">
						<a href = "<?php echo bloginfo('url'); ?>/candidates"><button type="button" class="btn btn-primary btn-lg">Get A Job</button></a>
					</div>
					<div class = "col-sm-6 text-center">
						<a href = "<?php echo bloginfo('url'); ?>/employers"><button type="button" class="btn btn-primary btn-lg">List A Job</button></a>
					</div>
				</div><!-- .row -->

		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div class = "container-fluid solutions">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12 ">
				<h3 class = "sectionHeader">Solutions</h3>
			</div><!-- .col-sm-12 -->
				<div class="col-sm-6 mt-5 mb-3">
					<i class="fa fa-handshake-o mb-3" aria-hidden="true"></i>
					<h3>Permanent Placement</h3>
				</div><!-- .col-sm-6 -->
				<div class="col-sm-6 mt-5 mb-3">
					<i class="fa fa-file-text mb-3" aria-hidden="true"></i>
					<h3>Contract or Contract-to-Hire</h3>
				</div><!-- .col-sm-6 -->
			<div class="col-sm-12">
				<p><?php the_field('solutions'); ?></p>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<div class = "container-fluid practiceAreas">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class = "sectionHeader">Representative Areas</h3>
			</div><!-- .col-sm-12 -->
			
			<div class="col-sm-6 mt-5 mb-3">
				<?php the_field('practice_areas_left'); ?>
			</div><!-- .col-sm-6 -->

			<div class="col-sm-6  mt-5 mb-3">
				<?php the_field('practice_areas_right'); ?>
			</div><!-- .col-sm-6 -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<div class="container-fluid" id="ctaSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 content">
				<h3>Let's Talk</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sunt ea minima!</p>
						<a class = "btn btn-primary btn-large" href="<?php echo bloginfo('url'); ?>/contact">Contact Talent Source Group</a>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #ctaSection.container-fluid -->

