<?php
// Theme Setup - dyncamical title
function gifton_theme_setup_title() {

     // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gifton_theme_setup_title');
?>