<div class="container pio-imperati">

<div class="row">
	<div class = "col-sm-12">
		<header class="entry-header">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>			
</div><!-- .row -->

	<div class="row">
		<div class = "col-sm-8">
			<h3>Secondary Header</h3>
			<p><?php the_field('bio'); ?></p>
		</div>
		<div id = "bioPic" class = "col-sm-4">
			<img src = "<?php the_field('pio_picture'); ?>">
		</div>
	</div><!-- .row -->

</div><!-- .container -->