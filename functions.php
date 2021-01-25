<?php
//Permet navigation style BootstrapS
require get_template_directory() . '/bootstrap-navwalker.php';

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Emplacement des menus
register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
));
/**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comments-helper.php';

function webdevlyonblog_register_assets()
{
    // Déclarer jQuery
    wp_deregister_script('jquery'); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        false,
        '3.5.1',
        true
    );

    // Déclarer bundle Bootstrap
    wp_enqueue_script(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js',
        false,
        '5.0.0-alpha2',
        true
    );

    // Déclarer le JS
    wp_enqueue_script(
        'webdevlyonblog',
        get_template_directory_uri() . '/js/script.js',
        array(),
        '1.0',
        true
    );

    // Déclarer un CSS Bootstrap
    wp_enqueue_style(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css',
        array(),
        '5.0.0-alpha2'
    );
    // Déclarer un CSS FontAwesome
    wp_enqueue_style(
        'fontawesome',
        get_template_directory_uri() . '/css/all.min.css',
        array(),
        '5.15.1'
    );

    //Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'webdevlyonblog',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}


add_action('wp_enqueue_scripts', 'webdevlyonblog_register_assets');
