<li class="card">
    <?php the_category();?>
        <?php
            the_post_thumbnail();
            ?>
    <div class="contenido">
            <a href="<?php the_permalink();?>">
            <h4> <?php the_title(); ?> </h4>
            </a>
            <p class="meta">
                <span>Por: </span>
                <a href=""> 
                    <?php echo get_the_author_meta('display_name'); ?>
                </a>
            </p>
            <p class="meta">
                <span>Fecha: </span>
                <a href="">
                    <?php the_time(get_option('date_format')); ?>
                </a>
            </p>                          
    </div>
</li>