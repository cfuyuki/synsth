<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/roots-translations
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');

/**
 * Register sidebars
 */
function roots_widgets_init() {
  register_sidebar(array(
    'name'          => __('Menu', 'roots'),
    'id'            => 'sidebar-menu',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('Primary', 'roots'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  // UPD:
  register_sidebar(array(
    'name'          => __('Nav', 'roots'),
    'id'            => 'sidebar-nav',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('Nav Pages', 'roots'),
    'id'            => 'sidebar-nav-pages',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('Nav Page', 'roots'),
    'id'            => 'sidebar-nav-page',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('Footer', 'roots'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'roots_widgets_init');


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 
function ts_register_theme_customizer( $wp_customize ) {
 
    $wp_customize->add_setting(
        'ts_link_color',
        array(
            'default'     => '#000000'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'ts' ),
                'section'    => 'colors',
                'settings'   => 'ts_link_color'
            )
        )
    );
 
}
add_action( 'customize_register', 'ts_register_theme_customizer' );*/



/**
 * This file contains the settings for the WordPress Theme Customizer (backend)
 */
function ts_customizer( $wp_customize ) {

    class Ts_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
     
        public function render_content() {
            ?>
                <label>
                    <span class="customize-control-title"><?php echo fesc_html( $this->label ); ?></span>
                    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                </label>
            <?php
        }
    }

    /* --- SECTIONS --- */
    ////////////////////////

    $wp_customize->remove_section( 'title_tagline');
    $wp_customize->remove_section( 'static_front_page');

     $wp_customize->add_section('sidebar', array(
        'title' => 'Logo',
        'priority' => 12
    ));
    

    /* --- SIDEBAR --- */
    ////////////////////////
 
    /* Logo */

    $wp_customize->add_setting(
        'ts_logo', array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ts_logo',
            array(
                'label' => 'Default logo',
                'section' => 'sidebar',
                'settings' => 'ts_logo'
            )
        )
    );

    /* Retina Logo */

    $wp_customize->add_setting(
        'ts_logo_x2', array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ts_logo_x2',
            array(
                'label' => 'Retina logo',
                'section' => 'sidebar',
                'settings' => 'ts_logo_x2'
            )
        )
    );

    /* Favicon */

    $wp_customize->add_setting(
        'ts_fav', array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ts_fav',
            array(
                'label' => 'Favicon',
                'section' => 'sidebar',
                'settings' => 'ts_fav'
            )
        )
    );

    /* Logo Width */

    $wp_customize->add_setting(
        'ts_logo_width', array(
            'default' => '166',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control('ts_logo_width', 
        array(
            'label' => 'Logo width',
            'section' => 'sidebar',
            'settings' => 'ts_logo_width',
            'type' => 'text'
        )
    );

    /* Logo Height */

    $wp_customize->add_setting(
        'ts_logo_height', array(
            'default' => '29',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control('ts_logo_height', 
        array(
            'label' => 'Logo height',
            'section' => 'sidebar',
            'settings' => 'ts_logo_height',
            'type' => 'text'
        )
    );

}

add_action('customize_register', 'Ts_customizer');
