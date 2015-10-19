<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<title>twentyfifteen:</title>
	<?php wp_head(); ?>
</head>
<?php
//
// check_idMyGadget_install:
//   If the device detection object has NOT been created,
//     Create an object that can keep the app from whitescreening with a null pointer etc. and
//     Display an appropriate error message (markup for that is at the end of this file)
// If we do have the object,
//   Call its fcn to get the html we need for the header
//
global $jmwsIdMyGadget;
check_idMyGadget_install();
$site_name = get_bloginfo('name' );
$logoTitleDescription = '';

//	if ( FALSE )
if ( $jmwsIdMyGadget->isInstalled() && $jmwsIdMyGadget->isEnabled() )
{
  $logoTitleDescription = $jmwsIdMyGadget->getLogoTitleDescriptionHtml();
}
else
{
  // Device detection is not available so we use this,
  // which is the original twentyfifteen code (as of Sept. 2015).
  //
  if ( is_front_page() && is_home() )
  {
    $logoTitleDescription = '<h1 class="site-title">' .
      '<a href="' . esc_url( home_url('/') ) . '" rel="home">' . $site_name . '</a></h1>';
  }
  else
  {
    $logoTitleDescription = '<p class="site-title">' .
      '<a href="' . esc_url( home_url('/') ) . '" rel="home">' . $site_name . '</a></p>';
  }
  $description = get_bloginfo( 'description', 'display' );
  if ( $description || is_customize_preview() )
  {
    $logoTitleDescription .= '<p class="site-description">' . $description . '</p>';
  }
  // $logoTitleDescription .= '<button class="secondary-toggle">' . _e( 'Menu and widgets', 'twentyfifteen' ) . '</button>';
  $logoTitleDescription .= '<button class="secondary-toggle">Menu and widgets</button>';
}
$header_html = '';
$header_html .= '<header id="masthead" class="site-header" role="banner">';
$header_html .= '<div class="site-branding">';
$header_html .= $logoTitleDescription;
$header_html .= '</div><!-- .site-branding -->';
$header_html .= '</header><!-- .site-header -->';
?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<div class="debug">
			<?php print $jmwsIdMyGadget->getSanityCheckString(); ?>
		</div><!-- .debug -->
		<?php echo $header_html ?>
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
		<?php
			if (isset($jmwsIdMyGadget->errorMessage) )
			{
				echo $jmwsIdMyGadget->errorMessage;
			}
		?>
