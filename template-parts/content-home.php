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
						<a href = "<?php echo bloginfo('url'); ?>/candidates"><button type="button" class="btn btn-primary btn-lg">CANDIDATES</button></a>
					</div>
					<div class = "col-sm-6 text-center">
						<a href = "<?php echo bloginfo('url'); ?>/employers"><button type="button" class="btn btn-primary btn-lg">EMPLOYERS</button></a>
					</div>
				</div><!-- .row -->

		</div><!-- .container -->
	</div><!-- #opacityLayer -->	
</div><!-- .container-fluid -->

<div class = "container-fluid hpSection" id = "solutions">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12 ">
				<h3 class = "sectionHeader">Solutions</h3>
			</div><!-- .col-sm-12 -->
				<div class="col-sm-6 mt-5 mb-3">
					<i class="fa fa-handshake-o mb-3" aria-hidden="true"></i>
					<h3>Permanent Placement</h3>
					<p><?php the_field('pp_blurb'); ?></p>
				</div><!-- .col-sm-6 -->
				<div class="col-sm-6 mt-5 mb-3">
					<i class="fa fa-file-text mb-3" aria-hidden="true"></i>
					<h3>Contract or Contract-to-Hire</h3>
					<p><?php the_field('cth_blurb'); ?></p>
				</div><!-- .col-sm-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<div class = "container-fluid hpSection" id = "representativeAreas">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class = "sectionHeader mb-5">Representative Areas</h3>
			</div><!-- .col-sm-12 -->
			
			<div class="col-sm-6 mb-3">
				<?php the_field('practice_areas_left'); ?>
			</div><!-- .col-sm-6 -->

			<div class="col-sm-6 mb-3">
				<?php the_field('practice_areas_right'); ?>
			</div><!-- .col-sm-6 -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

<div class="container-fluid hpSection" id="linkedIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 content">
				<h3 class = "sectionHeader mb-5">Pio Imperati</h3>
			</div><!-- .col-sm-12 -->

			<div class="col-sm-6">
				<h2>"Our professional networks are strong, our experience is proven and our results are unmatched."</h2>
			</div>

			<div class="col-sm-6">
				<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/imperati/" data-format="inline" data-related="false"></script>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #ctaSection.container-fluid -->

<div class="container-fluid hpSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class = "sectionHeader mb-5">Let's Connect</h3>
			</div><!-- .col-sm-12 -->
		</div>
				
			<div class="row" id = "ctaSection">
				<div class = "col-sm-8">
					<h5>Whether you are looking to acquire accounting or finance talent or you are seeking your next opportunity, we are here to help. Let's chat.</h5>
				</div>
					
				<div class = "col-sm-4">
					<a class = "btn btn-primary btn-large" href="<?php echo bloginfo('url'); ?>/contact">Get In Touch</a>		
				</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #ctaSection.container-fluid -->