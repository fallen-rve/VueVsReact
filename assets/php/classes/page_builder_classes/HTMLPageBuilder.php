<?php
/**
 * 
 */
class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = NULL;
    private $url = NULL;
    private $title = NULL;

    function __construct() {
        
    }

    function setUrl($url_in){
        $this->setFile($url_in);
    }

    function setTitle($title_in) {
        $this->title = $title_in;
    }
    function getTitle(){
        return $this->title;
    }

    function setFile($file){
        $this->filePath = $file;
    }

    function getFile(){
        return $this->filePath;
    }

    /**
     * Sets the format for the page
     * @return null
     */
    function setPage() {
        $this->page  = $this->setHeader();
        $this->page .= $this->setContent();
        $this->page .= $this->setFooter();
    }
    /**
     * returns the constructed page
     * @return string
     */
    function getPage() {
        return $this->page;
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
     * Returns the contents of 
     */
    function setContent() {
        ob_start();
            require $this->getFile();
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

}