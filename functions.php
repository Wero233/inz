<?php
add_filter( 'show_admin_bar', '__return_false' );

wp_enqueue_script('script-slider', get_template_directory_uri() . '/script.js', array( 'jquery' ));


add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("script-slider" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}