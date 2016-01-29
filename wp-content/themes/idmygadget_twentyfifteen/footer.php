<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $jmwsIdMyGadget;
global $jmwsIdMyGadgetTwentyFifteenHelper;
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo"
		<?php echo $jmwsIdMyGadget->jqmDataRole['footer'] . ' ' . $jmwsIdMyGadget->jqmDataThemeAttribute ?>>
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
		<div class="debug">
			<?php // print $jmwsIdMyGadget->getSanityCheckString(); ?>
		</div><!-- .debug -->
	</footer><!-- .site-footer -->

<?php
	// I tried it and the phone footer nav definitely does not belong in the sidebar,
	//   so we always render it here.
	//
	if( $jmwsIdMyGadgetTwentyFifteenHelper->phoneFooterNavIn2015Page ||
	    $jmwsIdMyGadgetTwentyFifteenHelper->phoneFooterNavIn2015Sidebar ) : ?>
	<nav data-role="navbar" data-position="fixed">
		<?php wp_nav_menu( array('theme_location' => 'phone-footer-nav', 'container' => false) ); ?>
	</nav>
<?php endif; ?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
