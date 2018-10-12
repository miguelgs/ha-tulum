<?

function custom_scripts() {

  wp_enqueue_style('main-style', get_template_directory_uri() . '/common/css/styles.css', array(), date('Y-m-d H:i:s'), 'screen');
 
  wp_enqueue_script('main-script', get_template_directory_uri() . '/common/js/bundle.js', array (), date('Y-m-d H:i:s'), true);
}

function add_viewport_meta_tag() {
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

add_action( 'genesis_meta', 'add_viewport_meta_tag' );

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

if ( function_exists( 'pll_register_string' ) ) {

  // Navigation

  pll_register_string('home',       'Inicio',      'Nav', false);
  pll_register_string('projects',   'Desarrollos', 'Nav', false); 
  pll_register_string('about-us',   'Nosotros',    'Nav', false); 
  pll_register_string('feature',    'Feature',     'Nav', false); 
  pll_register_string('contact-us', 'Contacto',    'Nav', false);
  pll_register_string('language',   'English',     'Nav', false);

  pll_register_string('projects',   'Descripción',           'Secondary Nav', false); 
  pll_register_string('about-us',   'Galería',               'Secondary Nav', false); 
  pll_register_string('data-sheet', 'Ficha Técnica',         'Secondary Nav', false); 
  pll_register_string('location',   'Ubicación',             'Secondary Nav', false);
  pll_register_string('get-info',   'Solicitar información', 'Secondary Nav', false);

  pll_register_string('current-projects',  'Desarrollos en preventa', 'Sub Nav', false);
  pll_register_string('previews-projects', 'Desarrollos anteriores',  'Sub Nav', false);

  // UI

  pll_register_string('more',          'Ver más',                'UI', false);
  pll_register_string('collaborators', 'Nuestros colaboradores', 'UI', false);

  // Sections

  pll_register_string('header-about-us',   'Acerca de nosotros',             'Screens', false);
  pll_register_string('header-contact-us', 'Ponte en contacto con nosotros', 'Screens', false);

  // Features

  pll_register_string('architecture', 'Arquitectura',                                    'Features', false);
  pll_register_string('construction', 'Constructora',                                    'Features', false);
  pll_register_string('use',          'Uso',                                             'Features', false);
  pll_register_string('units',        'No. Unidades',                                    'Features', false);
  pll_register_string('levels',       'Niveles',                                         'Features', false);
  pll_register_string('status',       'Estatus',                                         'Features', false);
  pll_register_string('map',          'Ubicación',                                       'Features', false);
  pll_register_string('area',         'M2 por unidad',                                   'Features', false);
  pll_register_string('additional',   'Información adicional',                           'Features', false);
  pll_register_string('information',  'Si deseas más información sobre este desarrollo', 'Features', false);
  pll_register_string('download',     'Descarga el documento',                           'Features', false);

  // Project

  
  pll_register_string('nearby',           'Atracciones y desarrollos cerca',              'Project', false);
  pll_register_string('another-projects', 'Otros desarrollos en preventa',                'Project', false);
  pll_register_string('want-more-info',   'Quiero más información sobre este desarrollo', 'Project', false);

  // Footer

  pll_register_string('terms',   'Términos y Condiciones', 'Footer', false);
  pll_register_string('privacy', 'Política de Privacidad', 'Footer', false);
} 

?>