<?php

/**
 * Plugin Name: Wilson Web Development
 * Description: Adds extra functionality for Wilson Web Develompent clients
 * Version:     1.0
 * Author:      Nathan Wilson
 * Author URI:  https://wilsonwebdevelopment.com to your website
 */


// Add Events Post Type
function add_events_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_menu' => true,
        'supports' => array('title'),
        'show_in_admin_bar' => true
    );
    register_post_type('events', $args);
}

add_action('init', 'add_events_post_type');


// Adds Events Taxonomies
function add_events_taxonomy()
{

    $args = array(
        'labels' => array(
            'name' => 'Game',
            'singular_name' => 'Game'
        ),
        'public' => true,
        'hierarchical' => true
    );

    register_taxonomy('game', array('events'), $args);
}

add_action('init', 'add_events_taxonomy');
