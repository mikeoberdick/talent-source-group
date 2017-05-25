<?php
/**
 * Register theme scripts
 *
 * @package understrap
 */

function all_excerpts_get_more_link( $post_excerpt ) {

return $post_excerpt . ' [...]<p><a class="btn btn-primary understrap-read-more-link float-sm-right" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...', 'understrap' ) . '</a></p>';
	}
add_filter( 'wp_trim_excerpt', 'all_excerpts_get_more_link' );


function understrap_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'understrap' ) );
		if ( $categories_list && understrap_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'understrap' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'understrap' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'understrap' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'understrap' ), esc_html__( '1 Comment', 'understrap' ), esc_html__( '% Comments', 'understrap' ) );
		echo '</span>';
	}
}
