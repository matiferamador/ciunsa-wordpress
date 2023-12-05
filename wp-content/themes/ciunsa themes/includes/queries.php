<?php 
function ciunsa_lista_revista($cantidad = -1) {

    ?>
    <ul class=" listado-grid">
                <?php
                    $args= array (
                        'post_type' => 'ciunsa_revista',
                        'posts_per_pege' => $cantidad
                    );
                    $revista = new WP_Query ($args);
                    while ($revista -> have_posts()) {
                        $revista -> the_post();
                        ?>
                        <li class="card">
                            <?php
                            the_post_thumbnail();
                            ?>
                            <div class="contenido">
                                    <a href="<?php the_permalink();?>">
                                    <h4> <?php the_title(); ?></h4>
                                    </a>
                                    <p><?php the_field('fecha_de_publicacion') ?></p>
                            </div>

                        </li>
                        <?php 
                    }
                    wp_reset_postdata();    
                ?>
            </ul>
    <?php

}
function ciunsa_novedades_destacadas() {
    ?>
    <div class="swiper-wrapper">
        <?php 
        $args = array(
            'post_type' => 'novedades_destacadas',
            'order'          => 'ASC',       // En orden ascendente (del más antiguo al más reciente)
                  
        );
        $novedadesDestacadas = new WP_Query($args);

        while ($novedadesDestacadas->have_posts()) {
            $novedadesDestacadas->the_post();
            
            // Obtén la URL de la imagen destacada
            $thumbnail_url = get_the_post_thumbnail_url();
            ?>
            <div style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo $thumbnail_url; ?>');" class="novedadesDestacadas text-center swiper-slide">
                <div class="content">
                
                        <h2>
                        <?php the_title(); ?>
                        </h2>
                
                <!-- <p><?php the_excerpt(); ?></p> -->
                <div class="contenedor-boton">
                    <a href="<?php the_permalink() ?>" class="boton boton-primario ">Más Información</a>
                </div>
                </div>
            </div>
            <?php 
        }

        wp_reset_postdata();
        ?>
    </div>
    <?php
}
