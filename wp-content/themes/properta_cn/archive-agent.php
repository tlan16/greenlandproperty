<?php

echo View::render( 'archive-agent.twig', array(
	'wp_query'       => $wp_query,
	'posts'          => $wp_query->posts,
	'posts_per_page' => - 1
) );
