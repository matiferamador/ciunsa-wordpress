<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
            <div class="logo contenedor">
                            <a href="<?php echo site_url('/') ?>">
                                <img src=" <?php echo get_template_directory_uri(); ?>/img/logo_ciunsa.png" alt="logotipo">
                            </a>
                            <div class="widget-redes-sociales">
                            <?php
                            dynamic_sidebar('Redes Sociales') ?>

                            </div>
                          
            </div>
        <div class="contenedor barra-navegacion">
            <div class="hamburguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
                </svg>
            </div>
            
            <div class="contenedor-menu">
                <?php
                $args = array(
                    'theme_location' => "menu-principal",
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                    wp_nav_menu($args);

                ?>
            </div>
        </div>
    </header>