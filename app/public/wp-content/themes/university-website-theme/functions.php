<?php
function website_custom_files()
{
    // here you can load css or js files here
    // you can duplicate this line to load more css files
    wp_enqueue_style("website_custom_styles", get_stylesheet_uri());
}

// this will invoke the custom function we created above on page init
add_action('wp_enqueue_scripts', 'website_custom_files')
    ?>