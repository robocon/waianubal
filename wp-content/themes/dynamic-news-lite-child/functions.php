<?php

class Waianubl_Social_Widget extends WP_Widget {

    function __construct() {

        parent::__construct(

            // base ID of the widget
            'wbi_social_icon',

            // name of the widget
            __('Waianubal Social Icons', 'waianubal' ),

            // widget options
            array (
                'description' => __( 'Waianubal Social Icons', 'waianubal' )
            )

        );

    }

    function form( $instance ) {

        $defaults = array(
            'title' => 'Social Icons'
        );

        $title = $instance[ 'title' ];
        $facebook_link = $instance[ 'facebook_link' ];
        $twitter_link = $instance[ 'twitter_link' ];
        $instagram_link = $instance[ 'instagram_link' ];
        $feed_link = $instance[ 'feed_link' ];


        // markup for form ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook_link' ); ?>">Facebook Link:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'facebook_link' ); ?>" name="<?php echo $this->get_field_name( 'facebook_link' ); ?>" value="<?php echo esc_attr( $facebook_link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter_link' ); ?>">Twitter Link:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'twitter_link' ); ?>" name="<?php echo $this->get_field_name( 'twitter_link' ); ?>" value="<?php echo esc_attr( $twitter_link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram_link' ); ?>">Instagram Link:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'instagram_link' ); ?>" name="<?php echo $this->get_field_name( 'instagram_link' ); ?>" value="<?php echo esc_attr( $instagram_link ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'feed_link' ); ?>">Feed Link:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'feed_link' ); ?>" name="<?php echo $this->get_field_name( 'feed_link' ); ?>" value="<?php echo esc_attr( $feed_link ); ?>">
        </p>
    <?php
    }

    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'facebook_link' ] = strip_tags( $new_instance[ 'facebook_link' ] );
        $instance[ 'twitter_link' ] = strip_tags( $new_instance[ 'twitter_link' ] );
        $instance[ 'instagram_link' ] = strip_tags( $new_instance[ 'instagram_link' ] );
        $instance[ 'feed_link' ] = strip_tags( $new_instance[ 'feed_link' ] );
        return $instance;

    }

    function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }

        ?><div id="wbi_social_icon"><?php
        if( !empty($instance['facebook_link']) ){
            ?><a href="<?php echo $instance['facebook_link'];?>" class="genericon genericon-facebook" target="_blank"></a><?php
        }

        if( !empty($instance['twitter_link']) ){
            ?><a href="<?php echo $instance['twitter_link'];?>" class="genericon genericon-twitter" target="_blank"></a><?php
        }

        if( !empty($instance['instagram_link']) ){
            ?><a href="<?php echo $instance['instagram_link'];?>" class="genericon genericon-instagram" target="_blank"></a><?php
        }

        if( !empty($instance['feed_link']) ){
            ?><a href="<?php echo $instance['feed_link'];?>" class="genericon genericon-feed" target="_blank"></a><?php
        }
        ?></div><?php
        echo $args['after_widget'];
    }

}
/*******************************************************************************
function tutsplus_register_list_pages_widget() - registers the widget.
*******************************************************************************/
function wbi_register_social_widget() {
    register_widget( 'Waianubl_Social_Widget' );
}
add_action( 'widgets_init', 'wbi_register_social_widget' );


class Waianubl_Advertise_Widget extends WP_Widget {

    function __construct() {

        parent::__construct(

            // base ID of the widget
            'wbi_advertise_icon',

            // name of the widget
            __('Waianubal Advertise', 'waianubal' ),

            // widget options
            array (
                'description' => __( 'Waianubal Advertise', 'waianubal' )
            )

        );

    }

    function form( $instance ) {

        $image_url = $instance[ 'image_url' ];
        $link_url = $instance[ 'link_url' ];

        // markup for form ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">Image url:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" value="<?php echo esc_attr( $image_url ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link_url' ); ?>">Link url:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" value="<?php echo esc_attr( $link_url ); ?>">
        </p>
    <?php
    }

    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance[ 'image_url' ] = strip_tags( $new_instance[ 'image_url' ] );
        $instance[ 'link_url' ] = strip_tags( $new_instance[ 'link_url' ] );
        return $instance;

    }

    function widget( $args, $instance ) {

        echo $args['before_widget'];
        ?><div id="wbi_advertise_icon"><?php

        if( !empty($instance['image_url']) AND !empty($instance['link_url']) ){
            ?><a href="<?php echo $instance['link_url'];?>" target="_blank"><img src="<?php echo $instance['image_url'];?>"></a><?php
        }
        ?></div><?php
        echo $args['after_widget'];
    }

}
/*******************************************************************************
function tutsplus_register_list_pages_widget() - registers the widget.
*******************************************************************************/
function wbi_register_adv_widget() {
    register_widget( 'Waianubl_Advertise_Widget' );
}
add_action( 'widgets_init', 'wbi_register_adv_widget' );

/**
 * Shortcode for google map static
 */
if( !function_exists('wbmap_func') ){
	function wbmap_func( $atts ){

		$post = get_post($atts['page-id']);

        if( !is_null($post) ){

            $key = get_option('wb_staticmap_key');
            if( empty($key) ){
                return 'Please settings your Google Map API Key';
            }

            $default_place = $atts['lat'].",".$atts['lng'];
            $src = "https://maps.googleapis.com/maps/api/staticmap?center=".$atts['lat'].",".$atts['lng']."&zoom=15&size=600x300&maptype=roadmap&markers=color:red%7Clabel:%7C".$atts['lat'].",".$atts['lng']."&key=".$api_key;
            $img = '<a href="https://www.google.com/maps/place/'.$default_place.'" target="_blank"><img src="'.$src.'"></a>';

            return $img;
        }
	}
	add_shortcode( 'wbmap', 'wbmap_func' );
}

/* Form and Save data about GGMap API KEY */
add_action('admin_menu', 'wb_staticmap_key');

function wb_staticmap_key() {
    add_submenu_page(
        'options-general.php',
        'GMap Static',
        'GMap Static',
        'manage_options',
        'wb-static-map-key',
        'wb_staticmap_key_callback'
    );

    add_action( 'admin_init', 'register_wb_staticmap_settings' );
}

function register_wb_staticmap_settings(){
    register_setting( 'wb-staticmap-settings-group', 'wb_staticmap_key' );
}

function wb_staticmap_key_callback() {
    ?>
    <div class="wrap"><div id="icon-tools" class="icon32"></div>
        <h2>Google Static API Key</h2>
        <form action="options.php" method="post">
            <?php settings_fields( 'wb-staticmap-settings-group' ); ?>
            <?php do_settings_sections( 'wb-staticmap-settings-group' ); ?>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="wb_staticmap_key">Google Static Maps API</label>
                        </th>
                        <td>
                            <input type="text" id="wb_staticmap_key" name="wb_staticmap_key" value="<?php echo esc_attr( get_option('wb_staticmap_key') ); ?>">
                            <div class="">
                                <a href="https://developers.google.com/youtube/registering_an_application" target="_blank">* Obtaining authorization credentials</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
    global $post;
    return '<div style="text-align: right;"><a class="more-link" href="' . get_permalink() . '#more-'.$post->ID.'">อ่านต่อ</a></div>';
}
