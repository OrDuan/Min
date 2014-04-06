<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Min
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php $custom_query = new WP_Query( 'posts_per_page=3' ); ?>
		<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1; ?>
		<?php query_posts( $custom_query . "&page=$page" ); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $custom_query->have_posts() ) :  $custom_query->the_post(); ?>

				<?php
				get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<nav id="nav-below">
				<?php next_posts_link('&laquo; Older Entries', $custom_query->max_num_pages) ?>
			</nav><!-- #nav-below -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		<?php  wp_reset_query(); // Reset Query ?> 

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
