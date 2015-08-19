<?php

/*
	Template Name: Home Page
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RH_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="home-main" class="home-main">
			<div class="inner-wrapper">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="tagline">
						<div class="wide-line"></div>
						<h2><?php the_field('tagline'); ?></h2>
						<div class="wide-line"></div>
					</div> <!-- /.headshot -->
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div> <!-- /.inner-wrapper -->
		</main> <!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>