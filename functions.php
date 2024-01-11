<?php
add_filter( 'show_admin_bar', '__return_false' );

wp_enqueue_script('script-slider', get_template_directory_uri() . '/script.js', array('jquery'), null, true);



add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("script-slider" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}


add_action( 'wp_enqueue_scripts', 'style_for_animals' );
function style_for_animals() {

    if( is_singular( array( 'pies', 'kot' ) ) ) {
        wp_enqueue_style('single-animal-css', get_template_directory_uri() . '/assets/css/single-animal.css',[], filemtime(get_template_directory() . '/assets/css/single-animal.css'));
    }
    if (is_post_type_archive(array('pies', 'kot'))) {
        wp_enqueue_style('archive-animal-css', get_template_directory_uri() . '/assets/css/archive-animal.css', [], filemtime(get_template_directory() . '/assets/css/archive-animal.css'));
    }
    if (is_page('o-adopcji')) {
        wp_enqueue_style('o-adopcji-css', get_template_directory_uri() . '/assets/css/o-adopcji.css',[], filemtime(get_template_directory() . '/assets/css/o-adopcji.css'));
    }
}
