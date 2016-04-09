<?php
/**
 * Loads all appropriate parts.
 */

// Sets the path of the home directory
define( "DIRPATH", dirname( __FILE__ ) );
define( "CONSTANT", "Hello world." );

// Includes functions
require( DIRPATH . '/functions.php' );

// Loads the Page Builder Class Handler
require( DIRPATH . '/assets/php/classes/page_builder.php' );

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->GetPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');
