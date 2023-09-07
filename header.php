<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php wp_head(); ?>

</head>

<body<?php body_class(); ?>>

    <header class="header">
        <nav>
            <a href="<?php echo home_url ('/');?>">
                <img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo-ns.png" alt="">
            </a>
            <?php wp_nav_menu(); ?>
        </nav>
<?php wp_body_open(); ?>