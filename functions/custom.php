<?php

// Disable Gutenberg
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'page') return false;
    return $current_status;
}

// ACF Options
add_action( 'after_setup_theme', 'joints_theme_support' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}


// Callback function to insert 'styleselect' into the $buttons array
function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/*
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );


//add custom styles to the WordPress editor
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles 
        array(  
            'title' => 'Back Slash',  
            'inline' => 'span',  
            'classes' => 'back-slash',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Bold Green Caps',  
            'inline' => 'span',  
            'classes' => 'small-caps',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Large Green Text',  
            'block' => 'span',  
            'classes' => 'large-green-text',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Unbroken Link',  
            'inline' => 'span',  
            'classes' => 'unbroken-link',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );
*/