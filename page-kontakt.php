<?php
get_header();
?>
<section class="page-kontakt">
    <div class="page-kontakt__data">
        <h3>Dane teleadresowe</h3>
        <div class="page-kontakt__contact">
            <div class="page-kontakt__phone1">
                <a href="tel:+48713333222">
                    <img src="<?php echo get_template_directory_uri() . '/img/phone1.png' ?>" alt="">
                    <span>713-333-222</span></a>
            </div>
            <div class="page-kontakt__email">
                <a href="mailto:Schronisko_Koci_Gaj@wp.pl">
                    <img src="<?php echo get_template_directory_uri() . '/img/email1.png' ?>" alt="">
                    <span>Schronisko_Koci_Raj@wp.pl</span></a>
            </div>
            <div class="page-kontakt__point">
                <a href="addres:Radom ul.Radosna">
                    <img src="<?php echo get_template_directory_uri() . '/img/point1.png' ?>" alt="">
                    <span>Radom ul.Radosna </span></a>
            </div>
        </div>
    </div>

    <div class="page-kontakt__form">
        <h3 class="page-kontakt__inf">W razie pytań napisz do nas</h3>

        <?php
        echo do_shortcode('[contact-form-7 id="f3d7a64" title="Formularz 1"]');
        ?>

    </div>
</section>


<?php get_footer(); ?>