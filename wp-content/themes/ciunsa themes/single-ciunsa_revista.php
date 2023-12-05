<?php
get_header();
?>
    <main class="contenedor seccion con-sidebar" >
        <section>
        <?php 
         get_template_part('template-parts/pagina')
            ?>
        </section>

        <?php
            get_sidebar('revista');
        ?>
      
    </main>
    
<?php 
   get_footer();
 ?>
