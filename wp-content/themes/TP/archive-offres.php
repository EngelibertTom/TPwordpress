<?php get_template_part('partials/head'); ?>
<?php while (have_posts()) : the_post(); ?>
    <article>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
        <?php endif; ?>
        <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a> <!--rechercher pour permalink-->

    </article>
<?php endwhile; ?>
<?php get_template_part('partials/foot') ?>