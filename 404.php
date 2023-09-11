<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage commeTuVeux
 */

get_header();
?>
<br>
    <div class="katsankatr"><br>
        <img  src="<?php echo get_template_directory_uri();?>/img/404.webp" alt=""><br>
    </div>
    <br>
    <h1 class="rick">La page que vous avez demandée a été censurée par le gouver-nous-ment</h1><br>
    <h2>Cliquez sur Rick pour retrouver le chemin de la vérité</h2><br>
    <div class="katsankatr"><br>
        <a href="<?php echo home_url ('/');?>"><h2>
        <img src="<?php echo get_template_directory_uri();?>/img/404.gif" alt=""><br>
        </a>
    </div><br>


<?php
get_footer();
