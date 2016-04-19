<?php
/**
 * 
 */
class HTMLPageDirector extends AbstractPageDirector {
    private $page_url;
    private $builder = NULL;

    public function __construct(AbstractPageBuilder $builder_in, $page_url_in) {
        $this->setURL( $page_url_in );
        $this->builder = $builder_in;
    }

    public function buildPage() {
        $this->builder->setUrl( $this->getUrl() );
        $this->builder->setTitle( 'Testing the HTMLPage' );
        $this->builder->setPage();
    }

    public function getPage() {
        return $this->builder->getPage();
    }

    /**
     * Getter method for the page Url
     * Include the file
     */
    function getUrl() {
        return $this->page_url;
    }

    /**
     * Setter method for the page url
     * @param  string
     */
    function setUrl($page_url_in) {
        $page = basename($page_url_in);

        if( !$page || empty($page) ){
            $page = 'index';
        }

        $page_file = DIRPATH . '/pages/' . $page . '.php';

        if( !$page_file || !file_exists( $page_file ) ){
            $page_file = DIRPATH . '/pages/404.php';
        }
        $this->page_url = $page_file;
    }
}