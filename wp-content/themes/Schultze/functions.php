<?php 

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// function special_nav_class ($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//     $classes[] = 'active ';
// }
//     return $classes;
// }
function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );




function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'bootstrap',  'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' ,[]);
    // wp_enqueue_script( 'bootstrap', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' ,['jquery']);
    wp_enqueue_script( 'glide.js',  'https://cdn.jsdelivr.net/npm/@glidejs/glide' );
    wp_enqueue_script('jquery');
    // wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',[],false,true);
    // wp_enqueue_script('bootstrap');
    
    wp_enqueue_style('style.css',get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style('style.css');

    wp_enqueue_style('glide.core.min.css',get_template_directory_uri().'/css/glide.core.min.css' );
    wp_enqueue_style('glide.core.min.css');
    
    wp_enqueue_style('glide.theme.min.css',get_template_directory_uri().'/css/glide.theme.min.css' );
    wp_enqueue_style('glide.theme.min.css');

    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/scripts/jquery.js',  false, true );
    wp_enqueue_script('jquery.js');
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/scripts/main.js',  false, true );
    wp_enqueue_script('main.js');
}
register_nav_menus( array(
    'primary' => __( 'primary Menu', 'wpdocs_theme_name_scripts' ),
    'secondary' => __( 'secondary Menu', 'wpdocs_theme_name_scripts' ),
    'footer' => __( 'footer Menu', 'wpdocs_theme_name_scripts' ),
    'mobile-nav' => __( 'mobile Menu', 'wpdocs_theme_name_scripts' ),
) );
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function my_custom_mime_types( $mimes ) {

	// New allowed mime types.
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['doc'] = 'application/msword';
	// Optional. Remove a mime type.
	unset( $mimes['exe'] );
	return $mimes;
}
	add_filter( 'upload_mimes', 'my_custom_mime_types' );
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'footer',
            'menu_title'	=> 'Footer',
            'menu_slug' 	=> 'Footer',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
    }
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Header',
            'menu_title'	=> 'header',
            'menu_slug' 	=> 'link',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
    }
