<?php

/**
 * Szablon dla archiwum psów
 */

get_header();
?>

<main class="archive">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <section>
                <div class='archive__img'> <img src="<?php the_field('glowne_zdjecie', get_the_ID()); ?> " alt=""> </div>
                <h2> <?php the_title();?></h2>
                <a href="<?php the_permalink(); ?>">Zobacz</a>
            </section>
    <?php
        }
    }
    ?>

</main>






<?php get_footer(); ?>