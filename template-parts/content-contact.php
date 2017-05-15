<div class="container about-the-firm">
	<div class="row">
		<div class = "col-sm-12">
			<header class="entry-header">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>			
	</div><!-- .row -->

	<div class="row">
		<div class = "col-sm-6 contactInfo">
			<h3>Phone</h3>
				<a href = "tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
			<h3 class = "mt-3">Email</h3>
				<a href = "mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
			<h3 class = "mt-3">Address</h3>
				<?php the_field('street_address_1', 'option'); ?><br/><?php the_field('street_address_2', 'option'); ?>
			<h3 class = "mt-3">Map</h3>
				<?php the_field('map', 'option'); ?>
		</div>	

		<div class = "col-sm-6">
			<h3>Get In Touch</h3>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div>		
	</div><!-- .row -->
</div><!-- .container -->