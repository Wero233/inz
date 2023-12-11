<?php

/**
 * Szablon dla pojedyńczego psa
 */

get_header();
?>
<section class="animal">

    <?php the_title(); ?>



        <?php echo get_field('rasa'); ?>
        <?php echo get_field('opis'); ?>

    <img src="<?php echo get_field('glowne_zdjecie'); ?> " alt="">

</section>




<?php get_footer(); ?>