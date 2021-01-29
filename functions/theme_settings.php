<?php

//SITE LOGO
function pentangle_theme_customizer( $wp_customize ) {
    
    $wp_customize->add_section( 
        'pent_logo_section' , array(
        'title'       => __( 'Logo', 'pentangle' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));

    $wp_customize->add_setting( 'pent_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pent_logo', 
        array(
            'label'    => __( 'Company Logo', 'pentangle' ),
            'section'  => 'pent_logo_section',
            'settings' => 'pent_logo',
        )  
    ));

}
add_action( 'customize_register', 'pentangle_theme_customizer' );


//CONTACT SETTINGS
function pentangle_theme_contact_settings( $wp_customize ) {

    $wp_customize->add_section( 
        'pent_contact_section' , array(
        'title'       => __( 'Contact Settings', 'pentangle' ),
        'priority'    => 30,
        'description' => 'Contact and Company Numbers',
    ));

    $wp_customize->add_setting( 'pent_contact_company_name' );
    $wp_customize->add_control('pent_contact_company_name', 
        array(
            'label'    => __( 'Company Name', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_company_name',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_phone' );
    $wp_customize->add_control('pent_contact_phone', 
        array(
            'label'    => __( 'Phone Number', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_phone',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_facsimile' );
    $wp_customize->add_control('pent_contact_facsimile', 
        array(
            'label'    => __( 'Fax Number', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_facsimile',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_email' );
    $wp_customize->add_control('pent_contact_email', 
        array(
            'label'    => __( 'Email', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_email',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_hours' );
    $wp_customize->add_control('pent_contact_hours', 
        array(
            'label'    => __( 'Contact Hours', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_hours',
            'type'     => 'textarea',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_address' );
    $wp_customize->add_control('pent_contact_address', 
        array(
            'label'    => __( 'Address', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_address',
            'type'     => 'textarea',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_regno' );
    $wp_customize->add_control('pent_contact_regno', 
        array(
            'label'    => __( 'Company Registration', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_regno',
        )  
    );

    $wp_customize->add_setting( 'pent_contact_vatno' );
    $wp_customize->add_control('pent_contact_vatno', 
        array(
            'label'    => __( 'VAT No', 'pentangle' ),
            'section'  => 'pent_contact_section',
            'settings' => 'pent_contact_vatno',
        )  
    );
}
add_action( 'customize_register', 'pentangle_theme_contact_settings');

//SOCIAL SETTINGS
function pentangle_theme_social_settings( $wp_customize ) {

    $wp_customize->add_section( 
        'pent_social_section' , array(
        'title'       => __( 'Social Settings', 'pentangle' ),
        'priority'    => 30,
        'description' => 'Add links to your social networks',
    ));

    $wp_customize->add_setting( 'pent_social_facebook' );
    $wp_customize->add_control('pent_social_facebook', 
        array(
            'label'    => __( 'Facebook', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_facebook',
        )  
    );

    $wp_customize->add_setting( 'pent_social_twitter' );
    $wp_customize->add_control('pent_social_twitter', 
        array(
            'label'    => __( 'Twitter', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_twitter',
        )  
    );

    $wp_customize->add_setting( 'pent_social_googleplus' );
    $wp_customize->add_control('pent_social_googleplus', 
        array(
            'label'    => __( 'Google Plus', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_googleplus',
        )  
    );

    $wp_customize->add_setting( 'pent_social_youtube' );
    $wp_customize->add_control('pent_social_youtube', 
        array(
            'label'    => __( 'YouTube', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_youtube',
        )  
    );

    $wp_customize->add_setting( 'pent_social_linkedin' );
    $wp_customize->add_control('pent_social_linkedin', 
        array(
            'label'    => __( 'Linkedin', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_linkedin',
        )  
    );

    $wp_customize->add_setting( 'pent_social_instagram' );
    $wp_customize->add_control('pent_social_instagram', 
        array(
            'label'    => __( 'Instagram', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_instagram',
        )  
    );

    $wp_customize->add_setting( 'pent_social_pintrest' );
    $wp_customize->add_control('pent_social_pintrest', 
        array(
            'label'    => __( 'Pintrest', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_pintrest',
        )  
    );

    $wp_customize->add_setting( 'pent_social_houzz' );
    $wp_customize->add_control('pent_social_houzz', 
        array(
            'label'    => __( 'Houzz', 'pentangle' ),
            'section'  => 'pent_social_section',
            'settings' => 'pent_social_houzz',
        )  
    );

}
add_action( 'customize_register', 'pentangle_theme_social_settings');
