<?php
/**
 * Html functions added to the default WordPress theme twentyfifteen.
 * This code has been added specifically to support device detction.
 *
 * @author Tom W. Hartung, using the default WordPress theme twentyfifteen as a starting point
 * @package Jmws
 * @subpackage idmygadget_twentyfifteen
 * @since idmygadget_twentyfifteen 1.0
 */

class JmwsIdMyGadgetTwentyFifteenHtml
{
	/**
	 * Note that you do not need to instantiate this class unless you need to call a non-static method.
	 */
	public function __construct()
	{
	}
	/**
	 * Use the $logoTitleDescription to generate the html for the header
	 */
	public static function getHeaderHtml()
	{
		global $jmwsIdMyGadget;
		$logoTitleDescription = '';
	
		if ( $jmwsIdMyGadget->isInstalled() && $jmwsIdMyGadget->isEnabled() )
		{
			$logoTitleDescription = $jmwsIdMyGadget->getLogoTitleDescriptionHtml();
		}
		else
		{
			$logoTitleDescription = self::getLogoTitleDescriptionHtml();
		}
	
		$headerHtml  = '';
		$headerHtml .= '<header id="masthead" class="site-header" role="banner" ';
		$headerHtml .= $jmwsIdMyGadget->jqmDataRole['header'] . ' ';
		$headerHtml .= $jmwsIdMyGadget->jqmDataThemeAttribute . '>';
		$headerHtml .= '<div class="site-branding">';
		$headerHtml .= $logoTitleDescription;
		$headerHtml .= '</div><!-- .site-branding -->';
		$headerHtml .= '</header><!-- .site-header -->';
		return $headerHtml;
	}
	/**
	 * If the idMyGadget module is not available we will use this,
	 * which is the original twentyfifteen code (as of Sept. 2015).
	 */
	protected static function getLogoTitleDescriptionHtml()
	{
		$logoTitleDescription = '';
		if ( is_front_page() && is_home() )
		{
			$logoTitleDescription = '<h1 class="site-title">' .
					'<a href="' . esc_url( home_url('/') ) . '" rel="home">' . get_bloginfo('name' ) . '</a></h1>';
		}
		else
		{
			$logoTitleDescription = '<p class="site-title">' .
					'<a href="' . esc_url( home_url('/') ) . '" rel="home">' . get_bloginfo('name' ) . '</a></p>';
		}
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() )
		{
			$logoTitleDescription .= '<p class="site-description">' . $description . '</p>';
		}
		// $logoTitleDescription .= '<button class="secondary-toggle">' . _e( 'Menu and widgets', 'twentyfifteen' ) . '</button>';
		$logoTitleDescription .= '<button class="secondary-toggle">Menu and widgets</button>';
	
		return $logoTitleDescription;
	}
}
