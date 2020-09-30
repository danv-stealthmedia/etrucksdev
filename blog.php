<?php

	/**
	 * Template Name: Blog Template
	 *
	 * @package     STEALTH
	 * @license     http://opensource.org/licenses/gpl-license.php  GNU Public License
	 * @author      STEALTH Media
	 * @copyright   2019 STEALTH Media
	 * @link        https://www.stealthmedia.com
	 * @since       1.0.0
	 */
	get_header();

	$size = 'page-header';

?>
<?php get_template_part("nav"); ?>
	<main class="site-main" id="main">
		<div class="background-primary pagetext">
			<div id="etrucksrecentpostsCarousel" class="carousel carousel-fade paddingall pt-0" data-ride="carousel">
				<?php echo do_shortcode('[etrucks-recentposts]'); ?>
			</div>
		</div>
		<div class="row paddingall blog-row">

			<?php
				global $wp_query;

				// Get current page out of the current query, if available..if not set to 1.
				$paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
				$wp_query = new WP_Query(['post_type'      => 'post',
										  'post_status'    => 'publish',
										  'posts_per_page' => 9,
										  'paged'          => max(1, $paged),
				]); ?>

			<?php if ($wp_query->have_posts()) : ?>
				<!-- the loop -->
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="col-lg-4 blog-posts"  data-aos="fade-up"
							data-aos-duration="3000">
						<div class="margin-div">
						<a class="custom-blog-links" href="<?php the_permalink(); ?>">
						<div class="post-image"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></div>
						<div class="post-title text-primary"><?php the_title(); ?></div>
						<div class="post-date"><?php echo get_the_date(); ?></div>
						</a>
					</div>
					</div>
				<?php endwhile;
				?>
				<?php //current_paged(); ?>
				<div class="blog-pagination paddingtopbottom pb-0">
					<?php
						/** Previous Post Link */
						printf('<span class="previous-link">%s</span>'."\n", get_previous_posts_link());

						$count_posts = wp_count_posts();
						$published_posts = $count_posts->publish;
						$page_amount = ceil($published_posts / 9);

							echo '<div class="pagenumbers"><span class="pageno">'.$paged.'</span>'.'<span class="pageamnt">'.' of '.$page_amount.'</span></div>';

						printf('<span class="next-link">%s</span>'."\n", get_next_posts_link()); ?></div>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>

	</main><!-- #main -->

<?php get_footer();

