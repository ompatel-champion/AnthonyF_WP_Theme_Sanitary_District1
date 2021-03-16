<?php
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                			 => _x( 'Pickup', 'Post Type General Name', 'sanitary-district-one' ),
        'singular_name'       		=> _x( 'Pickup', 'Post Type Singular Name', 'sanitary-district-one' ),
        'menu_name'           	    => __( 'Pickup', 'sanitary-district-one' ),
        'parent_item_colon'   	  => __( 'Parent Pickup', 'sanitary-district-one' ),
        'all_items'           			 => __( 'All Pickup Locations', 'sanitary-district-one' ),
        'view_item'           		   => __( 'View Pickup Location', 'sanitary-district-one' ),
        'add_new_item'        	   => __( 'Add New Pickup Location', 'sanitary-district-one' ),
        'add_new'                     => __( 'Add New', 'sanitary-district-one' ),
        'edit_item'           		   => __( 'Edit Pickup Location', 'sanitary-district-one' ),
        'update_item'         		=> __( 'Update Pickup Location', 'sanitary-district-one' ),
        'search_items'        		=> __( 'Search Pickup Location', 'sanitary-district-one' ),
        'not_found'           		 => __( 'Not Found', 'sanitary-district-one' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'sanitary-district-one' ),
    );
          
    $args = array(
        'label'               				=> __( 'pickup', 'sanitary-district-one' ),
        'labels'             			   => $labels,
        'supports'            			=> array( 'title', 'editor' ),
	    'taxonomies'                  => array( 'section' ),
        'hierarchical'        			=> false,
        'public'              			  => true,
        'show_ui'             			=> true,
        'show_in_menu'        	   => true,
        'show_in_nav_menus'    => true,
        'show_in_admin_bar'     => true,
        'menu_position'       	   => 5,
        'can_export'          		  => true,
        'has_archive'        	 	  => true,
        'exclude_from_search'  => false,
        'publicly_queryable'      => true,
        'capability_type'     		 => 'post',
        'show_in_rest' 				 => true,
		'menu_icon'           => 'dashicons-welcome-learn-more',
 
    );
register_post_type( 'pickup', $args );
// Registering your Custom Taxonomy
register_taxonomy( 'section', array('pickup'), array(
    'hierarchical' 		 => true, 
    'label' 				=> 'Section', 
    'singular_label'   => 'Section', 
    'rewrite' 			   => array( 'slug' => 'section', 'with_front'=> false )
    )
);
register_taxonomy( 'town', array('pickup'), array(
    'hierarchical' 		 => true, 
    'label' 				=> 'Town', 
    'singular_label'   => 'Town', 
    'rewrite' 			   => array( 'slug' => 'town', 'with_front'=> false )
    )
);
}
add_action( 'init', 'custom_post_type', 0 );