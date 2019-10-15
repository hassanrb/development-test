<?php

/**
 * Custom phone number
 * Register custom phone number setting field
 *
 * @return void
 */
function awesome_design_phone_number( $wp_customize ) {
	$wp_customize->add_section( 'awesome_design_phone_number' , array(
        'title'      => __( 'Phone Number', 'mytheme' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting( 'phone_number', [
        'default'           => '+360 690 67 89'
    ]);

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control',
            [
                'label'      => __( 'Phone Number', 'mytheme' ),
                'section'    => 'awesome_design_phone_number',
                'settings'   => 'phone_number',
                'priority'   => 1
            ]
        )
    );
}

add_action( 'customize_register', 'awesome_design_phone_number' );
