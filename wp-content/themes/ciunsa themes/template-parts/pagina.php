<?php
            while (have_posts()): the_post();
                the_title('<h3 class= "text-center text-primario">', '</h3>');
                if(has_post_thumbnail()) {
                    the_post_thumbnail("full", array ('class' => 'imagen-destacada'));
                }
                ?>
                <p class=" informacion-revista">
                <?php the_field('fecha_de_publicacion') ?>
                
                </p>
                <?php
                the_content();
            endwhile;