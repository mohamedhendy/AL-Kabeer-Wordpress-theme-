<?php
/* Call Walker nav  (1)*/
require_once get_template_directory() . '/bs4navwalker.php';
add_theme_support('post-thumbnails');

/* Add styles*/
function hendy_add_styles()
{
  wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
  wp_enqueue_style('Scheherazade-css', 'get_template_directory_uri() . /assets/fonts/din-next-lt-w23-regular.ttf');
  wp_enqueue_style('Scheherazadea-css', 'http://fonts.googleapis.com/earlyaccess/droidarabickufi.css');
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('themeslug-style', get_stylesheet_uri());
  wp_style_add_data('themeslug-style', 'rtl', 'replace');
}

/* add scripts */
function hendy_add_script()
{

  wp_deregister_script('jquery'); /* remove old file of jquery*/
  wp_register_script('jquery', includes_url('js/jquery/jquery.js'), false, '', true); /*register new jquery :) */
  wp_enqueue_script('jquery'); /* add new jquery */
  wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}


/* register nav menu single menu*/
// function hendy_add_custom_menu() {
//     register_nav_menu('bootstrap-menu', __('navigation bar'));
// } 

/* (1)  */
function hendy_add_custom_menu()
{
  register_nav_menus(array(
    'bootstrap-menu' => 'Navigation Bar',
    'footer-menu' => 'Footer Menu'
  ));
}

/* (1) */
function hendy_add_created_nav()
{
  wp_nav_menu(array(
    'menu'            => 'bootstrap-menu',
    'theme_location'  => 'bootstrap-menu',
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav ml-auto',
    'depth'           => 2,
    'walker'          => new bs4navwalker(),
  ));
}



/* include my functions into action  */
add_action('init', 'hendy_add_custom_menu');
add_action('wp_enqueue_scripts', 'hendy_add_styles');
add_action('wp_enqueue_scripts', 'hendy_add_script');
// Left To Right 

/* custom excerpt*/
function hendy_custom_excerpt($length)
{
  if (is_author()) {
    return 27;
  } elseif (is_single()) {
    return 25;
  } else {
    return 40;
  }
}
function hendy_custom_excerpt_more($more)
{
  return ' ....';
}
add_filter('excerpt_length', 'hendy_custom_excerpt');
add_filter('excerpt_more', 'hendy_custom_excerpt_more');


/* Make pagination for your page */
function page_pagination()
{
  global  $wp_query;  /* مش محتاجه كلام */
  $allPages = $wp_query->max_num_pages;
  $current_page = max(1, get_query_var('paged'));
  if ($allPages > 1) {
    return paginate_links(array(
      'base'     => get_pagenum_link() . '%_%',
      'format'   => '/page/%#%',
      'current'  => $current_page,
      'mid_size' => 3,
      'end_size' => 3,
      'prev_text'          => __('« السابق'),
      'next_text'          => __('التالى »'),
    ));
  }
}


/* Register  Main Sidebar */
function hendy_addwidget()
{
  register_sidebar(array(
    'name'          => 'Main-sidebar',
    'id'            => 'main-sidebar',
    'description'   => ' this is main side bar to add widget ',
    'before_widget' => '<div class="widget-content" >',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="content-widget"',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'hendy_addwidget');


/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
  <div><label class="screen-reader-text" for="s">' . __( ' ' ) . '</label>
  <button class="" type="submit" id="searchsubmit" value=""><i class="fas fa-search"></i></button>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" />
  </div>
  </form>';

  return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );



