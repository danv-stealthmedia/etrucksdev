<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="paddingall" id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	<header class="entry-header">
		<div class="post-title text-primary"><?php the_title(); ?></div>
		<div class="post-date"><?php echo get_the_date(); ?></div>

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php the_content(); ?>



	</div><!-- .entry-content -->


</article><!-- #post-## -->



