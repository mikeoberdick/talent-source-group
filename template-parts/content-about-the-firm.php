<div class="container about-the-firm">
	<div class="row">

		<div class = "col-sm-12">
			<header class="entry-header mb-5">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>			
	</div><!-- .row -->

	<div class="row">

		<div class = "col-sm-6">
			<h3>Who We Are</h3>
				<p><?php the_field('who_we_are'); ?></p>
			
			<h3>What We Do</h3>
				<p><?php the_field('what_we_do'); ?></p>
		</div>	

		<div id = "officePic" class = "col-sm-6">
			<img src = "<?php the_field('office_photo'); ?>">
		</div>		
	</div><!-- .row -->
</div><!-- .container -->