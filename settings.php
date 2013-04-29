<?php
// This file is part of the Garbi theme for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Garbi theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * Settings file for Garbi theme
 *
 * @package   Garbi theme
 * @copyright 2013 Fernando Acedo, http://3-bits.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
    $default = '#0066cc';
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

