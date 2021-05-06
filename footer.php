<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme4w4
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="widget-footer">
	<?php if(is_active_sidebar('footer-1')): ?>
		<?php dynamic_sidebar('footer-1'); ?>
		<?php endif; ?>
		<section class="adresse">
		<p>Affiche</p>
		</section>
	</div>
		<div class="site-info">
		<?php if (is_active_sidebar('footer-1')):?>
			<?php dynamic_sidebar('footer-1');?>
			<?php endif;?>
			
			<!-- //echo esc_url( __( 'https://wordpress.org/', 'theme4w4' ) ); -->
			 
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'theme4w4' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'theme4w4' ), 'theme4w4', '<a href="http://referenced.ca">eddy martin</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
