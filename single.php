<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part("nav"); ?>

	<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<main class="site-main pagetext" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="single-page" id="post-<?php the_ID(); ?>">
	<div class="custom-padding">
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
						<header class="entry-header">
							<div class="post-date"><?php echo get_the_date(); ?></div>
							<div class="post-title text-primary"><h1 class="text-blue"><?php the_title(); ?></h1></div>


						</header><!-- .entry-header -->


						<div class="entry-content">

							<?php the_content(); ?>



						</div><!-- .entry-content -->
	</div>
						<div class="background-primary free-trial-section">
							<div class="row paddingleftright pt-4 pb-4  align-items-center justify-content-center flex-column"><p class="text-white">We want to make IFTA reports and other fuel tax reports easy for you.
									Why not take advantage of our 31-day free trial?</p>
								<a class="btn btn-secondary" href="https://app.etrucks.com/signup">START YOUR FREE 31 DAY TRIAL</a>
							</div>
						</div>

					</article><!-- #post-## -->
					<?php echo do_shortcode('[yarpp]'); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
