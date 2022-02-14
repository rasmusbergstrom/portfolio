<?php
function get_style_script(){
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('main_font', 'https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic');
    wp_enqueue_style('main_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

    wp_enqueue_script('main-js', get_theme_file_uri('script.js'), NULL, false, true);
}
add_action('wp_enqueue_scripts', 'get_style_script');

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'mainmenu' => 'Main menu',
        'categorymenu' => 'Category Menu'
    ));
}
add_action('after_setup_theme', 'theme_setup');
//Lägga till egen klass på a tag för styling
function add_class_for_previous_post($html){
    $html = str_replace('<a', '<a class="btn"', $html);
    return $html;
}
add_filter('previous_post_link', 'add_class_for_previous_post');
//Lägga till egen klass på a tag för styling
function add_class_for_next_post($html){
    $html = str_replace('<a', '<a class="btn"', $html);
    return $html;
}
add_filter('next_post_link', 'add_class_for_next_post');

//Ändra antalet tecken i excerp
function my_excerpt_length($length){
    return 35;
}
add_filter('excerpt_length', 'my_excerpt_length');