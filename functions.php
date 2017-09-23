<?php

function register_fields() {
    register_setting('general', 'my_first_field', 'esc_attr');
    add_settings_field('my_first_field', '<label for="my_first_field">' . __('Welcome Message', 'my_first_field') . '</label>', 'print_custom_field', 'general');
}

function print_custom_field() {
    $value = get_option('my_first_field', '');
    echo '<input type="text" id="my_first_field" name="my_first_field" value="' . $value . '" />';
}

add_filter('admin_init', 'register_fields');

function wpb_custom_new_menu() {

    register_nav_menus(
            array(
                'my-custom-menu' => __('My Custom Menu'),
                'extra-menu' => __('Extra Menu')
            )
    );
}

add_action('init', 'wpb_custom_new_menu');

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'slider',
    array(
      'labels' => array(
        'name' => __( 'Silder' ),
        'singular_name' => __( 'Slider' )
      ),
      'public' => true,
      'has_archive' => true,
        
    )
  );
}
add_theme_support('post-thumbnails');
add_post_type_support( 'slider', 'thumbnail' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );



if(file_exists(dirname(__FILE__)).'/lib/ReduxCore/framework.php'){
    require_once (dirname(__FILE__) . '/lib/ReduxCore/framework.php');
}
if(file_exists(dirname(__FILE__)).'/lib/sample/config.php'){
    require_once (dirname(__FILE__) . '/lib/sample/config.php');
}

?>