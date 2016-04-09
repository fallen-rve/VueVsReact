<?php
/**
 * 
 */
?>
<!doctype html>
<html ng-app>
    <head>
        <?php 
            get_fonts();
            get_header_scripts();
            $stuff = explode( ',', get_styles() ); 
            foreach($stuff as $things){
                echo $things;
            }
        ?>
    </head>
    <body>
        <header>

        </header>
        <div>