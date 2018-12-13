<?php

function portfolio_post_types() {

  register_post_type('skill', array(
    'supports' => array('title', 'page-attributes'),
    'rewrite' => array('slug' => 'skills'),
    'public' => true,
    'labels' => array(
      'name' => 'Skills',
      'add_new_item' => 'Add New Skill',
      'edit_item' => 'Edit Skill',
      'all_items' => 'All Skills',
      'singular_name' => 'Skill'
    ),
    'menu_icon' => 'dashicons-awards'
  ));

  register_post_type('project', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

}

add_action('init', 'portfolio_post_types');

?>