<?php

add_action('after_setup_theme','instalarTemplete');

//PARA CREAR MENU
function instalarTemplete()
{
    register_nav_menu('main-menu',array('main-menu' => esc_html__('Menu Principal')));
}

add_action('wp_enqueue_scripts','scriptsTemplate');

//PARA AGREGAR LOS SCRIPTS, SEA: CSS, JS, ETC...
function scriptsTemplate()
{
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('style_Templete',get_stylesheet_directory_uri().'/css/style_Templete.css');
    wp_enqueue_script('jquery');

}


//PARA ACTIVAR O CREAR SIDE BAR

add_action('widgets_init','inicialWidget');

function inicialWidget(){

    register_sidebar( 

        array(
            'name' => esc_html__('Área de barra lateral derecha'),
            'id' => 'barra_lateral_1'
        )

    );
}


?>