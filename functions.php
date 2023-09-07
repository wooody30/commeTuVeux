<?php

//permet d'ajouter la fonctionnalité de prise en charge des images

add_theme_support ('post-thumbnails');

//permet d'ajouter le titre dans l'entete du site

add_theme_support ('title-tag');

function homemade_remove_menu_pages(){
    remove_menu_page('tools.php');
}
add_action('admin_menu', 'homemade_remove_menu_pages');

//require_once get_template_directory(). 'inc/config.php';