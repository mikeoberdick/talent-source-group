<div class="container">
  <div class="row">
    <div class = "col-sm-12">
      <div class = "page-header">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
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

$custom_query = new WP_Query( $custom_query_args );

if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <div class = "row">
          <div class = "col-sm-12">
            <article <?php post_class(); ?>>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </article>
          </div>
      </div>

    <?php
    endwhile;
    ?>

    <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
      <nav class="prev-next-posts row">
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