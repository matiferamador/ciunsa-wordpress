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
            <section class=" seccion contenedor">
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
    <section>
        <div class="contenedor">  <h3 class="text-secundario"> Áreas </h3></div>
                <div class="areas">
                    <div class="area">
                        <?php 
                            $area1 = get_field('area_1');
                            $imagen = $area1['imagen']['sizes']['medium_large'];
                            $texto = $area1['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                        
                    </div>

                    <div class="area">
                        <?php 
                            $area2 = get_field('area_2');
                            $imagen = $area2['imagen']['sizes']['medium_large'];
                            $texto = $area2['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>

                    <div class="area">
                        <?php 
                            $area3 = get_field('area_3');
                            $imagen = $area3['imagen']['sizes']['medium_large'];
                            $texto = $area3['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>

                    <div class="area">
                        <?php 
                            $area4 = get_field('area_4');
                            $imagen = $area4['imagen']['sizes']['medium_large'];
                            $texto = $area4['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>
                    <div class="area">
                        <?php 
                            $area5 = get_field('area_5');
                            $imagen = $area5['imagen']['sizes']['medium_large'];
                            $texto = $area5['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>
                    <div class="area">
                        <?php 
                            $area6 = get_field('area_6');
                            $imagen = $area6['imagen']['sizes']['medium_large'];
                            $texto = $area6['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>
                    <div class="area">
                        <?php 
                            $area7 = get_field('area_7');
                            $imagen = $area7['imagen']['sizes']['medium_large'];
                            $texto = $area7['texto'];
                        ?>
                        <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                        <p><?php echo esc_html( $texto ); ?></p>
                    </div>        
                </div>

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
