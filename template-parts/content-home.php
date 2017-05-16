<div class="container heroSection mb-5" style = "background-image: url('<?php the_field('hero_image'); ?>')">
	<div class="row">
			<div class = "opacityLayer">
				<div class = "col-sm-12 mt-5">
					<h2 class = "mt-5 mb-5 text-center pl-5 pr-5 hpCTA"><?php the_field('homepage_cta'); ?></h2>
				</div>
				<div class="row hpButtons">
			<div class = "col-sm-4 offset-sm-1">
				<a href = "<?php echo bloginfo('url'); ?>/candidates"><button type="button" class="btn btn-primary btn-lg">Get A Job</button></a>
			</div>
			<div class = "col-sm-4">
				<a href = "<?php echo bloginfo('url'); ?>/employers"><button type="button" class="btn btn-primary btn-lg">List A Job</button></a>
			</div>
		</div><!-- .row -->
			</div><!-- #opacityLayer -->	
		</div><!-- .row -->
</div><!-- .container-fluid -->