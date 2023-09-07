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
            <span onclick="openNav()" class="adrouate">&#9776; </span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <?php wp_nav_menu(); ?>
            </div>
        </nav>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.left = "85%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.left = "100%";
            }
        </script>
    </header>
<?php wp_body_open(); ?>