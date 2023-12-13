<?php
while (have_posts()): the_post();

    // Obtén el ID de la página actual
    $current_page_id = get_the_ID();

    // Verifica si la página actual tiene un padre
    $parent_id = wp_get_post_parent_id($current_page_id);

    // Inicializa el título de la página superior
    $parent_title = '';

    // Si la página actual tiene un padre, obtén el título de la página superior.
    if ($parent_id) {
        $parent_title = get_the_title($parent_id);
    }
    $current_title = get_the_title();

    // Imprime el título combinado si hay un título de la página superior
    if ($parent_title) {
        echo '<h3 class="text-center text-primario">' . esc_html($parent_title . ' / ' . $current_title) . '</h3>';
    } else {
        // Si la página actual no tiene un padre, imprime solo el título de la página actual
        echo '<h3 class="text-center text-primario">' . esc_html($current_title) . '</h3>';
    }

    if (has_post_thumbnail()) {
        the_post_thumbnail("full", array('class' => 'imagen-destacada'));
    }
    ?>
    <p class="informacion-revista">
        <?php the_field('fecha_publicacion') ?>
    </p>
    <?php
    the_content();

endwhile;
?>

