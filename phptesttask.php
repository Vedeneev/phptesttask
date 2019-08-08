<?php 
/*
Plugin Name: phptesttask
Description: shortcode test plugin
Version: 1.0
*/
echo 'PHP Test Task';

function post_func($atts){
    extract(shortcode_atts(array(
        'value' => 'Default'
        ), $atts));
    return "[{$value}]"
}
add_shortcode('post', 'post_func');

?>