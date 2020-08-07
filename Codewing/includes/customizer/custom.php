<?php

function codewing_custom_customizer_section($wp_customize)
{
    //titles section
    $wp_customize->add_section('codewing_HomeTitles_section', array(
        'title'=>__('Home Page Titles', 'codewing'),
        'priority'=>100
    ));

    //social section

    $wp_customize->add_section('codewing_social_section', array(
        'title'=>__('Social Links', 'codewing'),
        'priority'=>100
    ));




    //logo title 1
    $wp_customize->add_setting('codewing_logo_title1_handle', array(
        'default'=>'',
    ));
    //logo title 2
    $wp_customize->add_setting('codewing_logo_title2_handle', array(
        'default'=>'',
    ));



    //about title customizer
    $wp_customize->add_setting('codewing_about_title_handle', array(
        'default'=>'',
    ));
    //featured title customizer

    $wp_customize->add_setting('codewing_featured_title_handle', array(
        'default'=>'',
    ));
    //service title customizer

    $wp_customize->add_setting('codewing_service_title_handle', array(
        'default'=>'',
    ));
    //service content customizer
    $wp_customize->add_setting('codewing_service_content_handle', array(
        'default'=>'',
    ));

    //blog title customizer

    $wp_customize->add_setting('codewing_blog_title_handle', array(
        'default'=>'',
    ));
    //blog content customizer
    $wp_customize->add_setting('codewing_blog_content_handle', array(
        'default'=>'',
    ));


    //social link
    $wp_customize->add_setting('codewing_facebook_handle', array(
        'default'=>'',
    ));
    $wp_customize->add_setting('codewing_twitter_handle', array(
        'default'=>'',
    ));
    $wp_customize->add_setting('codewing_facebook_handle', array(
        'default'=>'',
    ));
    $wp_customize->add_setting('codewing_google_handle', array(
        'default'=>'',
    ));
    $wp_customize->add_setting('codewing_linkedin_handle', array(
        'default'=>'',
    ));
    $wp_customize->add_setting('codewing_pinintrest_handle', array(
        'default'=>'',
    ));
    

    
    //site identity section
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_logo_title1_handle_text', array(
        'label'=>__('Logo Title 1', 'codewing'),
        'section'=>'title_tagline',
        'type'=>'text',
        'settings'=>'codewing_logo_title1_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_logo_title2_handle_text', array(
        'label'=>__('Logo Title 2', 'codewing'),
        'section'=>'title_tagline',
        'type'=>'text',
        'settings'=>'codewing_logo_title2_handle'
    )));





    //title section

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_about_title_handle_text', array(
        'label'=>__('About Title', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'text',
        'settings'=>'codewing_about_title_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_featured_title_handle_text', array(
        'label'=>__('Featured Title', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'text',
        'settings'=>'codewing_featured_title_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_service_title_handle_text', array(
        'label'=>__('Service Title', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'text',
        'settings'=>'codewing_service_title_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_service_content_handle_textarea', array(
        'label'=>__('Service Content', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'textarea',
        'settings'=>'codewing_service_content_handle'
    )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_blog_title_handle_text', array(
        'label'=>__('Blog Title', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'text',
        'settings'=>'codewing_blog_title_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_blog_content_handle_textarea', array(
        'label'=>__('Blog Content', 'codewing'),
        'section'=>'codewing_HomeTitles_section',
        'type'=>'textarea',
        'settings'=>'codewing_blog_content_handle'
    )));



    //social section
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_facebook_handle_text', array(
        'label'=>__('Facebook Link', 'codewing'),
        'section'=>'codewing_social_section',
        'type'=>'text',
        'settings'=>'codewing_facebook_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_twitter_handle_text', array(
        'label'=>__('Twitter Link', 'codewing'),
        'section'=>'codewing_social_section',
        'type'=>'text',
        'settings'=>'codewing_twitter_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_google_handle_text', array(
        'label'=>__('Google Link', 'codewing'),
        'section'=>'codewing_social_section',
        'type'=>'text',
        'settings'=>'codewing_google_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_linkedin_handle_text', array(
        'label'=>__('Linkedin Link', 'codewing'),
        'section'=>'codewing_social_section',
        'type'=>'text',
        'settings'=>'codewing_linkedin_handle'
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'codewing_pinintrest_handle_text', array(
        'label'=>__('Pinintrest Link', 'codewing'),
        'section'=>'codewing_social_section',
        'type'=>'text',
        'settings'=>'codewing_pinintrest_handle'
    )));



}
