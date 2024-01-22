<?php
get_header();

while (have_posts()) {
    the_post();
}
?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?></h1>
        <div class="page-banner__intro">
            <p>REPLACE ME LATER</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">



    <?php
    // get the id of the parent of the current page
    // get_the_ID gets the id of the current page
    $the_parent_ID = wp_get_post_parent_id(get_the_ID());
    if ($the_parent_ID) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($the_parent_ID); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php
                                                                                                                                                                // returns the string name based on the post or parent id
                                                                                                                                                                echo get_the_title($the_parent_ID) ?></a> <span class="metabox__main"><?php the_title(); ?></span>
            </p>
        </div>
    <?php
    }
    ?>


    <?php
    // check if parent or child page
    $testArray = get_pages(array("child_of" => get_the_ID()));

    if ($the_parent_ID or $testArray) { ?>
        <div class="page-links">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($the_parent_ID); ?>"><?php echo get_the_title($the_parent_ID); ?></a></h2>
            <ul class="min-list">
                <?php

                // exec if the this var is not equal to 0
                if ($the_parent_ID) {
                    $find_children_of = $the_parent_ID;
                } else {
                    $find_children_of = get_the_ID();
                }
                // return all pages
                wp_list_pages(array(
                    "title_li" => NULL,
                    "child_of" => $find_children_of,
                    "sort_column" => "menu_order"
                ));
                ?>
            </ul>
        </div>
    <?php } ?>

    <div class="generic-content">
        <?php the_content() ?>
    </div>
</div>

<?php
get_footer();
?>