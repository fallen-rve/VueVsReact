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
$page->setContent($_GET['page']);

$page->doctype('html', 'transitional');
$page->title('page1');
$page->description ('Allows you to easily manipulate every aspect of an html page while it is being created.');
$page->keywords('php, html, page, class');
$page->robots(false);
$page->charset ('utf-8');
$page->link( 
    array(
        '/style.css',
        '/assets/bower_components/jquery/dist/jquery.min.js',
        '/assets/bower_components/jquery-ui/jquery-ui.min.js',
        '/assets/bower_components/underscore/underscore.js',
        '/assets/bower_components/backbone/backbone.js'
    )
);

echo $page->display($page->content);