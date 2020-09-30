<?php

	/**
	 * Template Name: Customer Reviews Template
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
	<main class="site-main customer-reviews" id="main">
		<div class="background-primary pagetext">
			<div class="row paddingall">
				<div class="col-lg-6" data-aos="fade-right"  data-aos-duration="3000">
					<h3 >CUSTOMER REVIEWS</h3>
					<p class="text-white">What Are People Saying About eTrucks?</p>
					<a href="#reviews-main" class="review-link"><i class="fas fa-play"></i>Read more</a>
				</div>
				<div class="col-lg-6 circle" data-aos="fade-left"  data-aos-duration="3000"><div id="etrucksreviewsCarousel" class="carousel carousel-fade" data-ride="carousel">
						<?php echo do_shortcode('[etrucks-reviews]'); ?>
					</div></div>
			</div>

		</div>
		<div class="card-columns paddingall" id="reviews-main">

			<?php
				global $wp_query;

				// Get current page out of the current query, if available..if not set to 1.
				$paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
				$wp_query = new WP_Query(['post_type'      => 'customer_review',
										  'post_status'    => 'publish',
										  'posts_per_page' => -1,
										  'paged'          => max(1, $paged),
				]); ?>

			<?php if ($wp_query->have_posts()) : ?>
				<!-- the loop -->
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="blog-posts card"  data-aos="fade-up"	data-aos-duration="3000">
						<div><?php the_content(); ?></div>
						<div class="customer-name"><?php the_title(); ?></div>
						<div class="company-name text-primary"><?php the_field('company_name'); ?></div>
						<div class="company-location text-primary"><?php the_field('location'); ?></div>
					</div>

				<?php endwhile;
				?>
				<?php //current_paged(); ?>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>

	</main><!-- #main -->

<?php get_footer();

