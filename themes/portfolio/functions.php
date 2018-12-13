<?php
function portfolio_files() {
  wp_enqueue_script('scripts-bundled', get_template_directory_uri() .'/js/scripts-bundled.js', array('jquery'), null, true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web');
  wp_enqueue_style('font awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_style('devicons', 'https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css');
  wp_enqueue_style('css-main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features() {
  add_image_size('projectSize', 767, 614, true);
  register_nav_menu( 'primary', esc_html__( 'Main Navigation', 'portfolio' ) );
}

add_action('after_setup_theme', 'portfolio_features');

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary' || $args->theme_location == 'resources' || $args->theme_location == 'blog') {
    $classes[] = 'navigation__item';
  }
  
  return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);

function add_link_atts($atts) {
  $atts['class'] = "navigation__link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
