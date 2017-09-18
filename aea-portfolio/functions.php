<?php

// enqueue scripts.js
function f3m_adding_scripts() {
wp_enqueue_script('scripts', get_template_directory_uri() .'/scripts.js', array('jquery'), null, true);
wp_enqueue_script('scripts');
}
 
add_action( 'wp_enqueue_scripts', 'f3m_adding_scripts' );  


// register menus
register_nav_menus( array( 
	'primary' => 'Primary menu', 
	'footer' => 'Footer menu' 
) );

?>