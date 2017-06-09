<div class="container about-the-firm">
	<div class="row">
		<div class = "col-sm-6 contactInfo">
			<h3>Phone</h3>
				<div class = "mb-2"><strong>Westchester/Fairfield County:</strong> <a href = "tel:<?php the_field('fairfield_phone', 'option'); ?>"><?php the_field('fairfield_phone', 'option'); ?></a></div>
				<div><strong>New Haven/Hartford County:</strong> <a href = "tel:<?php the_field('nh_phone', 'option'); ?>"><?php the_field('nh_phone', 'option'); ?></a></div>
			<h3 class = "mt-3">Email</h3>
				<a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
			<h3 class = "mt-3">Address</h3>
				<?php the_field('street_address_1', 'option'); ?><br/><?php the_field('street_address_2', 'option'); ?>
			<h3 class = "mt-3">Map</h3>
				<?php
				$location = get_field('map', 'option');
					if( !empty($location) ):
				?>
				<div class="acf-map">
 					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
				</div>	
		<div class = "col-sm-6">
			<h3>Get In Touch</h3>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div>		
	</div><!-- .row -->
</div><!-- .container -->