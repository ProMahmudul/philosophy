<?php

/**
 * Template Name: Tax Query Example
 */

$philosophy_query_args = array(
	'post_type'      => 'book',
	'posts_per_page' => -1,
	'tax_query'      => array(
		array(
			'taxonomy' => 'language',
			'field'    => 'slug',
			'terms'    => array( 'english', 'bangla' ),
		),
	),
);

$philosophy_posts = new WP_Query( $philosophy_query_args );

while ( $philosophy_posts->have_posts() ) {
	$philosophy_posts->the_post();
	the_title();
	echo '<br>';
}

wp_reset_query();
