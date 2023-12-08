<?php
    /*
    * Template Name: Institucional
    */
    get_header();
?>
    <main class="contenedor seccion"> 
        <?php 
        get_template_part('template-parts/pagina')
        ?>
    <section class="seccion-autoridades">
        <div> 
            <h3 class="text-center text-primario">Autoridades</h3>
        </div>
            <div class="autoridades">
                        <div>
                            <?php 
                                $presidente = get_field('presidentea');
                                $imagen = $presidente['imagen']['sizes']['medium'];
                                $texto = $presidente['nombre'];
                            ?>
                                <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                            
                                <h4>Presidente/a</h4>
                                <p><?php echo esc_html( $texto ); ?></p>

                            
                        </div>
                        <div>
                            <?php 
                                $vicepresidente = get_field('vicepresidentea');
                                $imagen = $vicepresidente['imagen']['sizes']['medium'];
                                $texto = $vicepresidente['nombre'];
                            ?>
                                <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                                <h4>Vicepresidente/a</h4>

                                <p><?php echo esc_html( $texto ); ?></p>
                        </div>
                        <div>
                            <?php 
                                $secretario = get_field('secretarioa_tecnicoa');
                                $imagen = $secretario['imagen']['sizes']['medium'];
                                $texto = $secretario['nombre'];
                            ?>
                                <img src="<?php echo esc_attr( $imagen ); ?>" alt="Imagen <?php echo esc_attr($texto); ?>">
                                <h4>Secretario/a Tecnico/a</h4>

                                <p><?php echo esc_html( $texto ); ?></p>
                        </div>
            </div>

        <div class="contenedor"> 
            <h3 class="text-center text-primario">Consejeros/as Profesores</h3>
        </div>
                <div class="autoridades contenedor">
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_ingenieria');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Ingeniería</h4>
                                <p> <span>Titular:</span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente:</span> <?php echo esc_html( $texto2 ); ?></p>

                            
                        </div>
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_humanidades');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Humanidades</h4>
                                <p> <span>Titular:</span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente:</span> <?php echo esc_html( $texto2 ); ?></p>

                            
                        </div>
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_ciencias_naturales');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Ciencias Naturales</h4>
                                <p> <span>Titular:</span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente:</span> <?php echo esc_html( $texto2 ); ?></p>

                            
                        </div>
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_ciencias_de_la_salud');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Ciencias de la Salud</h4>
                                <p> <span>Titular:</span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente:</span> <?php echo esc_html( $texto2 ); ?></p>

                            
                        </div>
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_ciencias_economicas');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Ciencias Económicas</h4>
                                <p> <span>Titular: </span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente: </span> <?php echo esc_html( $texto2 ); ?></p>

                            
                        </div>
                        <div class="autoridad">
                            <?php 
                                $facultad = get_field('facultad_de_ciencias_exactas');
                                $texto = $facultad['titular'];
                                $texto2 = $facultad['suplente'];
                            ?>
                            
                                <h4 class="text-secundario">Facultad de Ciencias Exactas</h4>
                                <p> <span>Titular:</span> <?php echo esc_html( $texto ); ?></p>
                                <p> <span>Suplente:</span> <?php echo esc_html( $texto2 ); ?></p>   
                        </div>
                </div>

        <div> <h3 class="text-center text-primario">Consejeros/as Auxiliares</h3><div>
        <div class="autoridades">
            <div>
            <h4 class="text-secundario">Titulares</h4>

            <?php
            the_field('consejerosas_auxiliares_titulares')
                ?>
            </div>
            <div>
            <h4 class="text-secundario">Suplentes</h4>

            <?php
            the_field('consejerosas_auxiliares_suplentes')
                ?>
            </div>
        </div>
        <div> <h3 class="text-center text-primario">Consejeros/as Alumnos/as</h3><div>
        <div class="autoridades">
            <div>
            <h4 class="text-secundario">Titulares</h4>
            <?php
            the_field('consejerosas_alumnosas_titulares')
                ?>
            </div>
            <div>
            <h4 class="text-secundario">Suplentes</h4>
            <?php
            the_field('consejerosas_alumnosas_suplentes')
                ?>
            </div>

        </div>

    </section>
    </main>

<?php 
    get_footer();
?>