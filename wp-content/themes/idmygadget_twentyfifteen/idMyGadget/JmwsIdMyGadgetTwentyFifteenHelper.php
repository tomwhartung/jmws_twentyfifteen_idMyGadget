<?php
/**
 * Helper functions added to the default WordPress theme twentyfifteen.
 * This code has been added specifically to support device detction.
 *
 * @author Tom W. Hartung, using the default WordPress theme twentyfifteen as a starting point
 * @package Jmws
 * @subpackage idmygadget_twentyfifteen
 * @since idmygadget_twentyfifteen 1.0
 */

class JmwsIdMyGadgetTwentyFifteenHelper
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
	public function setPhoneHeaderFooterNavVariables()
	{
		global $idmg_nav_in_page_or_sidebar_index;
		global $idmg_nav_in_page_or_sidebar_string;
		global $jmwsIdMyGadget;
	
		if( isset($jmwsIdMyGadget) )
		{
			$jmwsIdMyGadget->phoneHeaderNavIn2015Page = FALSE;
			$jmwsIdMyGadget->phoneHeaderNavIn2015Sidebar = FALSE;
			$jmwsIdMyGadget->phoneFooterNavIn2015Page = FALSE;
			$jmwsIdMyGadget->phoneFooterNavIn2015Sidebar = FALSE;
			if( $jmwsIdMyGadget->phoneHeaderNavThisDevice || $jmwsIdMyGadget->phoneFooterNavThisDevice )
			{
				if ( $jmwsIdMyGadget->isPhone() )
				{
					$idmg_nav_in_page_or_sidebar_index = get_theme_mod( 'idmg_nav_in_page_or_sidebar_phones' );
				}
				else if ( $jmwsIdMyGadget->isTablet() )
				{
					$idmg_nav_in_page_or_sidebar_index = get_theme_mod( 'idmg_nav_in_page_or_sidebar_tablets' );
				}
				else
				{
					$idmg_nav_in_page_or_sidebar_index = get_theme_mod( 'idmg_nav_in_page_or_sidebar_desktops' );
				}
				$idmg_nav_in_page_or_sidebar_string =
					JmwsIdMyGadgetWordpress::$pageOrSidebar2015Options[$idmg_nav_in_page_or_sidebar_index];
				if( $jmwsIdMyGadget->phoneHeaderNavThisDevice && has_nav_menu('phone-header-nav') )
				{
					$jmwsIdMyGadget->phoneHeaderNavIn2015Page =
						$idmg_nav_in_page_or_sidebar_string == 'Page' ? TRUE : FALSE;
					$jmwsIdMyGadget->phoneHeaderNavIn2015Sidebar =
						$idmg_nav_in_page_or_sidebar_string == 'Sidebar' ? TRUE : FALSE;
				}
				if( $jmwsIdMyGadget->phoneFooterNavThisDevice && has_nav_menu('phone-footer-nav') )
				{
					$jmwsIdMyGadget->phoneFooterNavIn2015Page =
						$idmg_nav_in_page_or_sidebar_string == 'Page' ? TRUE : FALSE;
					$jmwsIdMyGadget->phoneFooterNavIn2015Sidebar =
						$idmg_nav_in_page_or_sidebar_string == 'Sidebar' ? TRUE : FALSE;
				}
			}
		}
	}
}
