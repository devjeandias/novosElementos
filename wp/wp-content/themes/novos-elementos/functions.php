<?php
    // PERMITE O THUMBNAIL EM POSTS
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-thumbnails', 'page' );
    }

    // CRIA MENU PRINCIPAL
    function register_my_menus() {
        register_nav_menus(
        array( 'menu-principal' => __( 'Menu Principal' ))
        );
    }
    add_action( 'init', 'register_my_menus' );

    function clean_custom_menus() {
        $menu_name = 'menu-principal';
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            $menu_list = '<ul class="navbar-nav">' ."\n";
            foreach ((array) $menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                if($title == 'Facebook' || $title == 'Instagram' ) {
                    $medias = ($title == 'Facebook') ? '_facebook' : '_instagran';
                    $menu_list .= "\t\t\t\t\t". '<li class="nav-item --media '.$medias.' "><a class="nav-link --icon" href="'. $url .'">'. $title .'</a></li>' ."\n";
                } else {
                    $menu_list .= "\t\t\t\t\t". '<li class="nav-item"><a class="nav-link" href="'. $url .'">'. $title .'</a></li>' ."\n";
                }
            }
            $menu_list .= "\t\t\t\t". '</ul>' ."\n";
        }
        echo $menu_list;
    }

    /*  post_Types  */
    
    // Banner
    function create_bannerTv() {
        register_post_type('banner_tv',
            array(
                'labels' => array(
                    'name' => __('Banners'),
                    'singular_name' => __('Banner')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'banner_tv'),
            )
        );
    }
    add_action('init', 'create_bannerTv');

    // tratamentos
    function create_tratamento() {
        register_post_type('tratamentos',
            array(
                'labels' => array(
                    'name' => __('Tratamentos'),
                    'singular_name' => __('Tratamento')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'tratamentos'),
            )
        );
    }
    add_action('init', 'create_tratamento');
    

    /*  taxonomy */

    function create_tratamento_tax() {
        register_taxonomy(
            'tipos_tratamento',
            'tratamentos',
            array(
                'label' => __( 'Tipos de tratamentos' ),
                'rewrite' => array( 'slug' => 'tipos_tratamento' ),
                'hierarchical' => true,
            )
        );
    }
    add_action( 'init', 'create_tratamento_tax' );
?>