<?php
get_header(); 
?>
    <main class= " seccion contenedor">
    <?php
            dynamic_sidebar('Sidebar Barra Busqueda por Categoria') ?>

        <ul class="listado-grid-novedades">
            <?php 
            while (have_posts()) {
                the_post();
               get_template_part('template-parts/blog');
            } 
            ?>
     </ul>
     <?php
            the_posts_pagination();
        ?>
    </main>
    

    <?php 
    get_footer();

    ?>

