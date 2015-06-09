<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package personal
 */

get_header(); ?>

	<div id="primary" class="page">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<section class="error-404 not-found">
					<header class="page__header">
						<h1 class="page__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'personal' ); ?></h1>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
