<?php
/**
 * Created by IntelliJ IDEA.
 * User: eric
 * Date: 17/12/2015
 * Time: 2:38 PM
 */

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_script('gfdevsupport', get_template_directory_uri().'/gfdevsupport/main.js', 'jquery', rand(0, 1), true);
});
add_action('wp_ajax_gf', function(){

    $formId = $_GET['id'];
    $form = GFAPI::get_form( $formId );

    header('Content-Type: application/json');

    echo json_encode($form);
    die;
});