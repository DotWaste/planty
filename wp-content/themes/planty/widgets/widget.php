<?php

function mon_register_widget() {
    register_widget( 'mon_widget' );
}

add_action( 'widgets_init', 'mon_register_widget' );



class mon_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            // identifiant du widget
            'mon_widget',
            // nom du widget
            __('Mon Premier Widget', ' mon_widget_domain'),
            // description du widget
            array( 'description' => __( 'Mon Premier Widget Personnalisé', 'mon_widget_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        //si un titre existe
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        //sortie du widget
        echo __( 'Ceci est un widget personnalisé !', 'mon_widget_domain' );
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
        else
            $title = __( 'Mon Widget', 'mon_widget_domain' );
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>">
        <?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p><?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
};?>