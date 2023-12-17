<?php
function website_custom_files()
{
    // here you can load css or js files here
    // you can duplicate this line to load more css files
    // wp_enqueue_style("website_custom_styles", get_stylesheet_uri());
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom_google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style("website_custom_styles_1", get_theme_file_uri("/build/style-index.css"));
    wp_enqueue_style("website_custom_styles_2", get_theme_file_uri("/build/index.css"));
}

// this will invoke the custom function we created above on page init
add_action('wp_enqueue_scripts', 'website_custom_files')
    ?>