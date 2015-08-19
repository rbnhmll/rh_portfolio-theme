<?php
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

	<section class="home-container">
		<div class="tagline">
			<div class="wide-line"></div>
			<h2><?php the_field('tagline'); ?></h2>
			<div class="wide-line"></div>
		</div> <!-- /.tagline -->
	</section> <!-- /.home-container -->

	<section class="about-container">
		<div class="inner-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="headshot">
					<img src="<?php the_field('photo'); ?>" alt="">
				</div> <!-- /.headshot -->
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.about-container -->

	<section class="portfolio-container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="headshot">
					<img src="<?php the_field('photo'); ?>" alt="">
				</div> <!-- /.headshot -->
				<?php the_content(); ?>
			<?php endwhile; ?>
	</section> <!-- /.portfolio-container -->

	<section class="blog-container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="headshot">
					<img src="<?php the_field('photo'); ?>" alt="">
				</div> <!-- /.headshot -->
				<?php the_content(); ?>
			<?php endwhile; ?>
	</section> <!-- /.blog-container -->

	<section class="contact-container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="headshot">
					<img src="<?php the_field('photo'); ?>" alt="">
				</div> <!-- /.headshot -->
				<?php the_content(); ?>
			<?php endwhile; ?>
	</section> <!-- /.contact-container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>