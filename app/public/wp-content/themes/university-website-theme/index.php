<?php
get_header();

while (have_posts()) { ?>
    <p>
        <?php the_post()
            ?>
    </p>
    <a href="<?php the_permalink() ?>">
        <h1>
            <?php the_title() ?>
        </h1>
    </a>
    <hr>

    <?php
}

get_footer();
?>