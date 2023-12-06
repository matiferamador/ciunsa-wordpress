<?php
            while (have_posts()): the_post();
                the_title('<h3 class= "text-center text-primario">', '</h3>');
                if(has_post_thumbnail()) {
                    the_post_thumbnail("full", array ('class' => 'imagen-destacada'));
                }
                ?>
                <div class="meta-info">
                        <p class="meta">
                        <span>Por: </span>
                        <a href="">
                            <?php echo get_the_author_meta('display_name'); ?>
                        </a>
                        </p>
                        
                        <div class="categoria">  
                            <p class="meta">
                            <span>Categoria:</span>
                            </p>
                            <?php the_category();
                            ?>
                          
                        </div>
                        <p class="meta">
                        <span>Fecha: </span>
                        <a href="">
                            <?php the_time(get_option('date_format')); ?>
                        </a>
                        </p>
                      
               </div>
                 
             
                <?php
                the_content();
            endwhile;
