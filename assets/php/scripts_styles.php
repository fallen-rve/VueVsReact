<?php
/**
 * 
 */

/**
 * [get_fonts description]
 * @return [type] [description]
 */
function get_fonts(){

}

/**
 * [get_scripts description]
 * @return [type] [description]
 */
function get_header_scripts(){

}

/**
 * [get_footer_scripts description]
 * @return [type] [description]
 */
function get_footer_scripts(){

}

/**
 * [get_styles description]
 * @return [type] [description]
 */
function get_styles(){
    $thing[0] = load_tag('link', DOMAINNAME . '/style.css');
    return implode(',', $thing);
}

/**
 * [get_scripts_styles description]
 * @return [type] [description]
 */
function get_scripts_styles(){

}