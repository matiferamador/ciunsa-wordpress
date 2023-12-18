<footer class="footer">
        <hr>

        <div class="contenido-footer  contenedor">
         
            <p class="copyright"> <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
            <div class="menu_footer">
            <?php
                $args = array (
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>

            </div>
        


        </div>
        <div class="contenido-footer_info contenedor">
            <div>
                <p>Consejo de Investigacion Universidad Nacional de Salta </p>
                <p>Av. Bolivia 5150, Salta</p>

            </div>
            <div>
                <h4>Contacto</h4>
                <p>
                    <a href="mailto:cisec@unsa.edu.ar">cisec@unsa.edu.ar</a>
                </p>
                <p>
                    <a href="tel:+54 387 4255336">+54 387 4255336</a>
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>