<?php

require_once get_template_directory() . '/aviators/bootstrap.php';
require_once get_template_directory() . '/settings/customization.php';

/*****************************************************************
 * Misc
 *****************************************************************/

if ( ! session_id() ) {
	add_action( 'init', 'session_start' );
}

/**
 * AFTER_THEME_SETUP
 */
function aviators_theme_setup() {
	load_theme_textdomain( 'aviators', get_template_directory() . '/languages' );

	add_editor_style();
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	add_filter( 'widget_text', 'do_shortcode' );
}

add_action( 'after_setup_theme', 'aviators_theme_setup' );

/**
 * WP_ENQUEUE_SCRIPTS
 */
function aviators_load_styles() {
	if ( ! is_admin() ) {
		wp_register_style( 'font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' );
		wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap/css/bootstrap.min.css' );
		wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/assets/libraries/bootstrap/css/bootstrap-responsive.min.css' );
		wp_register_style( 'pictopro-normal', get_template_directory_uri() . '/assets/icons/pictopro-normal/style.css' );
		wp_register_style( 'pictopro-outline', get_template_directory_uri() . '/assets/icons/pictopro-outline/style.css' );
		wp_register_style( 'justvector-web-font', get_template_directory_uri() . '/assets/icons/justvector-web-font/stylesheet.css' );
		wp_register_style( 'chosen', get_template_directory_uri() . '/assets/libraries/chosen/chosen.css' );
		wp_register_style( 'bxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css' );
		wp_register_style( 'prettyphoto', get_template_directory_uri() . '/assets/libraries/prettyphoto/css/prettyPhoto.css' );
		wp_register_style( 'style', get_stylesheet_directory_uri(). '/style.css' );

		if (get_theme_mod( 'general_primary_color' ) != "" || get_theme_mod( 'general_secondary_color' ) != "") {
			wp_register_style( 'aviators', get_template_directory_uri() . '/assets/css/properta-custom.css' );
		} else {
			wp_register_style( 'aviators', get_template_directory_uri() . '/assets/css/properta.css' );
		}

		wp_enqueue_style( 'font' );
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'bootstrap-responsive' );
		wp_enqueue_style( 'pictopro-normal' );
		wp_enqueue_style( 'pictopro-outline' );
		wp_enqueue_style( 'justvector-web-font' );
		wp_enqueue_style( 'chosen' );
		wp_enqueue_style( 'aviators' );
		wp_enqueue_style( 'bxslider' );
		wp_enqueue_style( 'prettyphoto' );
		wp_enqueue_style( 'style' );

		wp_register_script( 'googlemaps3', 'http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true&libraries=places', array( 'jquery' ), '', true );
		wp_register_script( 'infobox', get_template_directory_uri() . '/assets/js/gmap3.infobox.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'retina', get_template_directory_uri() . '/assets/js/retina.js', array( 'jquery' ), '', true );
		wp_register_script( 'clusterer', get_template_directory_uri() . '/assets/js/gmap3.clusterer.js', array( 'jquery' ), '', true );
		wp_register_script( 'carousel', get_template_directory_uri() . '/assets/js/carousel.js', array( 'jquery' ), '', true );
		wp_register_script( 'ezmark', get_template_directory_uri() . '/assets/js/jquery.ezmark.js', array( 'jquery' ), '', true );
		wp_register_script( 'iosslider', get_template_directory_uri() . '/assets/libraries/iosslider/_src/jquery.iosslider.min.js', array('jquery'), '', true );
		wp_register_script( 'chosen', get_template_directory_uri() . '/assets/libraries/chosen/chosen.jquery.min.js', array( 'jquery' ), '', true );
		wp_register_script( 'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array( 'jquery' ), '', true );
		wp_register_script( 'prettyphoto', get_template_directory_uri() . '/assets/libraries/prettyphoto/js/jquery.prettyPhoto.js', array( 'jquery' ), '', true );
		wp_register_script( 'map', get_template_directory_uri() . '/aviators/plugins/properties/assets/js/aviators-map.js', array( 'jquery' ), '', true );
		wp_register_script( 'aviators', get_template_directory_uri() . '/assets/js/properta.js', array( 'jquery' ), '', true );

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'googlemaps3' );
		wp_enqueue_script( 'map' );
		wp_enqueue_script( 'infobox' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'retina' );
		wp_enqueue_script( 'clusterer' );
		wp_enqueue_script( 'chosen' );
		wp_enqueue_script( 'ezmark' );
		wp_enqueue_script( 'iosslider');
		wp_enqueue_script( 'chosen' );
		wp_enqueue_script( 'carousel' );
		wp_enqueue_script( 'prettyphoto' );
		wp_enqueue_script( 'bxslider' );
		wp_enqueue_script( 'aviators' );

		wp_enqueue_script( 'aviators_settings', get_template_directory_uri() . '/assets/js/aviators-settings.js');
		wp_localize_script( 'aviators_settings', 'settings', array(
			'base_url' => get_bloginfo( 'url' ),
		) );
	}
}

