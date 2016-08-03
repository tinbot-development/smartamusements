<?php
/**
 * Shortcodes
 */

//allow shortcodes on text widgets
add_filter('widget_text', 'do_shortcode');

//shortcode for the install directory
function site_url_shortcode(){
    return site_url();
}
add_shortcode( 'site_url', 'site_url_shortcode' );


//shortcode for the install directory
function home_url_shortcode(){
    return home_url();
}
add_shortcode( 'home_url', 'home_url_shortcode' );

//shortcode for the upload directory
function upload_url_shortcode(){
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'];
}
add_shortcode( 'upload_url', 'upload_url_shortcode' );

//shortcode for the theme directory
function theme_url_shortcode(){
    return get_stylesheet_directory_url();
}
add_shortcode( 'theme_url', 'theme_url_shortcode' );

add_shortcode('pb_button','pb_button_shortcode');

function pb_button_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'class'  => 'btn',
            'link'  => '',
        ) , $atts
    );

    extract($atts);

    $output = '<a class="btn '. $class.'"  href="'.$link.'">'.$content.'</a>';

    return $output;

}