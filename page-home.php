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

<!-- HOME SECTION -->
	<section class="home-container">
		<div class="inner-wrapper">
			<div class="tagline">
				<div class="wide-line"></div>
				<h2><?php the_field('tagline'); ?></h2>
				<div class="wide-line"></div>
			</div> <!-- /.tagline -->
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.home-container -->


<!-- ABOUT SECTION -->
	<section class="about-container">
		<div class="inner-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_field('about_section_title'); ?></h3>
				<div class="headshot">
					<img src="<?php the_field('photo'); ?>" alt="">
				</div> <!-- /.headshot -->
				<?php the_field('about_description'); ?>
				<a href="">View CV</a>
			<?php endwhile; ?>
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.about-container -->


<!-- PORTFOLIO SECTION -->
	<section class="portfolio-container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="inner-wrapper">
					<h3><?php the_field('portfolio_section_title'); ?></h3>
				</div> <!-- /.inner-wrapper -->
				<?php the_content(); ?>
			<?php endwhile; ?>
	</section> <!-- /.portfolio-container -->


<!-- BLOG SECTION -->
	<section class="blog-container">
		<div class="inner-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_field('blog_section_title'); ?></h3>
				<p><?php the_field('blog_description'); ?></p>
			<?php endwhile; ?>
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.blog-container -->


<!-- CONTACT SECTION -->
	<section class="contact-container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="inner-wrapper">
				<h3><?php the_field('contact_section_title'); ?></h3>
				<p><?php the_field('contact_description'); ?></p>
			</div> <!-- /.inner-wrapper -->
			<div class="outer-wrapper">
				<div class="information"></div>
				<form action="" class="contact-form">
					<input type="text" class="name-input">
					<input type="email" class="email-input">
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<input type="submit" value="Send Message" class="submit-button">
				</form>
			</div> <!-- /.outer-wrapper -->
			<?php endwhile; ?>
	</section> <!-- /.contact-container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>