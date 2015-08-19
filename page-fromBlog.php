<?php

/*
	Template Name: FromBlog Page
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
		<main id="main" class="site-main" role="main">

			<?php

			/*
				Template Name: About Page
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
					<main id="main" class="site-main" role="main">
						<div class="inner-wrapper">
							<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							<?php endwhile; ?>
						
						</div> <!-- /.inner-wrapper -->
					</main> <!-- #main -->
				</div><!-- #primary -->

			<?php //get_sidebar(); ?>
			<?php get_footer(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
