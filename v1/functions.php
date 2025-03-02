<?php
// Theme Setup - dyncamical title
function myTM_theme_setup_title() {

     // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'myTM_theme_setup_title');
?>