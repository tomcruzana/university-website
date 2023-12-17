<?php
get_header();

while (have_posts()) { ?>
    <p>
        <?php the_post()
            ?>
    </p>

    <h1>
        <?php the_title() ?>
    </h1>

    <p>
        <?php the_content()
            ?>
    </p>

    <?php
}

get_footer();
?>