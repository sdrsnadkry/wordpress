<?php 
function codewing_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_image_size('author_image', 470, 350);
    add_image_size('blogImage', 1349, 600);
    add_image_size('searchImage', 250, 170);

}

add_action('after_setup_theme','codewing_setup_theme')
?>
