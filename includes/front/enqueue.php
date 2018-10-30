<?php

function gl_enqueue(){
    
  wp_register_style( 'gl_estilos', get_template_directory_uri() . '/assets/css/app.css' );

  wp_enqueue_style( 'gl_estilos' );






  wp_register_script( 'gl_script', get_template_directory_uri() . '/assets/js/dist/functions.js', array(), false, true );

  wp_enqueue_script( 'gl_script' );
}

 ?>