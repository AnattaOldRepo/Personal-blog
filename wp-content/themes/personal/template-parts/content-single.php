<?php
/**
 * Template part for displaying single posts.
 *
 * @package personal
 */

?>

<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post__header">
		<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="post__info">
				<?php personal_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="post__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'personal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

