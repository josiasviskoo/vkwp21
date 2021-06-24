<?php /*

  This file is part of a child theme called VKWP208 - Oficial.
  Functions in this file will be loaded before the parent theme's functions.
  For more information, please read
  https://developer.wordpress.org/themes/advanced-topics/child-themes/

*/

// this code loads the parent's stylesheet (leave it in place unless you know what you're doing)

function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style,
      get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array($parent_style),
      wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

/* Correção */
remove_action('shutdown', 'wp_ob_end_flush_all', 1); 

/*  Add your own functions below this line.
    ======================================== */


    function untheme_nav_init() {
    	register_nav_menus( array(
    		'vk-menu-1' => 'VK - Menu principal',
    		'vk-menu-2' => 'VK - Menu do Celular',

    		'vk-menu-3' => 'VK - Menu footer 1',
    		'vk-menu-4' => 'VK - Menu footer 2',
    		'vk-menu-5' => 'VK - Menu footer 3',
    		'vk-menu-6' => 'VK - Menu footer 4',

    	) );
    }
    add_action( 'init', 'untheme_nav_init' );


    function tamanhos_imagens()
    {
    	add_theme_support('post-thumbnails');

    	add_image_size( '725x725', '725', '725', true );
    	add_image_size( '150x150', '150', '150', true );
    	add_image_size( '650x650', '650', '650', true );
    	add_image_size( '600x600', '600', '600', true );
    	add_image_size( '600x450', '600', '450', true );
    	add_image_size( 'stories', '1080', '1920', true );
    };
    add_action( 'after_setup_theme', 'tamanhos_imagens' );


    function vk_side_produto() {
    	register_sidebar( array(
    		'name'          => 'SidebarProduto',
    		'id'            => 'sidebar-product',
    		'description'   => 'Adicionar Widget',
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );
    }
    add_action( 'widgets_init', 'vk_side_produto' );
