<?php
get_header(); 
?>
    <main class= " seccion contenedor">
        <?php
            $categoria = get_queried_object();
        ?>
        <h3 class="text-primario"> Categoría: <?php echo $categoria -> name; ?></h3>
        <ul class="listado-grid-novedades">
            <?php 
            while (have_posts()) {
                the_post();
            get_template_part('template-parts/blog');
            } 
            ?>
    </ul>
    </main>
    

    <?php 
    get_footer();

    ?>

