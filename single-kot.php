<?php

/**
 * Szablon dla pojedyńczego kota
 */

get_header();
?>
    <h2 class='animal__title'> <?php the_title(); ?> </h2>
<section class="animal">



    <!-- wytyczne - guidelines -->
    <div class='animal__guidelines'>
        <div class="animal__img--wrapper">
            <div class='animal__img'> <img src="<?php the_field('glowne_zdjecie'); ?> " alt=""> </div>
        </div>
        <div class="animal__info">
            <h6 class='animal__race'><img class='animal__paw' src="/wp-content/themes/inz/img/lapa-zielona.png" alt="lapa-zielona"> rasa: <?php the_field('rasa'); ?> </h6>
            <h6 class='animal__gender'><img class='animal__paw' src="/wp-content/themes/inz/img/lapa-zielona.png" alt="lapa-zielona"> płeć: <?php the_field('plec'); ?> </h6>
            <?php if (get_field('lata') != 0) : ?> <h6 class='animal__age'><img class='animal__paw' src="/wp-content/themes/inz/img/lapa-zielona.png" alt="lapa-zielona"> lata: <?php the_field('lata'); ?> </h6> <?php endif; ?>
            <?php if (get_field('miesiace') != 0) : ?> <h6 class='animal__month'><img class='animal__paw' src="/wp-content/themes/inz/img/lapa-zielona.png" alt="lapa-zielona"> miesiące: <?php the_field('miesiace'); ?> </h6> <?php endif; ?>
        </div>
    </div>
    <p class='animal__description'> Opis: <?php the_field('opis'); ?> </p>

    <div class="accordion">
    <button  class="animal__button" >ZAADOPTUJ</button>
    <div id='adoptionForm' style="display:none"><?php echo do_shortcode('[contact-form-7 id="08e3f9e" title="Formularz adopcyjny"]');?></div>
    </div>
</section>






<?php get_footer(); ?>