add_action( 'wp_enqueue_scripts', 'aviators_load_styles' );


/**
 * Enable custom menus
 */
function aviators_menus() {
	register_nav_menu( 'main', __( 'Main', 'aviators' ) );
	register_nav_menu( 'anonymous', __( 'Anonymous user', 'aviators' ) );
	register_nav_menu( 'authenticated', __( 'Authenticated user', 'aviators' ) );
}

add_action( 'init', 'aviators_menus' );


/**
 * Parent menu items class
 */
function aviators_menus_parent_class( $items ) {
	$parents = array();

	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}

	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'menuparent';
		}
	}

	return $items;
}

add_filter( 'wp_nav_menu_objects', 'aviators_menus_parent_class' );


/**
 * Sidebars
 */
function aviators_sidebars() {
	register_sidebar( array(
		'name' => __( 'Primary', 'aviators' ),
		'id'   => 'sidebar-primary', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Top', 'aviators' ),
		'id'   => 'top', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Bottom', 'aviators' ),
		'id'   => 'bottom', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Content Top', 'aviators' ),
		'id'   => 'content-top', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Content Bottom', 'aviators' ),
		'id'   => 'content-bottom', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer One', 'aviators' ),
		'id'   => 'footer-1', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Two', 'aviators' ),
		'id'   => 'footer-2', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Three', 'aviators' ),
		'id'   => 'footer-3', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Four', 'aviators' ),
		'id'   => 'footer-4', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Bottom Left', 'aviators' ),
		'id'   => 'footer-bottom-left', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Bottom Right', 'aviators' ),
		'id'   => 'footer-bottom-right', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',
	) );
}

add_action( 'widgets_init', 'aviators_sidebars' );


function aviators_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post">' . __( 'Sticky', 'aviators' ) . '</span>';
	}

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() ) {
		aviators_entry_date();
	}

	// Translators: used between list items, there is a space after the comma.
//    $categories_list = get_the_category_list( __( ', ', 'aviators' ) );
//    if ( $categories_list ) {
//        echo '<span class="categories-links">' . $categories_list . '</span>';
//    }

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'aviators' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	/*
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard">' . __( 'Posted by', 'aviators' ) . ' <a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span> ' . __( 'on', 'aviators' ) . ' ' . aviators_entry_date(),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'aviators' ), get_the_author() ) ),
			get_the_author()
		);
	}
	*/
}

function aviators_link_pages() {
	wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'aviators' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
}

function aviators_comments_popup_link() {
//    comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'aviators' ) . '</span>', __( 'One comment so far', 'aviators' ), __( 'View all % comments', 'aviators' ) );
}

function aviators_edit_post_link() {
//    edit_post_link(__('Edit', 'aviators'), '<span class="edit-link">', '</span>');
}

function aviators_the_content() {
	the_content( __( 'Continue reading', 'aviators' ) );
}

function aviators_morelink_class( $link, $text ) {
	return str_replace(
		'more-link', 'more-link btn arrow-right btn-primary', $link
	);
}

add_action( 'the_content_more_link', 'aviators_morelink_class', 10, 2 );

function aviators_entry_date( $echo = false ) {
	$format_prefix = ( has_post_format( 'chat' ) || has_post_format( 'status' ) ) ? __( '%1$s on %2$s', '1: post format name. 2: date', 'aviators' ) : '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'aviators' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo ) {
		echo $date;
	}

	return $date;
}


function aviators_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'aviators' ), max( $paged, $page ) );
	return strip_tags( html_entity_decode( $title ) );
}

add_filter( 'wp_title', 'aviators_wp_title', 10, 2 );


