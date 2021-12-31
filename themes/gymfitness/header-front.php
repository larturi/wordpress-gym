<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
</body>

<header class="site-header">
    <div class="contenedor header-grid">
        <div class="barra-navegacion">

            <div class="logo">
                <a href="<?php echo site_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo Sitio">
                </a>
            </div>

            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>

        </div>

        <div class="tagline text-center">
            <h1>
                <?php the_field('encabezado_hero'); ?>
                <p>
                    <?php the_field('contenido_hero'); ?>
                </p>
            </h1>
        </div>
    </div>
</header>