<?php

// Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

// Cuando el tema es activado
function gymfitness_setup() {

    // Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //Imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);

}
add_action('after_setup_theme', 'gymfitness_setup');

// Menu de navegación
function gymfitness_menu() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ));
}
add_action('init', 'gymfitness_menu');

// Styles y Scripts
function gymfitness_scripts_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFonts'), '1.0.0');

    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

// Definir zona de Witgets

function gymfitness_widgets() {
    // Deshabilitar el manejo de widgets desde el editor de bloques de Gutenberg
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
    
    // Deshabilitar el editor de bloques para el manejo de widgets
    add_filter( 'use_widgets_block_editor', '__return_false' );

    register_sidebar( array(
        'name'          => __( 'Sidebar 1', 'gymfitness' ),
        'id'            => 'sidebar_1',
        'description'   => __( 'Agrega widgets aquí', 'gymfitness' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-primario">',
        'after_title'   => '</h3>'
    ));
    register_sidebar( array(
        'name'          => __( 'Sidebar 2', 'gymfitness' ),
        'id'            => 'sidebar_2',
        'description'   => __( 'Agrega widgets aquí', 'gymfitness' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-primario">',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');