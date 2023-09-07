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
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <?php wp_nav_menu(); ?>
            </div>
        </nav>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "15%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
<?php wp_body_open(); ?>