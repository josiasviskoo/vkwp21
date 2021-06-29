<?php

function removeinline_adminbar_css_frontend() {
    if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) ){
        remove_filter( 'wp_head', '_admin_bar_bump_cb' );
    }
}
add_filter( 'wp_head', 'removeinline_adminbar_css_frontend', 1 );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 387, 151 );

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="thumbnail"><div class="caption">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
// Our custom post type function
function create_posttype() {

    register_post_type( 'banner',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'B Principal' ),
                'singular_name' => __( 'Banner Principal' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banner'),
            'supports' =>array( 'title','thumbnail'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );




function vkwp_modulos() {
    register_post_type( 'modulos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Modulos' ),
                'singular_name' => __( 'Modulo' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'modulos'),
            'supports' =>array( 'title','thumbnail'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'vkwp_modulos' );
