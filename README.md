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

