
/* How to copy and customise this theme.
----------------------------------------*/

This document describes how to copy and customise the Garbi (bootstrapbase) theme so that
you can build on this to create a theme of your own. It assumes you have some
understanding of how themes work within Moodle 2.5, as well as a basic understanding
of HTML and CSS.

Getting started
---------------

From your Moodle theme directory duplicate the garbi folder and rename it. Use only lower case letters, and if needed,
underscores. 

On opening the renamed folder your you will find several files and sub-directories which have
files within them.

These are:

config.php
    Where all the theme configurations are made.
    (Contains some elements that require renaming).
lib.php
    Where all the functions for the themes settings are found.
    (Contains some elements that require renaming).
settings.php
    Where all the setting for this theme are created.
    (Contains some elements that require renaming).
version.php
    Where the version number and plugin component information is kept.
    (Contains some elements that require renaming).
/lang/
    This directory contains all language sub-directories for other languages
    if and when you want to add them.
/lang/en/
    This sub-directory contains your language files, in this case English.
/lang/en/theme_garbi.php
    This file contains all the english language strings for your theme.
    (Contains some elements that require renaming as well as the filename itself).
/lang/es/
    This sub-directory contains your language files, in this case Spanish.
/lang/es/theme_garbi.php
    This file contains all the spanish language strings for your theme.
    (Contains some elements that require renaming as well as the filename itself).
/layout/
    This directory contains all the layout files for this theme.
/layout/general.php
    Layout file for front page and general pages combined.
/layout/logininfo.php
    Login/info block file. 
/style/
    This directory contains all the CSS files for this theme.
/style/custom.css
    This is where the custom CSS is generated.
/style/settings.css
    This is where all the settings CSS is generated. Includes some changes in the boostrapbase to adapt the Garbi content. 
/style/slider.css
    This is where all the slider CSS is generated. Can be modified to adapt the slide to your theme.
/style/login.css
    This is where all the login CSS is generated. Can be modified to adapt the slide to your theme. 
/pix/
    This directory contains a screen shot of this theme as well as a favicon and any images used in the theme.
/pix/slider/
    This directory contains the images or the slideshow.
/javascript/
    This directory contains the javascript files used in the theme. Should not be modified.
/jquery/
    This directory contains the jquery plugins. 
    
    
Renaming elements
-----------------

The problem when copying a theme is that you need to rename all those instances
where the old theme name occurs, in this case 'garbi'. So using the above list as
a guide, search through and change all the instances of the theme name
'garbi' to yours. This includes the filename of the lang folders.
You need to change this to 'theme_yourthemename.php'.

Installing your theme
---------------------

Once all the changes to the name have been made, you can safely install the theme.
If you are already logged in just refreshing the browser should trigger your Moodle
site to begin the install 'Plugins Check'.

If not then navigate to Administration > Notifications.

Once your theme is successfully installed you can select it and begin to modify
it using the custom settings page found by navigating to...
Administration > Site Administration > Appearance > Themes >>
and then click on or whatever you renamed your theme to,
from the list of theme names that appear at this point in the side block.

Customisation using custom theme settings
-----------------------------------------

The settings page for the Garbi theme can be located by navigating to:

Administration > Site Administration > Appearance > Themes > Garbi


Logo
----
Add the URL to your logo image.

Slider
------
You can enable/disable the frontpage slideshow and the URL to the slides as well. You can add till 3 slides.

Body background color
---------------------
Change the background color.

Link color
----------
Change the link color. 

Link color hover
----------------
Change the link color when you move the mouse cursor over the link.

Menu background color
---------------------
Change the color background of the menu active item.

Custom CSS
----------
You can add any customized CSS style, for example from http://bootswatch.com or create your own from http://pikock.github.io/bootstrap-magic 
Notice that Boostrapbase and Garbi override some of the default Boostrap styles and the final result can't be different of the expected. 

Footnote
--------
Add the text to the footer of the page.