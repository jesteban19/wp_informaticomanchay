<?php
function wpi_customize_register($wp_customize){
	//showcase
	$wp_customize->add_section('showcase',array(
		'title' => __('Showcase','informatico'),
		'description' => sprintf(__('Options for showcase','informatico')),
		'priority' => 130
		));

	$wp_customize->add_setting('showcase_heading',array(
        'default' => _x('Custom boostrap wordpress theme','informatico'),
        'type' => 'theme_mod'
    ));

    ///ssss

    $wp_customize->add_control('showcase_heading',array(
        'label' => __('Heading','informatico'),
        'section' => 'showcase',
        'priority' => 1
    ));


    $wp_customize->add_setting('showcase_text',array(
        'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam ipsam fuga quod modi voluptates voluptatum sequi perferendis officia accusamus voluptatibus, iure dolorem omnis obcaecati alias! Rem qui atque voluptates?','informatico'),
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text',array(
        'label' => __('Text','informatico'),
        'section' => 'showcase',
        'priority' => 2
    ));


    //url
    $wp_customize->add_setting('btn_url',array(
    	'default' => _x('http://yoururl.com','informatico'),
    	'type' => 'theme_mod'
    	));

    $wp_customize->add_control('btn_url',array(
    	'label' => __('Button URL','informatico'),
    	'section' => 'showcase',
    	'priority' => 3
    	));

    //boton
    $wp_customize->add_setting('btn_text',array(
    	'default' => _x('Read More','informatico'),
    	'type' => 'theme_mod'
    	));

    $wp_customize->add_control('btn_text',array(
		'label' => __('Button Text','informatico'),
		'section' => 'showcase',
		'priority' => 4
		));



}
add_action('customize_register','wpi_customize_register');