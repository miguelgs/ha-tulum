<?

function custom_scripts() {

  wp_enqueue_style('main-style', get_template_directory_uri() . '/common/css/styles.css', array(), date('Y-m-d H:i:s'), 'screen');
  
  //wp_dequeue_script('jquery');
 
  wp_enqueue_script('main-script', get_template_directory_uri() . '/common/js/bundle.js', array (), date('Y-m-d H:i:s'), true);
 
  /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }*/
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

if ( function_exists( 'pll_register_string' ) ) {

  // Navigation

  pll_register_string('home',       '', 'nav', false);
  pll_register_string('projects',   '', 'nav', false); 
  pll_register_string('about-us',   '', 'nav', false); 
  pll_register_string('feature',    '', 'nav', false); 
  pll_register_string('contact-us', '', 'nav', false);
  pll_register_string('language',   '', 'nav', false);

  // UI

  pll_register_string('more',      '', 'ui', false);
  pll_register_string('collaborators', '', 'ui', false);

  // Sections

  pll_register_string('header-about-us',   '', 'sections', false);
  pll_register_string('header-contact-us', '', 'sections', false);

  // Features

  pll_register_string('architecture', '', 'features', false);
  pll_register_string('construction', '', 'features', false);
  pll_register_string('use',          '', 'features', false);
  pll_register_string('units',        '', 'features', false);
  pll_register_string('levels',       '', 'features', false);
  pll_register_string('status',       '', 'features', false);
  pll_register_string('location',     '', 'features', false);
  pll_register_string('area',         '', 'features', false);
  pll_register_string('information',  '', 'features', false);

  // Footer

  pll_register_string('terms',   '', 'footer', false);
  pll_register_string('privacy', '', 'footer', false);
} 

?>