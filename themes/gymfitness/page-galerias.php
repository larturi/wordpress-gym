<?php get_header(); ?>
    /*
        Template Name: Template Galerias
    */ 
    <main class="contenedor pagina seccion">
        <div class="contenido-principal">
            <?php while(have_posts()): the_post(); ?>
                <h1 class="text-center texto-primario"><?php the_title(); ?></h1>
                <?php 
                    $galeria = get_post_gallery(get_the_ID(), false);
                    $galeria_imagenes_ids = explode(',', $galeria['ids']);
                ?>

                <ul class="galeria-imagenes">
                    
                </ul>
            <?php endwhile; ?>
        </div>
    </main>
<?php get_footer(); ?>