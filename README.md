# jmws_twentyfifteen_idMyGadget

Adding the device detection provided by IdMyGadget to the default Wordpress theme twentyfifteen.

## This Repo Is No Longer Active

**Note that this repository is no longer being updated.**

### Details

It turns out that using device detection to add adaptive functionality to this already-responsive theme did not work out very well.

This is not so much because of the adaptive functionality as it is because of my chosen "use-case," which is to use device detection to serve a different header image
and menu styles based on the type of device the user agent is running on.

--------------------------------------
--------------------------------------
--------------------------------------

## Introduction

This is the WordPress default theme Twentyfifteen with IdMyGadget device detection added in.

## Differences Between This Theme and Twentyfifteen

The goal is to add options similar to those added to joomla.  This is a work in progress.  

For details see the [jmws_protostar_tomh_idMyGadget repo on github](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget).

## Updates to Version 1.2 of Twentyfifteen

This template used version 1.2 of twentyfifteen as a starting point.
As of 2015-11-09 twentyfifteen has beenn upgraded to version 1.3.
For a copy of the version 1.2 code see:
* wp-content/themes/jmws_wp_twentyfifteen_idMyGadget/save/twentyfifteen-1.2.tgz
Saved this off before updating the theme, in case we want to migrate changes to the original back into this project some day.


## FAQ

1. Why Doesn't the Header Image option work?

This theme uses IdMyGadget to enable specifying a different image for phones, tablets, and desktops.

Rather than remove this option and the functionality that goes with it, I decided to leave it in for when device detection is not working.

1. About the extra phone header/footer nav options

First off, the phone nav only looks good on phones.
Hence the name: *Phone* Header/Footer Nav.
I designed the options so that you can see them on tablets and desktops and judge for yourself.
Who am I to predict the use cases you will want to satisfy?

Secondly, they look extra crappy when using this theme, due to the responsiveness.
So again, I added some extra options so you could see for yourself.
And again, how can I predict your use cases?
Maybe with some twiddling and tinkering of the css etc. you can make these satisfy your needs.

But the bottom line is, for best results, use the Phone Nav only on phones.

## Specific Changes Made

### functions.php

* Commented out "add_theme_support( 'title-tag' );"  (TODO: uncomment this line, at this time line 73 in functions.php)

### header.php

* Changed doctype to html

* Added theme name to title (TODO: REMOVE THIS, and uncomment "add_theme_support( 'title-tag' );" // line 73 in functions.php)

(Oops I did not do a great job of keeping track of this ....)

