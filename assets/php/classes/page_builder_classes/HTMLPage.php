<?php
/**
 * 
 */
class HTMLPage {
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;
    function __construct() {

    }
    function setHeader(){
        ob_start();
            require( DIRPATH . '/assets/php/template_parts/header.php' );
        return ob_get_clean();
    }
    function setFooter(){
        ob_start();
            require( DIRPATH . '/assets/php/template_parts/footer.php' );
        return ob_get_clean();
    }
    function showPage() {
        return $this->page;
    }
    function setTitle($title_in) {
        $this->page_title = $title_in;
    }
    function setHeading($heading_in) {
        $this->page_heading = $heading_in;
    }
    function setText($text_in) {
        $this->page_text .= $text_in;
    }
    function formatPage() {
        $this->page  = $this->setHeader();
        $this->page .= '<h1>'.$this->page_heading.'</h1>';
        $this->page .= $this->page_text;
        $this->page .= $this->setFooter();
    }
}