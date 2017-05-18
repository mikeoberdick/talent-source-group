<div class="container">

<div class="row">
	<div class = "col-sm-8">
		<header class="entry-header">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<?php the_content(); ?>
	</div>			

	<div class = "col-sm-4">
		<h3>Recently Posted Jobs</h3>
		<?php $custom_query_args = array(
    		'post_type' => 'jobs', 
    		'posts_per_page' => '5'
		); ?>

		<?php $custom_query = new WP_Query( $custom_query_args ); ?>
		<div class = "recentJobs">
			<?php if ( $custom_query->have_posts() ) :
    		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            
            <a href="<?php the_permalink(); ?>">
          		<?php the_title(); ?></div>
            </a>
    		
    		<?php
    		endwhile; ?>
    		<?php
    		wp_reset_postdata(); // reset the query 
			else:
    			echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
			endif;
			?>
    	</div>
    </div>

</div><!-- .row -->

</div><!-- .container -->