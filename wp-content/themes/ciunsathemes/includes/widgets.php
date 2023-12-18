<?php
if(!defined('ABSPATH')) die();
class Ciunsa_Revista_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'ciunsa_widget',
			esc_html__( 'Revista CIUNSa', 'ciunsa' ), 
			array( 'description' => esc_html__( 'Agrega las Revistas como Widget', 'ciunsa' ), )
		);
	}
	public function widget( $args, $instance ) {
        ?>
        <ul class="revista-sidebar">
            <?php
            $args= array (
                'post_type' => 'ciunsa_revista',
                'post_per_page' => $instance['cantidad'],
                
            );
            $revista = new WP_Query ($args);
            while ($revista -> have_posts()) {
                $revista -> the_post();
                ?>
                <li>
                    <div class="imagen">
                        <?php the_post_thumbnail('medium');
                        ?>  
                    </div>
                    <div class="contenido-revista">
                    <a href="<?php the_permalink();?>">
                                    <h3> <?php the_title(); ?></h3>
                                    </a>
                                    <p><?php the_field('fecha_de_publicacion') ?></p>
                    </div>
                </li>
                <?php
            }
            wp_reset_postdata();
            ?>
        </ul>
        <?php  
	}
    public function form( $instance ) {
            $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : 5;
            ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
                    <?php esc_attr_e('¿Cuántas revistas deseas mostrar?', 'ciunsa') ?>
                </label>
                <input
                    class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
                    name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
                    type="number"
                    value="<?php echo esc_attr($cantidad) ?>"
                />
            </p>
            <?php
   	}
	public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : 5;
        return $instance;
	}
} 
function ciunsa_registrar_widget() {
    register_widget('Ciunsa_Revista_Widget');
}
add_action('widgets_init', 'ciunsa_registrar_widget');
// widget para nav de imagenes y enlaces

class Enlace_Imagen_Widget extends WP_Widget {
    // Constructor del widget
    public function __construct() {
        parent::__construct(
            'enlace_imagen_widget',
            'Enlace con Imagen Widget',
            array('description' => 'Widget que permite agregar un enlace y una imagen.')
        );
    }
    // Función para mostrar el formulario de configuración del widget
    public function form($instance) {
        $enlace = !empty($instance['enlace']) ? $instance['enlace'] : '';
        $imagen_url = !empty($instance['imagen_url']) ? $instance['imagen_url'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('enlace'); ?>">Enlace:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('enlace'); ?>" name="<?php echo $this->get_field_name('enlace'); ?>" type="text" value="<?php echo esc_attr($enlace); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('imagen_url'); ?>">URL de la Imagen:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('imagen_url'); ?>" name="<?php echo $this->get_field_name('imagen_url'); ?>" type="text" value="<?php echo esc_attr($imagen_url); ?>" />
        </p>
        <?php
    }
    // Función para mostrar el contenido del widget en el sitio
    public function widget($args, $instance) {
        $enlace = !empty($instance['enlace']) ? $instance['enlace'] : '';
        $imagen_url = !empty($instance['imagen_url']) ? $instance['imagen_url'] : '';
        echo $args['before_widget'];
        if (!empty($enlace) && !empty($imagen_url)) {
            echo '<a href="' . esc_url($enlace) . '" target="_blank">';
            echo '<img src="' . esc_url($imagen_url) . '" alt="Enlace con Imagen" />';
            echo '</a>';
        }

        echo $args['after_widget'];
    }
}
// Registra el widget
function registrar_enlace_imagen_widget() {
    register_widget('Enlace_Imagen_Widget');
}
add_action('widgets_init', 'registrar_enlace_imagen_widget');