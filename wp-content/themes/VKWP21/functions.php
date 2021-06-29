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


function banner_principal_d() {

    register_post_type( 'banner-principal-d',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'B Principal' ),
                'singular_name' => __( 'B Principal' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banner-principal-d'),
            'supports' =>array( 'title','thumbnail'),
        )
    );
}
add_action( 'init', 'banner_principal_d' );




function banner_principal_m() {

    register_post_type( 'banner-principal-m',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'B Principal@m' ),
                'singular_name' => __( 'B Principal@m' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banner-principal-m'),
            'supports' =>array( 'title','thumbnail'),
        )
    );
}
add_action( 'init', 'banner_principal_m' );






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