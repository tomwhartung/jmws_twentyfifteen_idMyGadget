# jmws_twentyfifteen_idMyGadget

Adding the device detection provided by IdMyGadget to the default Wordpress theme twentyfifteen.

## Introduction

This is the WordPress default theme Twentyfifteen with IdMyGadget device detection added in.

## Differences Between This Theme and Twentyfifteen

The goal is to add options similar to those added to joomla.  This is a work in progress.  

For details see the [jmws_protostar_tomh_idMyGadget repo on github](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget).



## FAQ

1. Why Doesn't the Header Image option work?

This theme uses IdMyGadget to enable specifying a different image for phones, tablets, and desktops.

Rather than remove this option and the functionality that goes with it, I decided to leave it in for when device detection is not working.

1. 


## Specific Changes Made

### functions.php

* Commented out "add_theme_support( 'title-tag' );"  (TODO: uncomment this line, at this time line 73 in functions.php)

### header.php

* Changed doctype to html

* Added theme name to title (TODO: REMOVE THIS, and uncomment "add_theme_support( 'title-tag' );" // line 73 in functions.php)

