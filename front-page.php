<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Orbitron:wght@700&family=Wallpoet&display=swap" rel="stylesheet">
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

<?php get_template_part('parts/caroussel');?>

    <h1 class="titreprincipal">La vérité n'est pas ailleurs</h1>
<?php //get_template_part('parts/newsletter');?>
<p style="text-align: center">Face à la censure et à la bien-pensance des merdias, nous avons décidé de maintenir ce site d'informations alternatif
et objectif pour rendre compte de la vraie réalité de notre monde, sans céder aux injonctions des puissants qui voudraient nous faire taire.</p>
<p style="text-align: center">Bienvenue et gardez les yeux ouverts.</p>
<div style="text-align: center">
<a href="<?php echo home_url ('/liste');?>">
    <button class='glowing-btn'>
        <span class='glowing-txt'>
            Clique<span class="faulty-letter">z ici s</span>i vous n<span class="faulty-letter">'êtes p</span>as un mouton
        </span>
    </button>
</a>
</div>


<?php get_footer(); ?>