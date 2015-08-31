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
			<div class="footer__module">
				<h2 class="footer__module__title">Newsletter</h2>
				<p class="footer__module__dec">If you would like to receive something in your mail from me every week, leave your email address below</p>
				<div class="form">
					<input class="form__input" type="text" placeholder="Your e-mail address" />
					<button class="form__button btn btn--secondary">Subscribe</button>
				</div>
			</div>
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
				<p class="footer__copy">Copyright <?php $user_info = get_userdata(1); echo $user_info->nickname; ?> <?php echo date('Y'); ?></p>
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
