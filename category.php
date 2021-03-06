<?php get_header(); ?>
<div class="container animated fadeInRight">
<div class="row">
	<h1 class="page-header text-center">
		<?php single_cat_title(); ?>
	</h1>
	<div class="col-md-8 col-md-offset-2">
	<?php echo category_description(); ?>
	</div>
		<!-- Blog Entries Column -->
	<?php
	$bloglayout  = of_get_option( 'blog_layout', 'right' );
	if($bloglayout == 'left')
	{?>
		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<!-- Blog posts -->
		<div class="col-md-8">

			<h1 class="page-header">
				Last Post
			</h1>

			<!-- First Blog Post -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('feature', array('class' => 'img-responsive img-thumbnail'));
							}
						?>
						</a>
					</div>
					<div class="col-md-8">
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date();?> Time: <?php the_time();?></p>
						<p><?php the_excerpt(); ?></p>
						<a class="btn btn-primary" href="<?php the_permalink(); ?>">
							Read More
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<hr>
			<?php endwhile; wp_reset_query(); else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
			<?php endif; ?>

			<!-- Pager -->
			<?php custom_pagination(); ?>

		</div>

	<?php
	}
	elseif ($bloglayout == 'center')
	{?>
		<div class="col-md-8 col-md-offset-2">

			<h1 class="page-header">
				Last Post
			</h1>

			<!-- First Blog Post -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-4">
					<a href="<?php the_permalink(); ?>">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('feature', array('class' => 'img-responsive img-thumbnail'));
							}
						?>
					</a>
					</div>
					<div class="col-md-8">
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date();?> Time: <?php the_time();?></p>
						<p><?php the_excerpt(); ?></p>
						<a class="btn btn-primary" href="<?php the_permalink(); ?>">
							Read More
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<hr>
			<?php endwhile; wp_reset_query(); else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
			<?php endif; ?>

			<!-- Pager -->
			<?php custom_pagination(); ?>

		</div>
	<?php
	}
	elseif ($bloglayout == 'right')
	{?>
		<div class="col-md-8">

			<h1 class="page-header">
				Last Post
			</h1>

			<!-- First Blog Post -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('feature', array('class' => 'img-responsive img-thumbnail'));
							}
						?>
						</a>
					</div>
					<div class="col-md-8">
						<h3>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date();?> Time: <?php the_time();?></p>
						<p><?php the_excerpt(); ?></p>
						<a class="btn btn-primary" href="<?php the_permalink(); ?>">
							Read More
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<hr>
			<?php endwhile; wp_reset_query(); else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
			<?php endif; ?>

			<!-- Pager -->
			<?php custom_pagination(); ?>

		</div>
		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	<?php
	}
	?>

</div>
</div>
<!-- /.row -->

<hr>
<?php get_footer(); ?>
