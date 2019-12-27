<?php
function sample_post_types()
{
  // Campus Post type
    register_post_type('campus', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'campuses'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Campuses',
        'add_new_item' => 'Add New Campus',
        'edit_item' => 'Edit Campus',
        'all_items' => 'All Campuses',
        'singular_name' => 'Campus'
      ),
      'menu_icon' => 'dashicons-location-alt'
    ));


// event post type
  register_post_type('event', array(
    'supports' => array('title','editor','excerpt','custom-fields'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
    'name' =>'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
        ),

        'menu_icon' => 'dashicons-calendar'
      ));


      //program post type
      register_post_type('program', array(
        'supports' => array('title','editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' =>'programs',
          'add_new_item' => 'Add New programs',
          'edit_item' => 'Edit programs',
          'all_items' => 'All programs',
          'singular_name' => 'programs'
            ),

            'menu_icon' => 'dashicons-awards'
          ));

add_action('init','sample_post_types');

// Professor Post Type
  register_post_type('professor', array(
    'supports' => array('title','editor','thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

}

add_action('init','sample_post_types');
