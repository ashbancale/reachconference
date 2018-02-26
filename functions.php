<?php


// Functionality starts here.

add_theme_support( 'post-thumbnails' ); 

function get_the_post_thumbnail_alt($post_id) {
    return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

function the_post_thumbnail_alt($post_id) {
    echo get_the_post_thumbnail_alt($post_id);
}

// Menus activate!

register_nav_menus(

    array(

        'Top-menu' => 'Main Menu',

    )

);

function new_excerpt_more( $more ) {

    return '...';

}

add_filter('excerpt_more', 'new_excerpt_more');

?>