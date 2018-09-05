<?php get_header(); ?>
<!-- have posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- แสดงบทความ -->
	<div class="container animated fadeIn">
		<article class="">
			<!-- บทความ -->
			<?php the_content(); ?>
			<hr />
		</article>
		<!-- tags -->
		<?php
			$tags = get_the_tags();
			if(is_array($tags) || is_object($tags))
			{
			foreach ($tags as $tag)
			{
				echo '<a href="'. get_tag_link($tag->term_id).'" class="btn btn-info">
						'. $tag->name .'</a>';
			}
			}
		?>
	</div>
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
