<?php
/**
 * Get featured properties
 *
 * @param int
 *
 * @return array()
 */
function aviators_properties_get_featured( $count = 3, $shuffle = FALSE ) {
	$args = array(
		'post_type'      => 'property',
		'posts_per_page' => $count,
		'meta_query'     => array(
			array(
				'key'     => '_property_featured',
				'value'   => '1',
				'compare' => '=',
			),
		),
	);

	if ( $shuffle ) {
		$args['orderby'] = 'rand';
	}

	$query = new WP_Query( $args );
	return _aviators_properties_prepare( $query );
}


/**
 * Get most recent properties
 *
 * @return array()
 */
function aviators_properties_get_most_recent( $count = 3, $shuffle = FALSE ) {
	$args = array(
		'post_type'      => 'property',
		'posts_per_page' => $count,
	);

	if ( $shuffle ) {
		$args['orderby'] = 'rand';
	}

	$query = new WP_Query( $args );
	return _aviators_properties_prepare( $query );
}

function aviators_properties_get_for_map() {
    $filtered_properties = array();
    $properties = aviators_properties_get_most_recent( 9999 );


    foreach ( $properties as $property ) {
        if (!empty($property->_property_latitude) && !empty($property->_property_longitude)) {
            if (is_numeric($property->_property_latitude) && is_numeric($property->_property_longitude)) {
                $filtered_properties[] = $property;
            }
        }
    }

    return $filtered_properties;
}

/**
 * Get reduced properties
 *
 * @return array()
 */
function aviators_properties_get_reduced( $count = 3, $shuffle = FALSE ) {
	$args = array(
		'post_type'      => 'property',
		'posts_per_page' => $count,
		'meta_query'     => array(
			array(
				'key'     => '_property_reduced',
				'value'   => '1',
				'compare' => '='
			)
		)
	);

	if ( $shuffle ) {
		$args['orderby'] = 'rand';
	}

	$query = new WP_Query( $args );
	return _aviators_properties_prepare( $query );
}

/**
 * Get all agent's properties
 */
function aviators_properties_get_by_agent( $id, $count = -1 ) {
	$query = new WP_Query( array(
		'post_type'      => 'property',
		'posts_per_page' => $count,
		'meta_query'     => array(
			array(
				'key'     => '_property_agents',
				'value'   => '"' + $id + '"',
				'compare' => 'LIKE',
			)
		)
	) );

	return _aviators_properties_prepare( $query );
}

/**
 * Get all agency's properties
 */
function aviators_properties_get_by_agency( $id, $count = -1 ) {
	$query = new WP_Query( array(
		'post_type'      => 'property',
		'posts_per_page' => $count,
		'meta_query'     => array(
			array(
				'key'     => '_property_agencies',
				'value'   => '"' + $id + '"',
				'compare' => 'LIKE',
			)
		)
	) );

	return _aviators_properties_prepare( $query );
}

/**
 * Prepare meta information for properties
 *
 * @return array()
 */
function _aviators_properties_prepare( WP_Query $query ) {
	$results = array();

	foreach ( $query->posts as $property ) {
		$property->meta           		= get_post_meta( $property->ID, '', true );
		$property->location       		= wp_get_post_terms( $property->ID, 'locations' );
		$property->property_types 		= wp_get_post_terms( $property->ID, 'property_types' );
		$property->property_contracts 	= wp_get_post_terms( $property->ID, 'property_contracts' );
		$property->slides         		= get_post_meta( $property->ID, '_property_slides', TRUE );
		$property->slider_image   		= get_post_meta( $property->ID, '_property_slider_image', TRUE );
		$results[]                		= $property;
	}
	return $results;
}

function _aviators_properties_prepare_single( $post ) {
	$post->meta           		= get_post_meta( $post->ID, '', true );
	$post->location       		= wp_get_post_terms( $post->ID, 'locations' );
	$post->property_types 		= wp_get_post_terms( $post->ID, 'property_types' );
	$post->property_contracts 	= wp_get_post_terms( $post->ID, 'property_contracts' );
	$post->slides         		= get_post_meta( $post->ID, '_property_slides', TRUE );
	$post->slider_image   		= get_post_meta( $post->ID, '_property_slider_image', TRUE );

	return $post;
}


