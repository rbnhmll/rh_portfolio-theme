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
	<section class="home-container" data-stellar-background-ratio="1.5">
		<div class="inner-wrapper">
			<div class="tagline">
				<div class="wide-line animated fadeInLeftBig"></div>
				<h2 class="dev-name animated fadeIn"><?php bloginfo( 'name' ); ?></h2>
				<h3 class="site-description animated fadeIn"><?php bloginfo( 'description' ); ?></h3>
				<div class="wide-line animated fadeInRightBig"></div>
			</div> <!-- /.tagline -->
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.home-container -->


<!-- ABOUT SECTION -->
	<section class="about-container" id="about">
		<div class="inner-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_field('about_section_title'); ?></h3>
				<div class="little-line dark"></div>
				<div class="about-content">
					<div class="headshot">
						<img src="<?php the_field('photo'); ?>" alt="">
					</div> <!-- /.headshot -->
					<div class="about-text">
						<?php the_field('about_description'); ?>
					</div> <!-- /.about-text -->
				</div> <!-- /.about-content -->
				<a href="" class="cv button">View CV</a>
			<?php endwhile; ?>
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.about-container -->


<!-- PORTFOLIO SECTION -->
	<section class="portfolio-container" id="portfolio">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="inner-wrapper">
					<h3><?php the_field('portfolio_section_title'); ?></h3>
					<div class="little-line light"></div>
					<div class="work-items">
						<?php $workArgs = array(
							'sort_order' => 'asc',
							'sort_column' => 'menu_order',
							'post_type' => 'portfolio',
							'post_status' => 'publish',
							'posts_per_page' => 3
						); 
						?>

						<?php $workQuery = new WP_Query( $workArgs ); ?>

						<?php if ( $workQuery->have_posts() ) : ?>

						<?php while ( $workQuery->have_posts() ) : $workQuery->the_post(); ?>
								<div class="portfolio-item">
									<div class="portfolio-image">
										<img src="<?php the_field('portfolio_image') ?>" alt="Portfolio Sample Image">
									</div> <!-- /.portfolio-image -->
									<div class="portfolio-text">
										<h4><?php the_title(); ?></h4>
										
										<?php //$postID = get_the_ID(); ?>
										<!--<div class="tech-tags">--><?php //the_terms( $postID,'technology', '', ' // ', '' ); ?>
										<!-- </div> --> <!-- /.tech-tag			font-weight: 300;s -->


										<?php $taxonomyItems = get_the_terms($post->ID, 'technology', '', ',', '');
										  //performs one time for each taxonomy item
										  foreach ($taxonomyItems as $taxonomyItem) {
											// prints the taxonomy name wrapped in custom characters
											echo '<div class="tech">'.$taxonomyItem->name.'</div>';
										   };
										  ?>

										<?php the_excerpt(); ?>
										<a href="<?php the_field('live_link'); ?>" class="viewLive button" target="_blank">View Live</a>
									</div> <!-- /.portfolio-text -->
								</div> <!-- /.portfolio-item -->
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

						<?php else:  ?>
							<p>There are no posts to display.</p>
						<?php endif; ?>
					</div> <!-- /.work-items -->
				</div> <!-- /.inner-wrapper -->
				<?php the_content(); ?>
			<?php endwhile; ?>
	</section> <!-- /.portfolio-container -->


<!-- TOOLS SECTION -->
	<section class="blog-container" id="tools">
		<div class="inner-wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_field('blog_section_title'); ?></h3>
				<div class="little-line dark"></div>
				<p><?php the_field('blog_description'); ?></p>
			<?php endwhile; ?>
			<div class="skill-icons">
				<span class="devicons devicons-html5" title="HTML5"></span>
				<span class="devicons devicons-css3" title="CSS3"></span>
				<span class="devicons devicons-sass" title="SASS"></span>
				<span class="devicons devicons-javascript_badge" title="Javascript"></span>
				<span class="devicons devicons-jquery" title="jQuery"></span>
				<span class="devicons devicons-wordpress" title="Wordpress"></span>
				<span class="devicons devicons-git" title="Git"></span>
				<span class="devicons devicons-github_badge" title="Github"></span>
				<span class="devicons devicons-gulp" title="Gulp"></span>
			</div> <!-- /.skill-icons -->
		</div> <!-- /.inner-wrapper -->
	</section> <!-- /.blog-container -->


<!-- CONTACT SECTION -->
	<section class="contact-container" id="contact" data-stellar-background-ratio="0.5">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="inner-wrapper">
				<h3><?php the_field('contact_section_title'); ?></h3>
				<div class="little-line light"></div>
				<p><?php the_field('contact_description'); ?></p>
				<div class="info-form-container">
					<div class="information">
						<h4>Let's work together</h4>
						<div class="contact-box">
							<a href="http://twitter.com/<?php the_field('twitter'); ?>" class="social-button"><i class="fa fa-twitter"></i></a>
							<a href="http://github.com/<?php the_field('github'); ?>" class="social-button"><i class="fa fa-github"></i></a>
							<a href="<?php the_field('linkedin'); ?>" class="social-button"><i class="fa fa-linkedin"></i></a>
						</div> <!-- /.contact-box -->
						<a href="mailto:hi@robinhamill.ca" class="button email-btn">hi@robinhamill.ca</a>
					</div> <!-- /.information -->
					
					<form action="http://formspree.io/hi@robinhamill.ca" method="POST" class="contact-form">
						<input type="text" class="name-input" name="name" placeholder="Name">
						<input type="email" class="email-input" name="_replyto" placeholder="E-Mail">
						<textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
						<input type="text" name="_gotcha" style="display:none" />
						<input type="submit" value="Send Message" class="submit-button">
					</form>
				</div> <!-- /.info-form-container -->
			</div> <!-- /.inner-wrapper -->
			<?php endwhile; ?>
		<a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
	</section> <!-- /.contact-container -->

<?php get_footer(); ?>