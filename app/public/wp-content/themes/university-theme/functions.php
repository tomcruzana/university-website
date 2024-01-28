<?php

function university_files()
{
    // load js scripts
    wp_enqueue_script("main-university-js", get_theme_file_uri("/build/index.js"), array("jquery"), "1.0", true);

    // load the default style.css
    // wp_enqueue_style("university_main_styles", get_stylesheet_uri());

    // load the custom css stylesheets
    wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("university_main_styles", get_theme_file_uri("/build/style-index.css"));
    wp_enqueue_style("university_extra_styles", get_theme_file_uri("/build/index.css"));
}

function university_features()
{
    // wp features
    // register_nav_menu("headerMenuLocation", "Header Menu Location"); // enable dynamic menus
    // register_nav_menu("footerMenuLocationOne", "Footer Menu Location One");
    // register_nav_menu("footerMenuLocationTwo", "Footer Menu Location Two");
    add_theme_support("title-tag"); // enable page title
}

function university_adjust_queries($query)
{
    // dont execute in the admin dashboard
    // but execute if main query & the post type is 'event'
    if (!is_admin() and is_post_type_archive("event") and $query->is_main_query()) {
        // universally modify the wp_query using its setter
        $today = date('Ymd');
        $query->set('meta_key', "event_date");
        $query->set('orderby', "meta_value_num");
        $query->set('order', "ASC");
        $query->set('meta_query', array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
        )
        );
    }
}

// wp event hooks
add_action("wp_enqueue_scripts", "university_files");
add_action("after_setup_theme", "university_features");
add_action("pre_get_posts", "university_adjust_queries");