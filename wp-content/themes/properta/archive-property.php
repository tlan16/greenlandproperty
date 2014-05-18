<?php

$wp_query = aviators_properties_filter( TRUE );

echo View::render( 'archive-property.twig', array(
	'wp_query'   => $wp_query,
	'properties' => _aviators_properties_prepare( $wp_query ),
) );
