<?php
get_header(); 
?>
    <main class= " seccion contenedor">
        <div>
        <?php
            dynamic_sidebar('Categorias') ?>    

        </div>
        

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

