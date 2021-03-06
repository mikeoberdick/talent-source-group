<div class="container">

<div class="row">
  <div class="col-sm-12">
    <h1 class = "sectionHeader">TSG Featured Connecticut Jobs</h1>

<?php if( the_content() ) : ?>
   <?php the_content(); ?>
<?php endif; ?>

  </div><!-- /.col-sm-12 -->
</div>

<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$custom_query_args = array(
    'post_type' => 'jobs', 
    'posts_per_page' => '10',
    'paged' => $paged,
);

$custom_query = new WP_Query( $custom_query_args ); ?>
<div id = "currentJobs" class = "row mt-3 mb-5">
    <div class = "col-sm-12">
      <article <?php post_class(); ?>>

<?php if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            
            <a class = "jobPosting row" href="<?php the_permalink(); ?>">
            
              <div class = "col-sm-2"><?php echo get_the_date( 'm/d/Y' ); ?></div>
              <div class = "col-sm-4"><h5><?php the_title(); ?></h5></div>
              <div class = "col-sm-3"><?php the_field('location'); ?></div>

              <?php
                $termID = get_field('industry');
                $taxonomy = 'job-industry';
                $term = get_term_by( 'id', $termID, $taxonomy );
                $name = $term->name;
              ?>
              <div class = "col-sm-3"><?php echo $name; ?></div>
            </a>
    <?php
    endwhile;
    ?>
    </div>
    </div>
    </article>

    <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
      <nav class="prev-next-posts row mb-5">
            <div id = "newerPosts" class="prev-posts-link col-xs-6 text-left">
                <?php echo get_next_posts_link( '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Previous Page', $custom_query->max_num_pages ); ?>
            </div>
            <div id = "olderPosts" class="next-posts-link col-xs-6 text-right">
                <?php echo get_previous_posts_link( 'Next Page <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>' ); ?>
            </div>
        </nav>        
    <?php endif; ?>

<?php
    wp_reset_postdata(); // reset the query 
else:
    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>