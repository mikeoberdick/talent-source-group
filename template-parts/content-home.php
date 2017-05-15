<div class="container heroSection mb-5" style = "background-image: url('<?php the_field('hero_image'); ?>')">
	<div id = "opacityLayer">
		<div class="row">
			<div id = "hpCTA" class = "col-sm-12">
				<h1 class = "mt-5 mb-5 text-center"><?php the_field('homepage_CTA'); ?></h1>
			</div>		
		</div><!-- .row -->
		<div class="row hpButtons">
			<div class = "col-sm-4">
				<a href = "<?php echo bloginfo('url'); ?>/candidates"><button type="button" class="btn btn-primary btn-lg">Get A Job</button></a>
			</div>
			<div class = "col-sm-4">
				<a href = "<?php echo bloginfo('url'); ?>/employers"><button type="button" class="btn btn-primary btn-lg">List A Job</button></a>
			</div>
		</div><!-- .row -->
	</div><!-- #opacityLayer -->
</div><!-- .container-fluid -->