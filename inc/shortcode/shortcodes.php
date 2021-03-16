<?php

/* CONTAINERS */

function containers() { // The shortcode function
$containers .='<div class="row">';
	$collection_settings = get_post_meta( get_the_ID(), '_collection_group', true ); foreach ( $collection_settings as $collection ) {
		$containers .= '<div class="three-col">';
			$containers .= '<div class="three-col-img">';
				$containers .=  "<img src='" . $collection ['collection_image'] . "' /'>";
			$containers .='</div>';
			$containers .= '<div class="three-col-content">';
				$containers .=  "<h3>" . $collection ['title'] . "</h3>";
				$containers .=  "<p>" . $collection ['description'] . "</p>";
			$containers .='</div>';	
		$containers .='</div>';
	}
$containers .='</div>';
//  code returned
return $containers; 
}
// Register shortcode
add_shortcode('container', 'containers');


/* ICONS */

function icons() { // The shortcode function
$icons .='<div class="row">';
	$icons .= '<article class="three-col-no-bg">';
		$icons .='<div class="tcng-inner">';
		 	$icons .=  "<img src='". get_template_directory_uri(). "/lib/img/paper.svg ' /'>";
			$icons .='<h2>Paper</h2>';
		$icons .='</div>';
	$icons .='</article>';
	$icons .= '<article class="three-col-no-bg">';
		$icons .='<div class="tcng-inner">';
		 	$icons .=  "<img src='". get_template_directory_uri(). "/lib/img/plastic.svg ' /'>";
			$icons .='<h2>Plastic</h2>';
		$icons .='</div>';
	$icons .='</article>';
	$icons .= '<article class="three-col-no-bg">';
		$icons .='<div class="tcng-inner">';
		 	$icons .=  "<img src='". get_template_directory_uri(). "/lib/img/cans.svg ' /'>";
			$icons .='<h2>Cans</h2>';
		$icons .='</div>';
	$icons .='</article>';
$icons .='</div>';
//  code returned
return $icons; 
}
// Register shortcode
add_shortcode('icon', 'icons');
