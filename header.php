<!DOCTYPE html>
<html leng="pl">

<head>
    <meta charset="uth-8">
    <title> <?php echo get_bloginfo('name') ?> </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />

    <?php

    wp_head();
    ?>

</head>
<header>
    <img class='site-logo' src="/wp-content/themes/inz/img/logo2.png" alt="logo2">
    <nav class="main-menu">
        <ul class="main-menu__list">
            <!-- <li><a href="<?php echo get_bloginfo('strona-glowna') ?>">Strona główna</a></li> -->
            <li><a href="<?php echo get_bloginfo('kot') ?>">Koty</a></li>
            <li><a href="<?php echo get_bloginfo('pies') ?>">Psy</a></li>
            <!-- <li><a href="<?php echo get_bloginfo('nas') ?>">O nas</a></li> -->
            <!-- <li><a href="<?php echo get_bloginfo('adopt') ?>">O adopcji</a></li>
            <li><a href="<?php echo get_bloginfo('adopcja') ?>">Adopcja</a></li> -->
            <li><a href="<?php echo get_bloginfo('dodaj') ?>">Dodaj ogłoszenie</a></li>
            <li><a href="<?php echo get_bloginfo('kontakt') ?>">Kontakt</a></li>
        </ul>
    </nav>

</header>

