<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package personal
 */

?>

<article id="post-<?php the_ID(); ?>" class="page">
	<header class="page__header">
		<?php the_title( '<h1 class="page__title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="page__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'personal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

