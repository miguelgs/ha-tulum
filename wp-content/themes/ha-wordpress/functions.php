<?

function custom_scripts() {

  wp_enqueue_style('main-style', get_template_directory_uri() . '/common/css/styles.css', array(), date('Y-m-d H:i:s'), 'screen');
  
  wp_dequeue_script('jquery');
 
  wp_enqueue_script('main-script', get_template_directory_uri() . '/common/js/bundle.js', array (), date('Y-m-d H:i:s'), true);
 
    /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }*/
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

?>