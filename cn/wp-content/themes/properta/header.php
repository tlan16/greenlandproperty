<?php

$locations = get_nav_menu_locations();

$main_menu_settings = array(
	'theme_location' 	=> 'main',
	'fallback_cb'    	=> false,
	'menu_class'     	=> 'nav',
	'echo'           	=> FALSE,
	'container_class'	=> 'nav-collapse collapse',
);

if ( ! empty( $locations['main'] ) && $locations['main'] == 0 ) {
	$main_menu_settings['menu'] = 'Main';
}

$anonymous_menu_settings = array(
	'theme_location' => 'anonymous',
	'menu_class'     => 'nav nav-pills',
	'fallback_cb'    => false,
	'echo'           => FALSE
);

if ( ! empty( $locations['anonymous'] ) && $locations['anonymous'] == 0 ) {
	$anonymous_menu_settings['menu'] = 'Anonymous';
}

$authenticated_menu_settings = array(
	'theme_location' => 'authenticated',
	'menu_class'     => 'nav nav-pills',
	'fallback_cb'    => false,
	'echo'           => FALSE
);

if ( ! empty( $locations['authenticated'] ) && $locations['authenticated'] == 0 ) {
	$authenticated_menu_settings['menu'] = 'Authenticated';
}

echo View::render( 'helpers/header.twig', array(
	'main_menu'          => wp_nav_menu( $main_menu_settings ),
	'anonymous_menu'     => wp_nav_menu( $anonymous_menu_settings ),
	'authenticated_menu' => wp_nav_menu( $authenticated_menu_settings ),
) );

