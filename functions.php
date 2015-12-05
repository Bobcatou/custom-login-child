/**
*Custom Login Logo
**/
function my_loginlogo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_stylesheet_directory_uri() . '/images/logo.png) !important;
    }
  </style>';
}
/**
*Hover Title for Logo
**/
add_action('login_head', 'my_loginlogo');

function my_loginURLtext() {
    return 'YOUR-WEBSITE-NAME';
}
add_filter('login_headertitle', 'my_loginURLtext');

/**
*URL for custom logo
**/
function my_loginURL() {
    return 'YOUR-SITE-URL-GOES-HERE';
}
add_filter('login_headerurl', 'my_loginURL');




/**
*Enquere Login Custom Stylesheet
**/
function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/login_styles.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

