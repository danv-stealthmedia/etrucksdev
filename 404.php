<?php

	get_header();

	$size = 'page-header';

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part("nav"); ?>

	<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<main class="site-main pagetext" id="main">

					<article class="single-page" id="post-<?php the_ID(); ?>">
					<div class="custom-padding">
						<header class="entry-header">
							<div class="post-title text-primary"><h1 class="text-blue">Error 404</h1></div>


						</header>
						<div class="entry-content">
							<p>The page you are looking for was not found</p>
						</div><!-- .entry-content -->
					</div>
					<div class="background-primary free-trial-section">
						<div class="row paddingleftright pt-4 pb-4  align-items-center justify-content-center flex-column"><p class="text-white">We want to make IFTA reports and other fuel tax reports easy for you.
								Why not take advantage of our 31-day free trial?</p>
							<a class="btn btn-secondary" href="https://app.etrucks.com/signup">START YOUR FREE 31 DAY TRIAL</a>
						</div>
					</div>
					</article><!-- #post-## -->

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
