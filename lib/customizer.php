<?php
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
*/