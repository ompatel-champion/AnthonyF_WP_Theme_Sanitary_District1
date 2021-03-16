<?php

/* HERO
--------------------------------------------------------------------------------------------------------------
===============================================================================*/

add_action( 'cmb2_admin_init', 'hero_metaboxes' );
function hero_metaboxes() {
	$hero = new_cmb2_box( array(
		'id'            		=> '_hero',
		'title'         		=> __( 'Hero', 'sanitary-district-one' ),
		'object_types'	  => array( 'page', ), // Post type
		'context'       	 => 'side',
		'priority'      	  => 'low',
		'show_names'    => true, 
		'closed'     		  => true, 
	) );

	$hero->add_field( array(
		'name'   => __( 'Title' ),
		'id'        => '_hero_title',
		'desc'	  => 'If left blank it will use page title',
		'type'    => 'text',
	) );
	$hero->add_field( array(
		'name'   => __( 'Blurb' ),
		'id'        => '_hero_blurb',
		'type'    => 'textarea_small',
	) );
	$hero->add_field( array(
		'name'         => 'Size',
		'desc'          => 'Select a size',
		'id'              => '_hero_size',
		'type'          => 'select',
		'options'     => array(
			'lg-h' 		=> __( 'Large', 'sanitary-district-one' ),
			'sm-h'    => __( 'Small', 'sanitary-district-one' ),
		)
	) );

	
/* COLLECTION
--------------------------------------------------------------------------------------------------------------
===============================================================================*/
	
	$collection = new_cmb2_box( array(
		'id'           			=> '_collection',
		'title'        			=> 'Collection Information',
		'object_types' 	  => array( 'page' ),
		'show_on'      	   => array( 'key' => 'id', 'value' => array( 6 ) ),
		'context'      		 => 'normal',
		'priority'     		  => 'high',
		'show_names'   => true,
	) );
	$group_field_id = $collection->add_field( array(
		'id'					  => '_collection_group',
		'type'					=> 'group',
		'options'     		  => array(
			'group_title'       	  => __( 'Collection Type {#}', 'sanitary-district-one' ),
			'add_button'        	=> __( 'Add Another Collection Type', 'sanitary-district-one' ),
			'remove_button'       => __( 'Remove Collection Type', 'sanitary-district-one' ),
			'sortable'          		=> true,
		),
	) );
	$collection->add_group_field( $group_field_id, array(
		'name'     => 'Image',
		'id'          => 'collection_image',
		'type'    	=> 'file',
		'options' => array(
		'url' 		 => false,
	),
		'text'    => array(
			'add_upload_file_text' => 'Add Image' 
		),
		'query_args' => array(
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			 ),
		),
		'preview_size' => 'thumbnail', // Image size to use when previewing in the admin.
	) );
	$collection->add_group_field( $group_field_id, array(
		'name'	 => 'Title',
		'id'		=> 'title',
		'type' 	   => 'text',
	) );
	$collection->add_group_field( $group_field_id, array(
		'name' 	 => 'Description',
		'id'   		 => 'description',
		'type' 	   => 'textarea_small',
	) );

/* HOLIDAYS
--------------------------------------------------------------------------------------------------------------
===============================================================================*/
	
	$holiday = new_cmb2_box( array(
		'id'           			=> '_holiday',
		'title'        			=> 'Holiday Pickup',
		'object_types' 	  => array( 'page' ),
		'show_on'      	   => array( 'key' => 'id', 'value' => array( 213 ) ),
		'context'      		 => 'normal',
		'priority'     		  => 'high',
		'show_names'   => true,
	) );
	$group_field_id = $holiday->add_field( array(
		'id'					  => '_holiday_schedule',
		'type'					=> 'group',
		'options'     		  => array(
			'group_title'       	  => __( 'Holiday {#}', 'sanitary-district-one' ),
			'add_button'        	=> __( 'Add Another Holiday', 'sanitary-district-one' ),
			'remove_button'       => __( 'Remove Holiday', 'sanitary-district-one' ),
			'sortable'          		=> true,
		),
	) );
	$holiday->add_group_field( $group_field_id, array(
		'name'	 => 'Date',
		'id'		=> 'holiday_date',
		'type' 	   => 'text',
	) );
	$holiday->add_group_field( $group_field_id, array(
		'name' 	 => 'Pickup',
		'id'   		 => 'holiday_pickup',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );

/* PICKUP
--------------------------------------------------------------------------------------------------------------
===============================================================================*/
	
	$pickup = new_cmb2_box( array(
		'id'           			=> '_pickup',
		'title'        			=> 'Property Information',
		'object_types' 	  => array( 'pickup' ),
		'context'      		 => 'normal',
		'priority'     		  => 'high',
		'show_names'   => true,
	) );
	$pickup->add_field( array(
		'name'   => 'Streets',
		'id'        => 'pickup_street',
		'type'    => 'text',
	) );

	$pickup->add_field( array(
	'name'            => 'Town',
	'id'            	 => 'pickup_towns',
	'taxonomy'     => 'town', 
	'type'              => 'taxonomy_multicheck',
	'text'           	=> array(
		'no_terms_text' => 'Sorry, no terms could be found.'
	),
	'remove_default' => 'true',
	'query_args' => array(),
	) );
	$pickup->add_field( array(
		'name'           		=> 'Section',
		'id'             			=> 'pickup_section',
		'taxonomy'       	 => 'section', 
		'type'           		  => 'taxonomy_select',
		'remove_default'   => 'true', 
		'query_args' 		  => array(
	),
	) );
	
	$pickup->add_field( array(
		'name'             			=> 'Recycle Day',
		'id'               				=> 'pickup_recycle_day',
		'type'             			  => 'select',
		'show_option_none'  => true,
		'options'         			=> array(
			'monday' 		=> __( 'Monday'),
			'tuesday'   	 => __( 'Tuesday' ),
			'wednesday'   => __( 'Wednesday' ),
			'thursday'   	=> __( 'Thursday' ),
			'friday'   		   => __( 'Friday' ),
		),
	) );
	


}