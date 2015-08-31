<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package personal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer" role="contentinfo">
		<div class="container">
			<div class="footer__module">
				<?php if ( $feedback_msg = get_theme_mod( 'feedback_msg' )  ) : ?>
					<h2 class="footer__module__title"><?php _e( 'Feedback', 'personal' ); ?></h2>
					<p class="footer__module__dec"><?php echo $feedback_msg; ?></p>
				<?php endif; ?>
			</div>

			<?php if ( $mailchimp_form = get_theme_mod( 'mailchimp_form_html' ) ) : ?>
				<div class="footer__module">
					<h2 class="footer__module__title"><?php _e( 'Newsletter', 'personal' ); ?></h2>

					<?php if ( $mailchimp_form_msg = get_theme_mod( 'mailchimp_form_msg') ) : ?>
						<p class="footer__module__dec">
							<?php echo $mailchimp_form_msg; ?>
						</p>
					<?php endif;?>
					<div class="form">
						<?php echo $mailchimp_form; ?>
					</div>
				</div>
			<?php endif; ?>
			<div class="footer__module">
				<?php if ( $github_profile_link = get_theme_mod( 'github_profile_link' ) ) : ?>
					<h2 class="footer__module__title"><?php _e( 'Follow', 'personal' ); ?></h2>
					<p class="footer__module__dec">

						<?php if ( $twitter_profile_link = get_theme_mod( 'twitter_profile_link' ) ) : ?>
							<a href="<?php echo esc_url( $twitter_profile_link ); ?>"><?php _e( 'Twitter', 'personal' ); ?></a>&nbsp;/&nbsp;
						<?php endif; ?>

						<a href="<?php echo esc_url( $github_profile_link ); ?>"><?php _e( 'Github', 'personal' ); ?></a>

						<?php if ( $fb_profile_link = get_theme_mod( 'facebook_profile_link' ) ) : ?>
							&nbsp;/&nbsp;<a href="<?php echo esc_url( $fb_profile_link ); ?>"><?php _e( 'Facebook', 'personal' ); ?></a>
						<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="footer__info">
				<?php if ( $copyright_msg = get_theme_mod( 'copyright_msg' ) ) : ?>
					<p class="footer__copy">
						<?php echo $copyright_msg; ?>
					</p>
				<?php endif; ?>
				<nav id="site-footer-navigation" class="footer__navigation" role="navigation">
					<?php
						$menuParameters = array(
							'theme_location' => 'primary',
							'container'       => false,
							'echo'            => false,
							'items_wrap'      => '%3$s',
							'depth'           => 1,
						);
						echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
					 ?>
				</nav><!-- #site-navigation -->

			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
