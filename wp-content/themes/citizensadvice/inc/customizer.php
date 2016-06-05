<?php

function citizensadvice_customize_register( $wp_customize ) {
	
	// Logo
	$wp_customize->add_section( 'citizensadvice_logo_section' , array(
		'title'       => __( 'Logo', 'citizensadvice' ),
		'priority'    => 20,
		'description' => 'Upload a logo to replace the default logo',
	) );
	$wp_customize->add_setting( 'citizensadvice_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'citizensadvice_logo', array(
		'label'    => __( 'Logo', 'citizensadvice' ),
		'section'  => 'citizensadvice_logo_section',
		'settings' => 'citizensadvice_logo',
	) ) );
	
	
	// Homepage, Feature image
	$wp_customize->add_section( 'citizensadvice_homefeature_section' , array(
		'title'       => __( 'Home feature image', 'citizensadvice' ),
		'priority'    => 30,
		'description' => 'Add homepage feature image',
	) );
	$wp_customize->add_setting( 'citizensadvice_homefeature' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'citizensadvice_homefeature', array(
		'label'    => __( 'Logo', 'citizensadvice' ),
		'section'  => 'citizensadvice_homefeature_section',
		'settings' => 'citizensadvice_homefeature',
	) ) );
	
}
add_action( 'customize_register', 'citizensadvice_customize_register' );

