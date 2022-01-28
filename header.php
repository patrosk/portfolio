<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>portfolio</title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.x/dist/typography.min.css" />
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href=<?= site_url(); ?> class="text-2xl no-underline text-grey-darkest hover:text-blue-dark"><?php bloginfo('name') ?></a>
        </div>
        <div>
            <?php $menu_items = wp_get_nav_menu_items('menu'); ?>
            <?php $current_page_id = get_queried_object(); ?>
            <?php foreach ($menu_items as $menu_item) : ?>
                <a class="hover:bg-teal-900 hover:text-white px-3 py-2 <?= $current_page_id == $menu_item->object_id ? 'text-teal-900' : 'text-gray-400' ?>" href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a>

            <?php endforeach ?>
        </div>
    </nav>
    <div class="container prose">