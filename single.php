<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post">
        <h1>Artcile du jour bonjour <?php the_title(); ?></h1>
        <div class="post_meta">
            <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
            <p>
                Publié le <?php the_date(); ?>
                par <?php the_author(); ?>
                Dans la catégorie <?php the_category(); ?>
                avec les étiquettes suivantes <?php the_tags(); ?>
            </p>
        </div>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>