<?php get_header(); ?>
<!-- have posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- blog posts -->
	<div class="container animated fadeIn">
		<div class="row">
			<?php
			$bloglayout  = of_get_option( 'blog_layout', 'right' );
			if($bloglayout == 'left')
			{?>
				<!-- Blog Sidebar Widgets Column -->
				<div class="col-md-4">
					<div class="featurette-divider"></div>
					<!-- author -->
					<div class="well blog-sidebar text-center">
						<div >
							<div class="blogpost-avatar">
								<?php echo get_avatar( get_the_author_meta('ID'), '120' ); ?>
							</div>
							<div class="blogpost-author-desc">
								<h4>
								<?php _e('Author','WP-Trigger'); ?>:
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?> </a>
								</h4>
								<?php the_author_meta('description'); if(!the_author_meta('description')) _e('No description.
								Please update your profile.','WP-Trigger'); ?>
							</div>
						</div>
					</div>
					<?php get_sidebar(); ?>
					<div class="featurette-divider"></div>
				</div>
				<!-- Blog Post Content Column -->
	            <div class="col-md-8">
					<div class="featurette-divider"></div>
					<!-- title -->
					<div class="page-header">
						<h1 id="<?php the_ID();?>"><?php the_title(); ?></h1>
					</div>
					<!-- Posted on -->
	                <p class="lead">
	                    <p><span class="glyphicon glyphicon-time"></span> <?php the_date();?> Time: <?php the_time();?></p>
	                </p>
					<hr>
					<!-- image feature -->
						<?php if(has_post_thumbnail()) : ?>
							<div class="row">
								<?php
									the_post_thumbnail('medium_large',array('class' => 'fullwidth'));
								?>
							</div>
							<hr>
						<?php endif; ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- article -->
						<?php the_content(); ?>
						<hr>
					</article>
					<!-- categories -->
					<p>
					<?php
						$categories = get_the_category();
						if(is_array($categories) || is_object($categories))
						{
							foreach ($categories as $key => $category) {
								echo '<a href="'. get_category_link($category->term_id).'" class="btn btn-warning">'. $category->cat_name .'</a>';
							}
						}
					?>
					</p>
					<p>
					<!-- tags -->
					<?php
					$tags = get_the_tags();
						if(is_array($tags) || is_object($tags))
						{
							foreach ($tags as $tag)
							{
								echo '<a href="'. get_tag_link($tag->term_id).'" class="btn btn-primary">
										'. $tag->name .'</a>';
							}
						}
					?>
					</p>
					<?php joints_related_posts();?>
					<!-- pager -->
					<ul class="pager">
						<li class="previous"><?php previous_post_link('%link'); ?></li>
						<li class="next"><?php next_post_link('%link'); ?></li>
					</ul>
				</div>
			<?php
			}
			elseif ($bloglayout == 'center')
			{
			?>
			<!-- Blog Post Content Column -->
			<div class="col-md-8 col-md-offset-2">
				<div class="featurette-divider"></div>
				<!-- title -->
				<div class="page-header">
					<h1 id="<?php the_ID();?>"><?php the_title(); ?></h1>
				</div>
				<!-- posted on -->
				<p class="lead">
					<p><span class="glyphicon glyphicon-time"></span> <?php the_date();?> Time: <?php the_time();?></p>
				</p>
				<hr>
				<!-- image feature -->
					<?php if(has_post_thumbnail()) : ?>
						<div class="row">
							<?php
								the_post_thumbnail('medium_large',array('class' => 'fullwidth'));
							?>
						</div>
						<hr>
					<?php endif; ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>>
					<!-- article -->
					<?php the_content(); ?>
					<hr>
				</article>
				<!-- categories -->
				<p>
				<?php
					$categories = get_the_category();
					if(is_array($categories) || is_object($categories))
					{
						foreach ($categories as $key => $category) {
							echo '<a href="'. get_category_link($category->term_id).'" class="btn btn-warning">'. $category->cat_name .'</a>';
						}
					}
				?>
				</p>
				<!-- tags -->
				<p>
				<?php
				$tags = get_the_tags();
					if(is_array($tags) || is_object($tags))
					{
						foreach ($tags as $tag)
						{
							echo '<a href="'. get_tag_link($tag->term_id).'" class="btn btn-primary">
									'. $tag->name .'</a>';
						}
					}
				?>
				</p>
				<!-- author -->
				<div class="col-md-12 text-center well">
					<div >
						<div class="col-md-3">
							<?php echo get_avatar( get_the_author_meta('ID'), '120' ); ?>
						</div>
						<div class="col-md-9">
							<h4>
							<?php _e('Author','WP-Trigger'); ?>:
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?> </a>
							</h4>
							<?php the_author_meta('description'); if(!the_author_meta('description')) _e('No description.
							Please update your profile.','WP-Trigger'); ?>
						</div>
					</div>
				</div>
				<?php joints_related_posts();?>
				<!-- pager -->
				<ul class="pager">
					<li class="previous"><?php previous_post_link('%link'); ?></li>
					<li class="next"><?php next_post_link('%link'); ?></li>
				</ul>
			</div>
			<?php
			}
			elseif ($bloglayout == 'right')
			{
			?>
			<!-- Blog Post Content Column -->
            <div class="col-md-8">
				<div class="featurette-divider"></div>
				<!-- title -->
				<div class="page-header">
					<h1 id="<?php the_ID();?>"><?php the_title(); ?></h1>
				</div>
				<!-- Posted on -->
                <p class="lead">
                    <p><span class="glyphicon glyphicon-time"></span> <?php the_date();?> Time: <?php the_time();?></p>
                </p>
				<hr>
				<!-- Image feature -->
					<?php if(has_post_thumbnail()) : ?>
						<div class="row">
							<?php
								the_post_thumbnail('medium_large',array('class' => 'img-responsive'));
							?>
						</div>
						<hr>
					<?php endif; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- article -->
					<?php the_content(); ?>
					<hr>
				</article>

				<!-- categories -->
				<p>
				<?php
					$categories = get_the_category();
					if(is_array($categories) || is_object($categories))
					{
						foreach ($categories as $key => $category) {
							echo '<a href="'. get_category_link($category->term_id).'" class="btn btn-warning">'. $category->cat_name .'</a>';
						}
					}
				?>
				</p>
				<!-- tags -->
				<p>
				<?php
				$tags = get_the_tags();
					if(is_array($tags) || is_object($tags))
					{
						foreach ($tags as $tag)
						{
							echo '<a href="'. get_tag_link($tag->term_id).'" class="btn btn-primary">
									'. $tag->name .'</a>';
						}
					}
				?>
				</p>
				<?php joints_related_posts();?>
				<!-- pager -->
				<ul class="pager">
					<li class="previous"><?php previous_post_link('%link'); ?></li>
					<li class="next"><?php next_post_link('%link'); ?></li>
				</ul>
			</div>
			<!-- Blog Sidebar Widgets Column -->
			<div class="col-md-4">
				<div class="featurette-divider"></div>
				<!-- author -->
				<div class="well blog-sidebar text-center">
					<div >
						<div class="blogpost-avatar">
							<?php echo get_avatar( get_the_author_meta('ID'), '120' ); ?>
						</div>
						<div class="blogpost-author-desc">
							<h4>
							<?php _e('Author','WP-Trigger'); ?>:
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?> </a>
							</h4>
							<?php the_author_meta('description'); if(!the_author_meta('description')) _e('No description.
							Please update your profile.','WP-Trigger'); ?>
						</div>
					</div>
				</div>
				<?php get_sidebar(); ?>
				<div class="featurette-divider"></div>
			</div>
			<?php
			}
			?>
		<?php endwhile; wp_reset_query(); else: ?>
		<?php endif; ?>
		</div>
		<!-- comment -->
		<?php comments_template(); ?>
	</div>
<?php get_footer(); ?>
