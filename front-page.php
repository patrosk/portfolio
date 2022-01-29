<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div>
        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

    <?php

    $args = [
        'numberposts' => 3,
        'order' => 'desc',
    ];

    $latest_posts = get_posts($args);

    foreach ($latest_posts as $post) : ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
        <?php the_post_thumbnail('small') ?>
    <?php endforeach ?>

    <h4><a href="<?= get_permalink(get_option('page_for_posts')) ?>">Go to Blog</a></h4>

<?php endif; ?>

<?php get_footer(); ?>