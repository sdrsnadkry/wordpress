<?php
function codewing_styles()
{

    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i');
    wp_register_style('fontAwesome', get_template_directory_uri().'/css/fontawesome-all.css');
    wp_register_style('raraCompanion', get_template_directory_uri().'/css/raratheme-companion-public.css');
    wp_register_style('style', get_template_directory_uri().'/css/style.css');
    wp_register_style('custom', get_template_directory_uri().'/style.css');

    wp_enqueue_style('fonts');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('raraCompanion');
    wp_enqueue_style('style');
    wp_enqueue_style('custom');

    wp_register_script('jQuery', get_template_directory_uri().'/js/jquery-1.12.0.js', array('jquery'), false, true);
    wp_register_script('sticky', get_template_directory_uri().'/js/sticky-sidebar.js', array('jquery'), false, true);
    wp_register_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'), false, true);

    wp_enqueue_script('jQuery');
    wp_enqueue_script('custom');
    wp_enqueue_script('sticky');


}

add_action('wp_enqueue_scripts', 'codewing_styles');
