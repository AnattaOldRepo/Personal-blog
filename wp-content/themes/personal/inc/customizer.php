<?php
/**
 * personal Theme Customizer
 *
 * @package personal
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function personal_customize_register( $wp_customize ) {
	//$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	//$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	//$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Remove Colors, Background image, and Static front page option from theme customizer.
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );

	// Personal Theme Options.
	$wp_customize->add_panel(
		'personal_theme_options',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Personal Theme Options', 'personal' ),
			'description'    => __( 'You can manage you theme related settings under this panel', 'personal' ),
		)
	);

	// Feedback Setting Section.
	$wp_customize->add_section(
		'personal_feedback_option' ,
		array(
			'title'         => __( 'Feedback', 'personal' ),
			'description'   => __( 'You can manage you theme feedback setting in this section', 'personal' ),
			'priority'      => 1,
			'panel'         => 'personal_theme_options',
		)
	);

	// Feedback message setting.
	$wp_customize->add_setting(
		'feedback_msg',
		array(
			'default'        => '',
			'capability'     => 'edit_theme_options',
		)
	);

	// Feedback message control.
	$wp_customize->add_control(
		'feedback_msg',
		array(
			'label'      => __( 'Feedback Message', 'personal' ),
			'section'    => 'personal_feedback_option',
			'settings'   => 'feedback_msg',
			'type'       => 'textarea',
		)
	);

	// Social Media Setting Section.
	$wp_customize->add_section(
		'personal_social_media_option' ,
		array(
			'title'         => __( 'Social', 'personal' ),
			'description'   => __( 'You can manage you theme socila media setting in this section', 'personal' ),
			'priority'      => 3,
			'panel'         => 'personal_theme_options',
		)
	);

	// twitter setting.
	$wp_customize->add_setting(
		'personal_social_media_option[twitter]',
		array(
			'default'        => '',
			'capability'     => 'edit_theme_options',
		)
	);

	// twitter control.
	$wp_customize->add_control(
		'twitter',
		array(
			'label'      => __( 'Twitter Profile Link', 'personal' ),
			'section'    => 'personal_social_media_option',
			'settings'   => 'personal_social_media_option[twitter]',
		)
	);

	// github setting.
	$wp_customize->add_setting(
		'personal_social_media_option[github]',
		array(
			'default'        => '',
			'capability'     => 'edit_theme_options',
		)
	);

	// github control.
	$wp_customize->add_control(
		'github',
		array(
			'label'      => __( 'Github Profile Link', 'personal' ),
			'section'    => 'personal_social_media_option',
			'settings'   => 'personal_social_media_option[github]',
		)
	);

	// facebook setting.
	$wp_customize->add_setting(
		'personal_social_media_option[facebook]',
		array(
			'default'        => '',
			'capability'     => 'edit_theme_options',
		)
	);

	// facebook control.
	$wp_customize->add_control(
		'facebook',
		array(
			'label'      => __( 'Facebook Profile Link', 'personal' ),
			'section'    => 'personal_social_media_option',
			'settings'   => 'personal_social_media_option[facebook]',
		)
	);
}
add_action( 'customize_register', 'personal_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function personal_customize_preview_js() {
	wp_enqueue_script( 'personal_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'personal_customize_preview_js' );
