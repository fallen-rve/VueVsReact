<?php
/**
 * Loads all appropriate parts.
 */

// Sets the path of the home directory
define( "DIRPATH", dirname( __FILE__ ) );

// Includes functions
require( DIRPATH . '/functions.php' );

define( "DOMAINNAME", get_url() );


// Loads the Page Builder Class Handler
require( DIRPATH . '/assets/php/classes/page_builder.php' );

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->getPage();
print($page->getPage());