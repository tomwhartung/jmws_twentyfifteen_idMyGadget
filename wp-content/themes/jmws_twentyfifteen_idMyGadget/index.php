<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<div id="debug">
	<p>$theme_object_stylesheet: <?php print $theme_object_stylesheet; ?></p>
	<p>get_theme_mod('gadget_detector_select'):
		<?php echo get_theme_mod('gadget_detector_select', 'detect_mobile_browsers') ?></p>
	<p>get_theme_mod('gadget_detector_radio'):
		<?php echo get_theme_mod('gadget_detector_radio', 'detect_mobile_browsers') ?></p>
	<p>$jmwsIdMyGadget->getGadgetDetectorString():
		<?php print $jmwsIdMyGadget->getGadgetDetectorString(); ?></p>
	<p>$jmwsIdMyGadget->getGadgetString():
		<?php print $jmwsIdMyGadget->getGadgetString(); ?></p>
	<p>$gadgetDetectorIndex: <?php print $gadgetDetectorIndex; ?></p>
	<p>$gadgetDetectorString: <?php print $gadgetDetectorString; ?></p>
	<p>$idMyGadgetClass: <?php print $idMyGadgetClass; ?></p>
	<p>home_url(): <?php print home_url(); ?></p>
	<p>bloginfo('url'): <?php print bloginfo('url'); ?></p>
</div>

<?php get_footer(); ?>
