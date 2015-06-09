<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package personal
 */

get_header(); ?>

	<?php $categories = get_categories(array('exclude' => '1')); ?>
	<div id="primary" class="<?php if ( count( array_filter( $categories ) ) > 0 ): ?> is_category_visible <?php  endif; ?>">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="category__block">
					<?php foreach($categories as $category) { ?>
						
						<a class='category__block--link <?php if( get_the_category()[0]->term_id == $category->term_id): ?>is_active<?php endif; ?>' href='<?php echo esc_url( get_category_link( $category->term_id ) ); ?>' title='Category Name'><?php echo $category->name; ?></a>
					
					<?php } ?>
				</div>
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
