<div class="container solutions">
	<div class="row">
	
		<div class="col-sm-6 mt-5 mb-3 text-center">
			<i class="fa fa-handshake-o mb-3 solutionIcon" aria-hidden="true"></i>
			<h3>Permanent Placement</h3>
			<p><?php the_field('pp_blurb', 9); ?></p>
		</div><!-- .col-sm-6 -->
		
		<div class="col-sm-6 mt-5 mb-3 text-center">
			<i class="fa fa-file-text mb-3 solutionIcon" aria-hidden="true"></i>
			<h3>Contract or Contract-to-Hire</h3>
			<p><?php the_field('cth_blurb', 9); ?></p>
		</div><!-- .col-sm-6 -->

		<div class = "col-sm-12">
			<p><?php the_content(); ?></p>
		</div>			
	</div><!-- .row -->
</div><!-- .container -->