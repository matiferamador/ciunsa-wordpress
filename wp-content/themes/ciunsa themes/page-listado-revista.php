<?php
    /*
    * Template Name: Listado de Revistas
    */
    get_header();
?>
    <main class="contenedor seccion" >
   
    <?php 
         get_template_part('template-parts/pagina')
            ?>
           <?php ciunsa_lista_revista(); ?>
    </main>
    
<?php 
   get_footer();
 ?>
