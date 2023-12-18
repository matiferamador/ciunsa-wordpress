<?php
get_header();
?>
    <section>
        <div class="swiper">
            <?php ciunsa_novedades_destacadas(); ?>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> 
        </div>  
    </section>
        <main class="contenedor seccion">
            <section class="seccion">
                <h3 class="text-secundario">Últimas Novedades</h3>

                <ul class="listado-grid-novedades data-aos="fade-up data-aos-duration="3000">
                    <?php
                    $args = array (
                        'post_type' => 'post',
                        'posts_per_page' => 4
                    );
                    $blog = new WP_Query($args);
                    while($blog->have_posts()) {
                        $blog -> the_post();
                        get_template_part('template-parts/blog');
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
                <div class="contenedor-boton">
                <a href="<?php echo esc_url( get_permalink(get_page_by_title('Novedades'))) ?>" class="boton boton-primario ">Ver todas las novedades</a>

                </div>
            </section>
        </main>
    <section class="seccion contenedor"> 
        <h3 class="text-secundario">Conocé Comunidad CIUNSa</h3>

        <?php
        ciunsa_lista_revista(2);
        ?>
        <div class="contenedor-boton">
        <a href="<?php echo esc_url( get_permalink(get_page_by_title('Comunidad CIUNSa'))) ?>" class="boton boton-primario ">Ir a Comunidad CIUNSa</a>

        </div>
    </section>
    <section class="nav-enlaces-imagenes-bg">
        <h5 class="text-center">Consejo de Investigacion - Universidad Nacional de Salta</h5>

        <div class="nav-enlaces-imagenes">
            <?php
            dynamic_sidebar('Barra Enlaces Recomendados') ?>
        </div>
        
    </section>
    
<?php 
        get_footer();
?>
