<?php
// Put functions here
function get_page() {
    
    $page = $_GET['page'];
    $page = basename($page);

    if( !$page || empty($page) ){
        $page = 'index';
    }

    $page_file = dirname( __FILE__ ) . '/pages/' . $page . '.php';

    if( !$page_file || !file_exists( $page_file ) ){
        $page_file = dirname( __FILE__ ) . '/pages/404.php';
    }

    set_page( $page_file );
}

function set_page( $page ) {

    include $page_file;

}

function get_module( $file ){

    $file = './modules/' . $file . '.php';

    if( !$file || !file_exists( $file ) ){
        return;
    }

    include $file;

}

function get_url(){

    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
}

function writeln($line_in) {
    echo $line_in."<br/>";
}