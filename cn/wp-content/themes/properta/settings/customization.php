<?php

function aviators_properta_customize($wp_customize) {
    aviators_properta_customize_general($wp_customize);
    aviators_properta_customize_header($wp_customize);
}

function aviators_properta_customize_general($wp_customize) {
    $wp_customize->add_section('properta_general', array('title' => __('General', 'aviators'), 'priority' => 0));

    $wp_customize->add_setting('general_primary_color', array(
        'transport' => 'postMessage', 'default' => '#003f4f',
    ));

    $wp_customize->add_control('general_primary_color', array(
        'label' => __('Primary color (HEX value)', 'aviators'), 'section' => 'properta_general', 'settings' => 'general_primary_color', 'priority' => 0
    ));

    $wp_customize->add_setting('general_secondary_color', array(
        'transport' => 'postMessage', 'default' => '#f69679'
    ));
    $wp_customize->add_control('general_secondary_color', array(
        'label' => __('Secondary color (HEX value)', 'aviators'), 'section' => 'properta_general', 'settings' => 'general_secondary_color', 'priority' => 1,
    ));
}

function aviators_properta_customize_header($wp_customize) {
    $wp_customize->add_section('properta_header', array('title' => __('Header', 'aviators'), 'priority' => 2));

    // Logo
    $wp_customize->add_setting('header_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label' => __('Logo', 'aviators'), 'section' => 'properta_header', 'settings' => 'header_logo', 'priority' => 1
    )));

    // Title
    $wp_customize->add_setting('header_title_is_hidden');
    $wp_customize->add_control('header_title_is_hidden', array(
        'type' => 'checkbox', 'label' => __('Hide title', 'aviators'), 'section' => 'properta_header', 'settings' => 'header_title_is_hidden', 'priority' => 2
    ));


    // Call to action: hidden
    $wp_customize->add_setting('header_call_to_action_is_hidden');
    $wp_customize->add_control('header_call_to_action_is_hidden', array(
        'type' => 'checkbox', 'label' => __('Hide call to action button', 'aviators'), 'section' => 'properta_header', 'settings' => 'header_call_to_action_is_hidden', 'priority' => 7,
    ));
    // url
    $wp_customize->add_setting('header_call_to_action_url', array('default' => '/my-properties/'));
    $wp_customize->add_control('header_call_to_action_url', array(
        'label' => __('Call to action URL', 'aviators'), 'section' => 'properta_header', 'settings' => 'header_call_to_action_url', 'priority' => 8,
    ));
    // text
    $wp_customize->add_setting('header_call_to_action_text', array('default' => 'List your property'));
    $wp_customize->add_control('header_call_to_action_text', array(
        'label' => __('Call to action text', 'aviators'), 'section' => 'properta_header', 'settings' => 'header_call_to_action_text', 'priority' => 9,
    ));
}

add_action('customize_register', 'aviators_properta_customize');
