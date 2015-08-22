<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RH_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="blog-main" class="blog-main" role="main">
			<div class="outer-wrapper">
				<div class="inner-wrapper">
					<section class="blog-content">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

						<?php //the_post_navigation(); ?>
						</section> <!-- /.blog-content -->
						<section class="comments">
							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // End of the loop. ?>
					</section> <!-- /.comments -->
				</div> <!-- /.inner-wrapper -->
			</div> <!-- /.outer-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
