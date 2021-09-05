<?php
add_action('wp_enqueue_scripts','scriptsTemplate');

//PARA AGREGAR LOS SCRIPTS, SEA: CSS, JS, ETC...
function scriptsTemplate()
{
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('blog',get_stylesheet_directory_uri().'/css/blog.css');

    //Archivos JS
    wp_enqueue_script('jquery');

    wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('holder', get_template_directory_uri().'/js/holder.min.js');

}


//-----------------------------------------------------------------------------------------------

//Acciones a ejecutar para nuestro template o tema, (en especial al inicio) NOT SURE.

add_action('after_setup_theme','instalarMenu');

function instalarMenu()
{
    //Cargamos la gestion de las imagenes destacadas.
    add_theme_support('post-thumbnails');
    
    //Crear tamaños para las imagenes  del sitio.
    add_image_size('img_small', 200 , 250 ,true);
    add_image_size('img_huge', 700, 400 , false);
    


    //PARA CREAR MENU
    register_nav_menu(
                        'menu-principal',
                        array('menu-principal' => esc_html__('Menú Principal'))
                    );

}



// Para los estilos de los elementos del menu.

add_action('nav_menu_css_class','agragarEstilosMenu',1,3);


function agragarEstilosMenu($classes,$items,$args){

    $classes[] = 'p-2 text-muted';
    return $classes;
}


//PARA ACTIVAR O CREAR SIDE BAR

add_action('widgets_init','inicialWidget');

function inicialWidget(){

    register_sidebar( 

        array(
            'name' => esc_html__('Área de barra lateral derecha'),
            'id' => 'barra_lateral_1',
            'before_title' => '<h4 class="font-italic">',
            'after_title' => '</h4>',
            //
            'before_widget' => '<div id="%1$s" class="p-3 mb-3 bg-light rounded widget %2$s">',
            'after_widget' => '</div>'
        )

    );
}



//El tipo de campo txtContenido
//Agregar campos a la sección

/* $wp_customize->add_setting('txtContenido',  array(
	'default' => 'Contenido Principal'
));

//El tipo de campo txtContenido
$wp_customize->add_control('txtContenido',  array(

	'section' => 'configuracion',
	'type' => 'textarea',
	'label' => 'Contenido del banner:'

));
 */


/* 
//El tipo de campo txtURL
//Agregar campos a la sección
$wp_customize->add_setting('txtURL',  array(
	'default' => 'Url  Banner'
));


//El tipo de campo txtURL
$wp_customize->add_control('txtURL',  array(

	'section' => 'configuracion',
	'type' => 'url',
	'label' => 'Url del banner:'

));


//El tipo de campo txtTitulo
//Agregar campos a la sección
$wp_customize->add_setting('txtTitulo',  array(
	'default' => 'Título Principal'
));


//El tipo de campo txtTitulo
$wp_customize->add_control('txtTitulo',  array(

	'section' => 'configuracion',
	'type' => 'text',
	'label' => 'Título Principal:'

));

add_action('customize_register','opcionTema'); */

?>