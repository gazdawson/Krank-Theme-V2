<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'krank'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
	
	<article <?php post_class(); ?>>
	    <a href="<?php the_permalink(); ?>" class="logo-link" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('brand-logo', array('class' => 'logo')); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
		</a>
		<?php // New brand badges
			if (get_post_meta( $post->ID, '_cmb_new_badge', true ) !== "") :
				echo '<span class="new badge">NEW</span>';
			endif;
		?>
	</article>
	
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'krank')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'krank')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

