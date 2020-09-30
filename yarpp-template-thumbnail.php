<?php
	/*
	YARPP Template: Thumbnails
	Description: Requires a theme which supports post thumbnails
	Author: YARPP Team
	*/ ?>

<?php if (have_posts()): ?>

	<div class="row  blog-row paddingleftright">
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-lg-4 blog-posts">
				<a class="custom-blog-link" href="<?php the_permalink(); ?>"></a>
				<div class="post-image"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></div>
				<div class="post-title text-primary"><?php the_title(); ?></div>
				<div class="post-date"><?php echo get_the_date(); ?></div>
			</div>
		<?php endwhile; ?>

	</div>
<?php else: ?>
	<p>No related photos.</p>
<?php endif; ?>
