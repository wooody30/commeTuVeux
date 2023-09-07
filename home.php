<?php get_header(); ?>
<h1>Derniers articles</h1>
<div class="loop">
<?php if(have_posts()) : while( have_posts()) : the_post(); ?>


<article class="post_mini">
    <?php the_category(); ?>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <p class="post_meta">
        Vérité révélée aux esprits libres par <?php the_author(); ?> le <?php the_date(); ?>
    </p>
    <?php the_excerpt(); ?>
</article>


<?php endwhile;endif;?>
</div>
<?php get_footer(); ?>
