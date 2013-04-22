<?php

/**
 * Settings for the Garbi theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    

//Logo
	$name = 'theme_garbi/logo_url';
	$title = get_string('logo_url','theme_garbi');
	$description = get_string('logo_urldesc', 'theme_garbi');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);


//Slideshow
	$name = 'theme_garbi/enableslideshow';
	$title = get_string('enableslideshow','theme_garbi');
	$description = get_string('enableslideshowdesc', 'theme_garbi');
	$default = '0';
	$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
	$settings->add($setting);


//Slide1
	$name = 'theme_garbi/slide1';
	$title = get_string('slide1','theme_garbi');
	$description = get_string('slidedesc', 'theme_garbi');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);


//Slide2
	$name = 'theme_garbi/slide2';
	$title = get_string('slide2','theme_garbi');
	$description = get_string('slidedesc', 'theme_garbi');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

//Slide3
	$name = 'theme_garbi/slide3';
	$title = get_string('slide3','theme_garbi');
	$description = get_string('slidedesc', 'theme_garbi');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);


//Body background
    $name = 'theme_garbi/bodybgcolor';
    $title = get_string('bodybgcolor','theme_garbi');
    $description = get_string('bodybgcolordesc', 'theme_garbi');
    $default = '#fdfdfd';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link color
    $name = 'theme_garbi/linkcolor';
    $title = get_string('linkcolor','theme_garbi');
    $description = get_string('linkcolordesc', 'theme_garbi');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link Hover color
    $name = 'theme_garbi/linkhovercolor';
    $title = get_string('linkhovercolor','theme_garbi');
    $description = get_string('linkhovercolordesc', 'theme_garbi');
    $default = '#00cccc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    
//Menu background color
    $name = 'theme_garbi/menubgcolor';
    $title = get_string('menubgcolor','theme_garbi');
    $description = get_string('menubgcolordesc', 'theme_garbi');
    $default = '#666666';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    
    
	// Custom CSS   
	$name = 'theme_garbi/customcss';
	$title = get_string('customcss','theme_garbi');
	$description = get_string('customcssdesc', 'theme_garbi');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$settings->add($setting);

    

	// Foot note setting
	$name = 'theme_garbi/footnote';
	$title = get_string('footnote','theme_garbi');
	$description = get_string('footnotedesc', 'theme_garbi');
	$setting = new admin_setting_confightmleditor($name, $title, $description,'');
	$settings->add($setting);

}

