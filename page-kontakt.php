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
                <a target="blank" href="https://www.google.com/maps/place/Radosna,+26-605+Radom/data=!4m2!3m1!1s0x4718592a6f1d8507:0x4ad381b637dc8272?sa=X&ved=2ahUKEwjk6szzp9aDAxWIFBAIHTNCBf4Q8gF6BAgWEAA">
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

<div class='page-kontakt__photo' style="background:url(/wp-content/themes/inz/img/1cat-3038243_1920.jpg)">
    <div class='page-kontakt__subtitle'>
        <h1 class="page-kontakt__subtitle-1">Nie przechodź obojętnie!</h1>
        <h2 class="page-kontakt__subtitle-2">Jeśli widzisz bezdomne zwierze, zadzwoń!</h2>
    </div>
</div>


<?php get_footer(); ?>