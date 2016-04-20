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

$pageDirector = new HTMLPageDirector( $_GET['page'] );
$pageBuilder = new HTMLPageBuilder( $pageDirector );
$pageBuilder->buildPage();
echo 'hello';