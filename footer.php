<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RH_portfolio
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-wrapper">
			<div class="social-buttons">
				<a href="http://twitter.com/<?php the_field('twitter'); ?>" class="social-button"><i class="fa fa-twitter"></i></a>
				<a href="http://instagram.com/<?php the_field('instagram'); ?>" class="social-button"><i class="fa fa-instagram"></i></a>
				<a href="http://github.com/<?php the_field('github'); ?>" class="social-button"><i class="fa fa-github"></i></a>
				<a href="<?php the_field('linkedin'); ?>" class="social-button"><i class="fa fa-linkedin"></i></a>
			</div>
			<div class="site-info">
				<p>&copy; robinhamill.ca<span class="sep"> | </span>All rights reserved <?php echo date("Y"); ?></p>
			</div><!-- .site-info -->
		</div> <!-- /.inner-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
