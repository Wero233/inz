
<?php if (have_posts()): while ( have_posts() ) : the_post(); ?>
    <div class="blog-post">
        <h2><?php the_title() ?></h2>
        <?php the_excerpt() ?>
    </div>
<?php endwhile; else: ?>
    <h4> Brak postów </h4>
<?php endif  ?>