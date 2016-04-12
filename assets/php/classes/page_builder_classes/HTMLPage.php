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

    /**
     * Returns the contents of header.php
     */
    function setHeader(){
        ob_start();
            require( DIRPATH . '/assets/php/template_parts/header.php' );
        return ob_get_clean();
    }

    /**
     * Returns the contents of footer.php
     */
    function setFooter(){
        ob_start();
            require( DIRPATH . '/assets/php/template_parts/footer.php' );
        return ob_get_clean();
    }

    /**
     * returns the constructed page
     * @return string
     */
    function getPage() {
        return $this->page;
    }
    /**
     * Sets the format for the page
     * @return null
     */
    function setPage() {
        $this->page  = $this->setHeader();

        $this->page .= '<h1>'.$this->getHeading().'</h1>';
        $this->page .= $this->getText();

        $this->page .= $this->setFooter();
    }

    /**
     * Getter method for the title
     * @return string
     */
    function getTitle(){
        return $this->page_title;
    }
    /**
     * Setter method for the title
     * @param string
     */
    function setTitle($title_in) {
        $this->page_title = $title_in;
    }

    /**
     * Getter method for the page headline
     * @return string
     */
    function getHeading(){
        return $this->page_heading;
    }
    /**
     * Setter method for the page headline
     * @param string
     */
    function setHeading($heading_in) {
        $this->page_heading = $heading_in;
    }

    /**
     * Getter method for the page content
     * @return string
     */
    function getText(){
        return $this->page_text;
    }
    /**
     * Setter method for the page content
     * @param string
     */
    function setText($text_in) {
        $this->page_text .= $text_in;
    }

}