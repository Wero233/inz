<!DOCTYPE html>
<html leng="pl">

<head>
    <meta charset="uth-8">
    <title> <?php echo get_bloginfo('name') ?> </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+3:display=swap">
    <?php

    wp_head();
    ?>

</head>
<header>
    <a href="<?php echo home_url() ; ?>">
    <img class='site-logo' src="/wp-content/themes/inz/img/logo2.png" alt="logo2">
    </a>
    <nav class="main-menu">
        <ul class="main-menu__list">
            <li><a href="<?php echo get_bloginfo('kot') ?>">Koty</a></li>
            <li><a href="<?php echo get_bloginfo('pies') ?>">Psy</a></li>
            <li><a href="<?php echo get_bloginfo('dodaj') ?>">Dodaj ogłoszenie</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'kontakt' ) );?>">Kontakt</a></li>
        </ul>
    </nav>

</header>

