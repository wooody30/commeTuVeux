<?php get_header(); ?>
<h1>Le Mag</h1>
<?php if(have_posts()) : while( have_posts()) : the_post(); ?>
<article class="post">
    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail(); ?>
    <p class="post_meta">
        Edité le
        Par
    </p>

    <?php the_excerpt(); ?>

</article>
<?php endwhile;endif;?>
<?php get_footer(); ?>
