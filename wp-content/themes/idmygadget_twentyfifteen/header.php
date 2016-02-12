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
<?php
//
// check idMyGadget install:
//   If the device detection object has NOT been created,
//     Create an object that can keep the app from whitescreening with a null pointer etc. and
//     Display an appropriate error message (markup for that is at the end of this file)
// If we do have the object,
//   Call its fcn to get the html we need for the header
//
global $jmwsIdMyGadget;
global $jmwsIdMyGadgetTwentyFifteenHelper;
$site_title_or_name = $jmwsIdMyGadget->getSiteTitleOrName();
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<title><?php echo $site_title_or_name; ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site" <?php echo $jmwsIdMyGadget->jqmDataRole['page'] ?>
	  data-title="<?php echo $site_title_or_name; ?>">
	<?php if( $jmwsIdMyGadgetTwentyFifteenHelper->phoneHeaderNavIn2015Page ) : ?>
		<nav data-role="navbar">
			<?php wp_nav_menu( array('theme_location' => 'phone-header-nav', 'container' => false) ); ?>
		</nav>
	<?php endif; ?>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">

		<?php if( $jmwsIdMyGadgetTwentyFifteenHelper->phoneHeaderNavIn2015Sidebar ) : ?>
			<nav data-role="navbar">
				<?php wp_nav_menu( array('theme_location' => 'phone-header-nav', 'container' => false) ); ?>
			</nav>
		<?php endif; ?>

		<?php echo JmwsIdMyGadgetTwentyFifteenHtml::getHeaderHtml(); ?>
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content" <?php echo $jmwsIdMyGadget->jqmDataRole['content'] ?>>
		<?php
			if (isset($jmwsIdMyGadget->errorMessage) )
			{
				echo $jmwsIdMyGadget->errorMessage;
			}
		?>
