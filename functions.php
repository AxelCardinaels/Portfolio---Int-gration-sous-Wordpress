<?php

add_action('init','create_post_types');
add_action('init','create_nav_menu');

function create_post_types(){
	
	$args = [
	'label' => 'Créations',
	'public' => true];

	register_post_type('creations',$args);
	

};

function create_nav_menu(){
	register_nav_menu('top', 'Menu Principal');
}