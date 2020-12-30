<?php

/* =========================================
	Framework : Shortcodes
========================================= */


function company_shortcode(){
  $company = get_field('site_name','options');
  return $company;
}
add_shortcode('BRAND_NAME', 'company_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function address_shortcode(){
  $address = get_field('site_address','options');
  return $address;
}
add_shortcode('COMPANY_ADDRESS', 'address_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function phone_shortcode(){
  $phone = get_field('site_phone','options');
  return $phone;
}
add_shortcode('PHONE_NUMBER', 'phone_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function email_Shortcode(){
  $email = get_field('site_email','options');
  return $email;
}
add_shortcode('EMAIL_ADDRESS', 'email_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');

function currentYear_Shortcode(){
  $year = date("Y"); 
  return $year;
}
add_shortcode('CURRENT_YEAR', 'currentYear_Shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');
add_filter('acf/format_value/type=text', 'do_shortcode');


/* =========================================
	Framework : Custom Fields
========================================= */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group 1',
	'title' => 'Site Settings',
	'fields' => array(
		array(
			'key' => 'field 1',
			'label' => 'Company Information',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field 2',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field 3',
			'label' => 'Company Name',
			'name' => 'site_name',
			'type' => 'text',
			'instructions' => 'Enter your business name here and use the token [BRAND_NAME] to display it anywhere on your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field 4',
			'label' => 'Phone Number',
			'name' => 'site_phone',
			'type' => 'text',
			'instructions' => 'Enter your business phone number here and use the token [PHONE_NUMBER] to display it anywhere on your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field 5',
			'label' => 'Email Address',
			'name' => 'site_email',
			'type' => 'email',
			'instructions' => 'Enter your main email address here and use the token [EMAIL_ADDRESS] to display it anywhere on your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field 6',
			'label' => 'Company Address',
			'name' => 'site_address',
			'type' => 'text',
			'instructions' => 'Enter your business address here and use the token [COMPANY_ADDRESS] to display it anywhere on your website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'website-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;