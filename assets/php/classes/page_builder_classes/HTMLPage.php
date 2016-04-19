<?php
/**
 * 
 */
class HTMLPage {
    private $page = NULL;
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
     * [setFile description]
     * @param [type] $file [description]
     */
    function setFile($file){
        $this->filePath = $file;
    }
    /**
     * [getFile description]
     * @return [type] [description]
     */
    function getFile(){
        return $this->filePath;
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
        $this->page .= $this->setContent();
        $this->page .= $this->setFooter();
        var_dump($this->page);
    }

}