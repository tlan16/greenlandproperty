<?php
/**
 * Template Name: Fullwidth Template
 */

global $wp_query;

echo View::render( 'page-fullwidth.twig', array(
	'wp_query' => $wp_query,
	'posts'    => $wp_query->posts,
) );
