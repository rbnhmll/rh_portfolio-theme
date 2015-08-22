<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h3><?php the_field('blog_section_title'); ?></h3>
				<div class="little-line dark"></div>
				<p><?php the_field('blog_description'); ?></p>
				<div class="blog-posts">
					<?php $args = array(
						'sort_order' => 'asc',
						'sort_column' => 'menu_order',
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 3
					); 
					?>

					<?php $blogQuery = new WP_Query( $args ); ?>

					<?php if ( $blogQuery->have_posts() ) : ?>

					<?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
							<div class="blog-post">
								<h4><?php the_title(); ?></h4>
								<?php the_excerpt(); ?>
								<?php  ?><a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
							</div>
					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

					<?php else:  ?>
						
					<?php endif; ?>
				</div> <!-- /.blog-posts -->
			<?php endwhile; ?>