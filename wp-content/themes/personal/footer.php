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
				<?php $feedback_options = get_theme_mod( 'personal_feedback_option' ); ?>
				<?php if ( is_array( $feedback_options ) && array_key_exists( 'feedback_msg', $feedback_options ) && $feedback_options['feedback_msg'] ) : ?>
					<h2 class="footer__module__title"><?php _e( 'Feedback', 'personal' ); ?></h2>
					<p class="footer__module__dec"><?php echo $feedback_options['feedback_msg']; ?></p>
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
				<h2 class="footer__module__title">Follow</h2>
				<p class="footer__module__dec"><a href="#">Twitter</a> / <a href="#">Github</a> / <a href="#">Facebook</a></p>
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
