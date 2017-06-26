<div class="container">

<div class="row">
	<div class="col-sm-12">
		<h1 class = "sectionHeader">Looking to Get Hired?</h1>
	</div><!-- .col-sm-12 -->
</div><!-- .row -->

<div class="row">
    <div class="col-sm-12 col-md-6">
		<?php the_content(); ?>
    </div><!-- .col-md-6 -->

    <div class="col-sm-12 col-md-6">
    <?php $image = get_field('image'); ?>
		<img src = "<?php echo $image['url']; ?>" alt = "Talent Source Group candidates">
		<p class = "imageCaption mt-2"><?php echo $image['caption']; ?></p>
    </div><!-- .col-md-6 -->
</div>

</div><!-- .container -->