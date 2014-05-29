<?php
/**
 * Template Name: Right Sidebar Template
 */

global $wp_query;

echo View::render( 'page-right-sidebar.twig', array(
	'wp_query' => $wp_query,
	'posts'    => $wp_query->posts,
) );
