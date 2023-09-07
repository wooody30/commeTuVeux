<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post">
        <h1>La vérite : <?php the_title(); ?></h1>
        <div class="post_meta">
            <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
            <p>
                Vérité révélée aux esprits libres par <?php the_author(); ?> le <?php the_date(); ?>
                Catégorie :  <?php the_category(); ?>
                Tags :  <?php the_tags(); ?>
            </p>
        </div>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>