function aviators_properties_filter( $return_query = FALSE, $use_pager = TRUE ) {
	$paged    = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$wp_query = new WP_Query();

	$properties = array(
		'post_type'      => 'property',
		'posts_per_page' => - 1,
		'tax_query'      => array(),
		'meta_query'     => array(),
		'order_by'       => 'published'
	);

	if ( $use_pager ) {
		$properties['posts_per_page'] = aviators_settings_get_value( 'properties', 'properties', 'per_page' );
		$properties['paged']          = $paged;
	}

	if ( ! empty( $_GET['filter_order'] ) ) {
		$properties['order'] = $_GET['filter_order'];
	}
	else {
		$properties['order'] = 'DESC';
	}

	if ( ! empty( $_GET['filter_sort_by'] ) ) {
		if ( $_GET['filter_sort_by'] == 'price' ) {
			$properties['orderby']  = 'meta_value_num';
			$properties['meta_key'] = '_property_price';
		}

        if ( $_GET['filter_sort_by'] == 'beds' ) {
          $properties['orderby']  = 'meta_value_num';
          $properties['meta_key'] = '_property_bedrooms';
        }

        if ( $_GET['filter_sort_by'] == 'baths' ) {
          $properties['orderby']  = 'meta_value_num';
          $properties['meta_key'] = '_property_bathrooms';
        }

		if ( $_GET['filter_sort_by'] == 'date' ) {
			$properties['orderby'] = 'date';
		}

        if ( $_GET['filter_sort_by'] == 'title' ) {
          $properties['orderby'] = 'title';
        }


	}
	else {
		$properties['orderby'] = 'title';
	}

	if ( ! empty( $_GET['filter_location'] ) ) {
		$properties['tax_query'][] = array(
			'taxonomy' => 'locations',
			'field'    => 'id',
			'terms'    => $_GET['filter_location'],
			'operator' => 'IN',
		);
	}

	if ( ! empty( $_GET['filter_type'] ) ) {
		if ( is_array( $_GET['filter_type'] ) && count( $_GET['filter_type'] ) > 0 ) {
			$terms = array();

			foreach ( $_GET['filter_type'] as $type ) {
				$terms[] = $type;
			}
			$properties['tax_query'][] = array(
				'taxonomy' => 'property_types',
				'field'    => 'id',
				'terms'    => $terms,
				'operator' => 'IN',
			);
		}
		else {
			$properties['tax_query'][] = array(
				'taxonomy' => 'property_types',
				'field'    => 'id',
				'terms'    => $_GET['filter_type'],
				'operator' => 'IN',
			);
		}
	}

	if ( ! empty( $_GET['filter_bedrooms'] ) ) {
		$properties['meta_query'][] = array(
			'key'     => '_property_bedrooms',
			'value'   => $_GET['filter_bedrooms'],
			'compare' => '>=',
			'type'    => 'numeric',
		);
	}

	if ( ! empty( $_GET['filter_bathrooms'] ) ) {
		$properties['meta_query'][] = array(
			'key'     => '_property_bathrooms',
			'value'   => $_GET['filter_bathrooms'],
			'compare' => '>=',
			'type'    => 'numeric',
		);
	}


	if ( ! empty( $_GET['filter_contract_type'] ) ) {
		$properties['tax_query'][] = array(
			'taxonomy' => 'property_contracts',
			'field'    => 'id',
			'terms'    => $_GET['filter_contract_type'],
			'operator' => 'IN',
		);
	}

    // Area
    if ( ! empty( $_GET['filter_area_from'] ) && ! empty( $_GET['filter_area_to'] ) ) {
        $properties['meta_query'][] = array(
            'key'     => '_property_area',
            'value'   => array( $_GET['filter_area_from'], $_GET['filter_area_to'] ),
            'type'    => 'numeric',
            'compare' => 'BETWEEN'
        );
    }
    elseif ( ! empty( $_GET['filter_area_from'] ) ) {
        $properties['meta_query'][] = array(
            'key'     => '_property_area',
            'value'   => $_GET['filter_area_from'],
            'type'    => 'numeric',
            'compare' => '>='
        );
    }
    elseif ( ! empty( $_GET['filter_area_to'] ) ) {
        $properties['meta_query'][] = array(
            'key'     => '_property_area',
            'value'   => $_GET['filter_area_to'],
            'type'    => 'numeric',
            'compare' => '<='
        );
    }

    // Price
	if ( ! empty( $_GET['filter_price_from'] ) && ! empty( $_GET['filter_price_to'] ) ) {
		$properties['meta_query'][] = array(
			'key'     => '_property_price',
			'value'   => array( $_GET['filter_price_from'], $_GET['filter_price_to'] ),
			'type'    => 'numeric',
			'compare' => 'BETWEEN'
		);
	}
	elseif ( ! empty( $_GET['filter_price_from'] ) ) {
		$properties['meta_query'][] = array(
			'key'     => '_property_price',
			'value'   => $_GET['filter_price_from'],
			'type'    => 'numeric',
			'compare' => '>='
		);
	}
	elseif ( ! empty( $_GET['filter_price_to'] ) ) {
		$properties['meta_query'][] = array(
			'key'     => '_property_price',
			'value'   => $_GET['filter_price_to'],
			'type'    => 'numeric',
			'compare' => '<='
		);
	}

	$wp_query->query( $properties );

	if ( $return_query ) {
		return $wp_query;
	}

	return _aviators_properties_prepare( $wp_query );
}