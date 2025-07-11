<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


   			<?php get_template_part( 'template-parts/footer-cta' ); ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="footer_sec" class="footer_section">
		<?php get_template_part( 'template-parts/footer/footer-block' ); ?>
	</footer><!-- #footer_sec -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
