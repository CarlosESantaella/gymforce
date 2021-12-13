<?php 
    // consultas reutilizables
    require get_template_directory().'/inc/queries.php';
    require get_template_directory().'/inc/shortcodes.php';
    //cuando el tema es activado
    function gymforce_setup(){


        //habilitar imagenes destacadas
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        //agregar imagenes de tamaño personalizado

        add_image_size('square', '350', '350', true);
        add_image_size('portrait', '350', '724', true);
        add_image_size('cajas', '400', '375', true);
        add_image_size('madiano', '780', '400', true);
        add_image_size('blog', '966', '644', true);
    }
    add_action('after_setup_theme', 'gymforce_setup');

    // Menus de navegación, agregar más utilizando el arreglo

    function gymforce_menus(){
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'gymforce')
        ));
    }

    add_action('init', 'gymforce_menus');

    //Scripts y Styles
    function gymforce_scripts_styles(){

        wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1', 'all');
        wp_register_style('slickNavCSS', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.0','all');
        wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Staatliches&display=swap', array(), false, 'all');
        if(is_page('galeria')){

            wp_enqueue_style('lightboxCSS', get_template_directory_uri().'/css/lightbox.css', array(), '2.11.0', 'all');
        }
        if(is_page('contacto')){

            wp_enqueue_style('leafletCSS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.7.1', 'all');
        }
        if(is_page('inicio')){

            wp_enqueue_style('bxsliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12', 'all');
        }
        //hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'font', 'slickNavCSS'), '1.0.0', 'all');

        wp_register_script('slickNavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
        if(is_page('galeria')){
            wp_enqueue_script('lightboxJS', get_template_directory_uri().'/js/lightbox.min.js', array('jquery'), '2.11.0', true);
        }
        if(is_page('contacto')){
            wp_enqueue_script('leafletJS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.7.1', true);
        }
        if(is_page('inicio')){
            wp_enqueue_script('bxsliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
        }
        wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery', 'slickNavJS'), '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'gymforce_scripts_styles');



    //definir widgets

    function gymforce_widgets(){    
        register_sidebar(array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'


        ));
        register_sidebar(array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'


        ));
    }
    add_action('widgets_init', 'gymforce_widgets');

    // Imagen hero

    function gymforce_hero_image(){
        //obtener id página principal
        $front_page_id = get_option('page_on_front');
        // obtener id imagen del home page
        $id_imagen = get_field('imagen', $front_page_id);
        // obtener la imagen
        $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
        // style css
        wp_register_style('custom', false);
        wp_enqueue_style('custom');
        $image_destacada_css = "
            body.home .site-header{
                background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($imagen);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        ";

        wp_add_inline_style('custom', $image_destacada_css);


    }

    add_action('init', 'gymforce_hero_image');