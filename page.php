<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_template_part("nav"); ?>
	<main  role="main" itemprop="mainContentOfPage" class="pagetext">
		<section>
		<div class="container text-center">
			<!-- understrap require the_content() to be within a loop -->
			<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
		</div>
		</section>
	</main>

<?php get_footer();