function aviators_paging_nav( $pages = '', $range = 2, $wp_query = NULL) {
	global $paged;

	$showitems = ( $range * 2 ) + 1;

	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		if ($wp_query == NULL) {
			global $wp_query;
		}

		$pages = $wp_query->max_num_pages;

		if ( ! $pages ) {
			$pages = 1;
		}
	}

	if ( 1 != $pages ) {
		echo '<div class="pagination pagination-centered"><ul class="unstyled">';
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) echo "<li><a href='" . get_pagenum_link( 1 ) . "'>" . __( 'First', 'aviators' ) . "</a></li>";
		if ( $paged > 1 && $showitems < $pages ) echo "<li><a href='" . get_pagenum_link( $paged - 1 ) . "'>" . __( 'Previous', 'aviators' ) . "</a></li>";

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? "<li class='active'><a href='#'>" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link( $i ) . "' class='inactive' >" . $i . "</a></li>";
			}
		}

		if ( $paged < $pages && $showitems < $pages ) echo "<li><a href='" . get_pagenum_link( $paged + 1 ) . "'>" . __( 'Next', 'aviators' ) . "</a></li>";
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) echo "<li><a href='" . get_pagenum_link( $pages ) . "'>" . __( 'Last', 'aviators' ) . "</a></li>";
		echo "</ul></div>\n";
	}
}


/**
 * Register widgets
 */
function aviators_widgets() {
	register_widget( 'Login_Widget' );
	register_widget( 'Register_Widget' );
	register_widget( 'MapProperties_Widget' );
	register_widget( 'FeaturedProperties_Widget' );
	register_widget( 'FeaturedPropertiesLarge_Widget' );
	register_widget( 'MostRecentProperties_Widget' );
	register_widget( 'ReducedProperties_Widget' );
	register_widget( 'CarouselProperties_Widget' );
	register_widget( 'Agents_Widget' );
	register_widget( 'AssignedAgents_Widget' );
	register_widget( 'Agencies_Widget' );
	register_widget( 'AssignedAgencies_Widget' );
	register_widget( 'EnquireProperties_Widget' );
	register_widget( 'PropertyFilter_Widget' );
	register_widget( 'Partners_Widget' );
}

add_action( 'widgets_init', 'aviators_widgets' );


if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}


require_once dirname( __FILE__ ) . '/aviators/libraries/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'properta_register_required_plugins' );

function properta_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Revolution Slider', // The plugin name
			'slug'               => 'revslider', // The plugin slug (typically the folder name)
			'source'             => get_stylesheet_directory() . '/aviators/libraries/plugins/revslider.zip', // The plugin source
			'required'           => false, // If false, the plugin is only 'recommended' instead of required
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     => 'Widget Logic',
			'slug'     => 'widget-logic',
			'required' => false,
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		),
		array(
			'name'     => 'Breadcrumb NavXT',
			'slug'     => 'breadcrumb-navxt',
			'required' => false,
		),
		array(
			'name'     => 'dsIDXpress IDX Plugin',
			'slug'     => 'dsidxpress',
			'required' => false,
		),
	);

	$config = array(
		'domain'           => 'aviators', // Text domain - likely want to be the same as your theme.
		'default_path'     => '', // Default absolute path to pre-packaged plugins
		'parent_menu_slug' => 'themes.php', // Default parent menu slug
		'parent_url_slug'  => 'themes.php', // Default parent URL slug
		'menu'             => 'install-required-plugins', // Menu slug
		'has_notices'      => true, // Show admin notices or not
		'is_automatic'     => false, // Automatically activate plugins after installation or not
		'message'          => '', // Message to output right before the plugins table
		'strings'          => array(
			'page_title'                      => __( 'Install Required Plugins', 'aviators' ),
			'menu_title'                      => __( 'Install Plugins', 'aviators' ),
			'installing'                      => __( 'Installing Plugin: %s', 'aviators' ), // %1$s = plugin name
			'oops'                            => __( 'Something went wrong with the plugin API.', 'aviators' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'aviators' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'aviators' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %s', 'aviators' ), // %1$s = dashboard link
			'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );
}

function aviators_customizer_live_preview() {
	wp_enqueue_script(
		'themecustomizer', get_template_directory_uri() . '/assets/js/theme-customizer.js',
		array( 'jquery', 'customize-preview' ), //Define dependencies
		'', //Define a version (optional)
		true //Put script in footer?
	);
}

add_action( 'customize_preview_init', 'aviators_customizer_live_preview' );