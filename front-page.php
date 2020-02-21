<?php 

/**
 * The front page template file.
 * Template Name: Front Page
 *
 */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="section-work">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- front page content -->
			<div class="container">
                <div class="row">

				    <?php the_content(); ?>
                </div>

				<?php edit_post_link(); ?>

			</div>
			<!-- /front page content -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'lumpster' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
