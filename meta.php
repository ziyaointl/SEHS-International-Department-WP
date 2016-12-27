<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function your_prefix_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'authors_';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'authors',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Set Authors', 'authors' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array('post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Authors', 'authors' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}1",
				// Field description (optional)
				// 'desc'  => esc_html__( 'Text description', 'your-prefix' ),
				// 'type'  => 'text',
				// Default value (optional)
				// 'std'   => esc_html__( 'Default text value', 'your-prefix' ),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone' => true,
			),
			array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Translators', 'translators' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}2",
				// Field description (optional)
				// 'desc'  => esc_html__( 'Text description', 'your-prefix' ),
				// 'type'  => 'text',
				// Default value (optional)
				// 'std'   => esc_html__( 'Default text value', 'your-prefix' ),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone' => true,
			),
		),
		// 'validation' => array(
		// 	'rules'    => array(
		// 		"{$prefix}password" => array(
		// 			'required'  => true,
		// 			'minlength' => 7,
		// 		),
		// 	),
		// 	// optional override of default jquery.validate messages
		// 	'messages' => array(
		// 		"{$prefix}password" => array(
		// 			'required'  => esc_html__( 'Password is required', 'your-prefix' ),
		// 			'minlength' => esc_html__( 'Password must be at least 7 characters', 'your-prefix' ),
		// 		),
		// 	),
		// ),
	);

	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'enroll',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Year of Enrollment', 'enroll' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array('individual'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			// TEXT
			array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Year of Enrollment', 'enroll' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}3",
			),
		),
	);


	return $meta_boxes;
}
