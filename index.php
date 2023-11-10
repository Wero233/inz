<?php get_header();
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.

?>

<body>
    <div class="row">
        <div class="=col-sm-8 blog-main">
            <?php get_template_part('content', get_post_format()) ?>
        </div>
        <?php 
        if(is_home() ):
            get_sidebar('home');
        else :
            get_sidebar();
            
        endif;
        ?>
</div>
<?php get_footer() ?>

