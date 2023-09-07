<?php get_header(); ?>
<h1>Le Mag</h1>
<?php if(have_posts()) : while( have_posts()) : the_post(); ?>


<article class="post">
    <?php the_category(); ?>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
    <?php the_post_thumbnail(); ?>
    <p class="post_meta">
        Vérité révélée aux esprits libres par <?php the_author(); ?> le <?php the_date(); ?>
    </p>
    <?php the_excerpt(); ?>
</article>


<?php endwhile;endif;?>
<?php get_footer(); ?>
