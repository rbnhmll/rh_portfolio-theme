<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RH_portfolio
 */

get_header(); ?>

	<div class="section">
  <div class="innerWrapper">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
				<?php the_field('short_description'); ?>
				<?php the_field('long_description'); ?>
      <?php endwhile; // end of the loop. ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
