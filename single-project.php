<?php get_header(); ?>

<img src="https://media1.giphy.com/media/GeimqsH0TLDt4tScGw/giphy.gif?cid=ecf05e47euh9u802fgzddpady7qdvq8jti8usahpanrhj42k&rid=giphy.gif&ct=g" alt="">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h1>PROJECT</h1>
        <h2><?php the_title(); ?></h2>

        <?php the_post_thumbnail() ?>

        <h3>project description:</h3>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <div class="previous-next">
        <span><?= get_previous_post_link() ?></span>
        <span><?= get_next_post_link() ?></span>
    </div>

<?php endif; ?>

<?php get_footer(); ?>