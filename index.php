<?php
/**
 * Loads all appropriate parts.
 */

// Sets the path of the home directory
define( "SITE_PROTOCOL", ($_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://');
define( "DIRPATH", dirname( __FILE__ ) );
define ('SITE_NAME', 'Framwork');
define ('BASE', str_replace($_SERVER['SERVER_NAME'], '', $_SERVER['DOCUMENT_ROOT'])); // The Base Root Directory Name
define ('BASE_URI', $_SERVER['DOCUMENT_ROOT'] . '/'); // The HTML Directory Name
define ('BASE_URL', SITE_PROTOCOL . $_SERVER['HTTP_HOST'] . '/'); // Your Website's Full URL Address
define ('DOCTYPE', 'xhtml strict');

// Includes functions
require( DIRPATH . '/functions.php' );

// Loads the Page Builder Class Handler
require( DIRPATH . '/assets/php/classes/Page.php' );

$page = new Page();
$page->setContent();

$page->link( 
    array(
        'style.css'
    ),
    true
);
$page->footer_link( 
    array(
        "assets/bower_components/jquery/dist/jquery.min.js",
        "assets/bower_components/jquery-ui/jquery-ui.min.js",
        "assets/bower_components/react/react.min.js",
        "assets/bower_components/vue/dist/vue.min.js"
    ),
    true
);

echo $page->display($page->content);