<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

    // This gets the theme name from the stylesheet (lowercase and without spaces)
    $themename = get_option( 'stylesheet' );
    $themename = preg_replace("/\W/", "_", strtolower($themename) );

    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);

    // echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {



    // If using image radio buttons, define a directory path
    $imagepath =  get_template_directory_uri() . '/images/';

    $options = array();

	$options[] = array(
		'name' => __( 'Category Banners', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('Category Banner', 'options_check'),
		'desc' => __('Add Category Banner .', 'options_check'),
		'id' => 'category_banner_image',
		'type' => 'upload');

    $options[] = array(
        'name' => __( 'Contact Info', 'theme-textdomain' ),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __('Email', 'options_check'),
        'desc' => __('Email.', 'options_check'),
        'id' => 'email_contact',
        'std' => 'Email',
        'type' => 'text');
	$options[] = array(
		'name' => __('Phone #', 'options_check'),
		'desc' => __('Telephone.', 'options_check'),
		'id' => 'tel_contact',
		'std' => 'Telephone',
		'type' => 'text');
	$options[] = array(
		'name' => __('Fax', 'options_check'),
		'desc' => __('Fax.', 'options_check'),
		'id' => 'fax_contact',
		'std' => 'Fax',
		'type' => 'text');

	$options[] = array(
		'name' => __('Mobile', 'options_check'),
		'desc' => __('Mobile.', 'options_check'),
		'id' => 'mobile_contact',
		'std' => 'Mobile',
		'type' => 'text');

	$options[] = array(
		'name' => __('Address', 'options_check'),
		'desc' => __('Address.', 'options_check'),
		'id' => 'address_contact',
		'std' => 'Address',
		'type' => 'textarea');

    $options[] = array(
        'name' => __('POBox', 'options_check'),
        'desc' => __('POBOX.', 'options_check'),
        'id' => 'pbox_contact',
        'std' => 'P.o.box',
        'type' => 'text');

	$options[] = array(
		'name' => __( 'Contact Banners', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('Contact Banner', 'options_check'),
		'desc' => __('Add Category Banner .', 'options_check'),
		'id' => 'contact_banner_image',
		'type' => 'upload');


	$options[] = array(
        'name' => __( 'Social Links', 'theme-textdomain' ),
        'type' => 'heading'
    );
    $options[] = array(
        'name' => __('Facebook', 'options_check'),
        'desc' => __('FaceBook.', 'options_check'),
        'id' => 'facebook_links',
        'std' => 'Facebook',
        'type' => 'text');
    $options[] = array(
        'name' => __('Google Plus', 'options_check'),
        'desc' => __('Google Plus.', 'options_check'),
        'id' => 'google_links',
        'std' => 'Google',
        'type' => 'text');

    $options[] = array(
        'name' => __('Twitter', 'options_check'),
        'desc' => __('Twitter.', 'options_check'),
        'id' => 'twitter_links',
        'std' => 'Twitter',
        'type' => 'text');
	$options[] = array(
		'name' => __('Linkedin', 'options_check'),
		'desc' => __('Linkedin.', 'options_check'),
		'id' => 'linkedin_links',
		'std' => 'Linkedin',
		'type' => 'text');


	if( current_user_can('administrator')){
		$options[] = array(
			'name' => __( 'Google Analytic', 'theme-textdomain' ),
			'type' => 'heading'
		);
		$options[] = array(
			'name' => __('Textarea', 'options_check'),
			'desc' => __('Google Analytic.', 'options_check'),
			'id' => 'Google_textarea',
			'std' => 'Google Analytic',
			'type' => 'textarea');

	}


	return $options;
}