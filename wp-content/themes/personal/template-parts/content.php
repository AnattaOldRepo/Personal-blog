<?php
/**
 * Template part for displaying posts.
 *
 * @package personal
 */

?>

<article id="post-<?php the_ID(); ?>" class="post">

	<header class="post__header">
		<?php the_post_thumbnail(); ?> 
		<?php the_title( sprintf( '<h1 class="post__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="post__content">
		
		<?php the_excerpt(); ?>

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
