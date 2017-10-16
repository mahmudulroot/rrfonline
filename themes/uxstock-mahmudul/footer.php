<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uxuxstock
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<?php if(is_active_sidebar('uxstock_footer')):?>
			<div class="row">
				<?php dynamic_sidebar('uxstock_footer'); ?>
			</div>
				<?php endif;?>
				<div class="row">
					<div class="col-md-12">
						<div class="uxstock-footer-bottom">
							<div class="col-md-4">
								<?php esc_html_e('','')?>
							</div>
							<div class="col-md-4">
								<?php wp_nav_menu( array( 'theme_location' => 'footer_menu') );?>
							</div>
							<div class="col-md-4">
								<div class="socials-icon">
									<a href=""><i class="fa fa-facebook"></i> </a>
									<a href=""><i class="fa fa-twitter"></i> </a>
									<a href=""><i class="fa fa-youtube"></i> </a>
									<a href=""><i class="fa fa-yahoo"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
