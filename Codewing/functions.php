<?php
include(get_template_directory().'/includes/enqueue.php');
include(get_template_directory().'/includes/setup.php');
include(get_template_directory().'/includes/theme_customizer.php');
include(get_template_directory().'/includes/customizer/custom.php');

//to support svg file type
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

//widgets for all pages
function codewing_widgets(){
    register_sidebar(array(
        'name'=>'Main Sidebar',
        'id'=>'secondary',
        'before_widget'=>'<div class="widget widget_archive">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>',
    ));
}
add_action('widgets_init', 'codewing_widgets');

//customizer
add_action('customize_register', 'codewing_customize_register');

//contact form

function submit_form() {
    if(isset($_POST['form_submit'])){

        $fullName = $_POST['fullname'];    
        $email = $_POST['email'];
        $message = $_POST['message'];
       
        $my_post = array(
            'post_type' => 'contactform',
            'post_title' => $fullName,
            'post_content' => $email,
            'post_status' => 'pending', // and more status like publish,draft,private 
        );
        $postID = wp_insert_post($my_post);
        if($postID == 0){
            echo '<script>alert("Something went Wrong!!!")</script>';
        }
        else{
            $url="";
            add_post_meta($postID, 'message', $message, false);
            echo '<script>alert("Thank you for Submitting. We will get in touch with you soon.")</script>';
           
            
            $mail_subject = 'Feedback Form received';
            $to = get_option('admin_email');
            $headers = array("MIME-Version: 1.0", "Contemt-type:text/html;charset=UTF-8", "From:<".$email.">");
            $content =  "
            A new form is received
            Name: $fullName
            Email: $email
            Message: $message
            For more information please visit dashboard.";
            if(wp_mail($to, $mail_subject, $content, $headers)){
                $siteurl=home_url('/');
                echo '<script>window.location.replace("'.$siteurl.'");</script>';
            }
        }
    }
 }

add_action('init', 'submit_form');



