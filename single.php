<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post">
        <h1>La vérite : <?php the_title(); ?></h1>
        <div class="post_meta">
            <p>
                Vérité révélée aux esprits libres par <?php the_author(); ?> le <?php the_date(); ?>
                Catégorie :  <?php the_category(); ?>
            </p>
        </div>
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </article>
    <a href="<?php echo home_url ('/liste');?>"><h2>Retour aux articles</h2></a>
    <?php comments_template(); // Par ici les commentaires ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>