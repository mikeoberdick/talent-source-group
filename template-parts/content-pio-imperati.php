<div class="container pio-imperati">
<div class="row">
	<div class="col-sm-12">
		<h1 class = "sectionHeader">Pio Imperati | Founder of Talent Source Group</h1>
	</div><!-- .col-sm-12 -->
</div><!-- .row -->
	<div class="row">

		<div id = "bioPic" class = "col-sm-4">
			<?php $image = get_field('pio_picture'); ?>
			<img src = "<?php echo $image['url']; ?>" alt = "<?php echo $image['alt']; ?>" title = "<?php echo $image['title']; ?>">
			<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
		</div>

		<div class = "col-sm-8">
			<p><?php the_field('bio'); ?></p>
			<div class = "text-right">
					<img class = "mt-3" src = "<?php echo get_stylesheet_directory_uri() . '/img/pio_signature.jpg' ?>">
					<div class="mt-2"><a href = "tel:<?php the_field('nh_phone', 'option'); ?>"><i class="mr-2 fa fa-phone" aria-hidden="true"></i><?php the_field('nh_phone', 'option'); ?></a>
					</div>
					<div><a href = "mailto:<?php the_field('email', 'option'); ?>"><i class="mr-2 fa fa-envelope" aria-hidden="true"></i><?php the_field('email', 'option'); ?></a>
					</div>
			</div>
		</div>

	</div><!-- .row -->

</div><!-- .container -->