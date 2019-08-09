<?php 
/*
Plugin Name: phptesttask
Description: shortcode test plugin
Version: 1.0
*/

function post_func($atts){
    extract(shortcode_atts(array(
        'value' => 'Default'
        ), $atts));

    if(is_numeric($value)){
        if($value%7 == 0){
            if($value%11 == 0){
                $value = "LongRead";    
            } else {
                $value = "Long";
            }            
        } else {
            if ($value%11 ==0){
                $value = "Read";
            }
        }
    }
    return "[{$value}]";
}
add_shortcode('post', 'post_func');
?>