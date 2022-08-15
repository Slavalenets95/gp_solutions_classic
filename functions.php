<?php
/**
 * Версия стилей и скриптов
 */
define('VERSION', '1.0.0');

/**
 * Подключение стилей и скриптов
 */

function enqueue()
{
    wp_enqueue_style('style-name', get_template_directory_uri() . '/dist/app.css', array(), VERSION);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/dist/app.js', array(), VERSION, true);
    wp_deregister_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue');

/**
 * Возвращает alt или title, из массива изображения acf
 */

function get_img_alt(array $img)
{
    return $img['alt'] ? $img['alt'] : $img['title'];
}

/**
 * Возвращает alt или title thubmnail поста
 */

function get_thumbnail_alt($id)
{
    $thumbnail_id = get_post_meta( $id, '_thumbnail_id', true );
    $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );

    if($alt) {
        return $alt;
    }

    $thumbnail_title = get_the_title($thumbnail_id);
    return $thumbnail_title;
}

/**
 *  Theme Supports
 */

add_theme_support( 'custom-logo', [
    'height'      => 190,
    'width'       => 190,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
    'unlink-homepage-logo' => false, // WP 5.5
] );

add_theme_support( 'post-thumbnails' );


/**
 * Регистрация меню
 */
add_action('after_setup_theme', 'my_register_nav_menu');

function my_register_nav_menu()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));
}

function get_acf_template_path()
{
    return 'template-parts/acf-templates/';
}

/**
 * Позволяет загружать svg
 */

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    if( $dosvg ){

        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }

        else {
            $data['ext']  = false;
            $data['type'] = false;
        }

    }

    return $data;
}

/**
 * Acf Options Page
 */

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));


}