<?php get_template_part('partials/head'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php  get_the_title();?></h1>
            <div>
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php get_template_part('partials/foot') ?>