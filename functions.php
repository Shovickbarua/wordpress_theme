<?php 

add_action( 'after_setup_theme','wp_test' );

if( !function_exists('wp_test') ) {
    function wp_test(){
        add_theme_support( 'post-thumbnails', array('post', 'service', 'page') );
        add_action( 'wp_enqueue_scripts', 'myscript' );

        if( !function_exists('myscript') ) {
            function myscript(){
                wp_enqueue_style( 'unique_id', get_stylesheet_uri(  ) );
                wp_enqueue_style( 'main_css', get_parent_theme_file_uri( 'assets/css/main.css' ), array(), wp_get_theme()->get('Version'), 'all'  ) ;
                // wp_add_inline_style(
                //     'unique_id', 
                //     'body{ background: red; }'
                // );
                wp_enqueue_script( 
                    'main',
                    get_template_directory_uri(  ) .'/assets/js/main.js',
                    array(), 
                    wp_get_theme()->get('Version'), 
                    true
                );

                wp_add_inline_script('main', 'console.log("All data");',);
            }
        }
    }
}

?>