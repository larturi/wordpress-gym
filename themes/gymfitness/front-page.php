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

<section class="instructores">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">
            Nuestros Instructores
        </h2>
        
        <p class="text-center">
            <?php the_field('instructores_parrafo'); ?>
        </p>

        <ul class="listado-instructores">
            <?php 
                $args = array(
                    'post_type' => 'instructores',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );
                $instructores = new WP_Query($args);
                while($instructores->have_posts()):
                    $instructores->the_post();   
            ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <div class="especialidad">
                        <?php 
                            $esp = get_field('especialidad'); 
                            foreach($esp as $e):
                        ?>
                            <span class="etiqueta"><?php echo esc_html($e); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>

<section class="testimoniales">
    <h2 class="text-center texto-blanco">
        Testimoniales
    </h2>

    <div class="contenedor-testimoniales">
        <ul class="listado-testimoniales">
            <?php
                $args = array(
                    'post_type' => 'testimoniales',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                );
                $testimoniales = new WP_Query($args);
                while($testimoniales->have_posts()):
                    $testimoniales->the_post();
            ?>
                <li class="testimonial text-center">
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>
                    <footer class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <p> <?php the_title(); ?></p>
                    </footer>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>

<?php get_footer() ?>