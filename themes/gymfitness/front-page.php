<?php get_header('front') ?>

<section class="bienvenida text-center seccion">
    <h2 class="texto-primario">
        <?php the_field('encabezado_bienvenida'); ?>
    </h2>
    <p>
        <?php the_field('texto_bienvenida'); ?>
    </p>
</section>

<div class="seccion-areas">
    <ul class="contenedor-areas">
       <!-- Muestra las 4 areas, imagen y texto -->
        <?php for($i = 1; $i<=4; $i++) { ?>
            <li class="area">
                <?php 
                    $area = get_field('area_' . $i);
                    $imagen = wp_get_attachment_image_src($area['area_imagen'], 'mediano')[0];
                ?>
                <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen">
                <p> <?php echo esc_attr($area['area_texto']); ?> </p>
            </li>
        <?php } ?>
    </ul>
</div>

<section class="clases">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">
            Nuestras Clases
        </h2>
        <?php gymfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a 
                href="<?php echo esc_url(get_permalink(get_page_by_title('Clases'))); ?>"
                class="boton boton-primario"
            >
                Ver todas las clases
            </a>
        </div>
    </div>
</section>

<?php get_footer() ?>