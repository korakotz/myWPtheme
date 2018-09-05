<?php get_header(); ?>
<nav class="navbar navbar-default navbar-custom navbar-fixed-bottom">
  	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-3">
			<!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed nav-button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

				  <?php
	               wp_nav_menu( array(
	                   'menu'              => 'bottom',
	                   'theme_location'    => 'bottom',
	                   'depth'             => 0,
	                   'menu_class'        => 'nav navbar-nav',
	                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                   'walker'            => new wp_bootstrap_navwalker())
	               );
	           		?>
			    </div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
  	</div>
</nav>
<!-- Section One -->
<?php $showone = of_get_option( 'section_one_custom');
	if(empty($showone)){
?>
<?php
$background = of_get_option('intro_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<header id="section-one" class="header-image" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<header id="section-one" class="header-image" style="background:' . $background['color'] . ' ">';
	}
}
else{
		echo '<header id="section-one" class="header-image" style="background:#18BC9C">';
};
?>
        <div class="headline">
            <div class="container animated flipInX" id="header">
                <h1>
					<?php if ( of_get_option( 'logo_150px' ) ) { ?>
					<img class="img-logo img-responsive center-block" src="<?php echo of_get_option( 'logo_150px' ); ?>" />
		  			<?php } else { ?>
					<?php bloginfo('title'); ?>
					<?php } ?>
				</h1>
				<hr class="intro-divider">
                <h2><?php echo of_get_option( 'intro_message_h2_text', 'no entry' ); ?></h2>
            </div>
        </div>
</header>
<?php }
else{
	echo of_get_option( 'section_one_custom_text' );
}?>
<!-- End section one -->


<?php $showtwo = of_get_option( 'section_two_custom');
	if(empty($showtwo)){
?>
<?php
$background = of_get_option('section_two_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<section id="featurette" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<section id="featurette" style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<section id="featurette" style="background-color:transparent;">';
};
?>

<!-- Section Two -->
<?php
$sectionhead = of_get_option('section_two_head_text');
if ($sectionhead)
{?>
<div class="row">
	<?php
	$background = of_get_option('section_two_head_background');
	if ( $background ) {
		if ( $background['image'] ) {
			echo '<div id="section-two" class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
		}
		else {
			echo '<div id="section-two" class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
		}
	}
	else{
			echo '<div id="section-two" class="col-lg-12 service" style="background-color:transparent;">';
	};
	?>
		<h1 id="part-two" class="service1 text-center service">
			<?php echo of_get_option( 'section_two_head_text' );?>
		</h1>
	</div>
</div>
<?php } ?>
<div class="container">
<?php
$featureone =  of_get_option( 'title_one_text' );
if ($featureone)
{?>
	<!-- First Featurette -->
	<div class="featurette" id="firstfeaturette">
            <img class="featurette-image img-rounded img-thumbnail img-responsive pull-right" src="<?php echo of_get_option( 'feature_one_image' ); ?>">
			<div class="featurette-divider"></div>
			<h2 class="featurette-heading">
				<b><?php echo of_get_option( 'title_one_text', 'no entry' ); ?></b>
            </h2>
            <p class="lead">
				<?php echo of_get_option( 'description_one_text', 'no entry' ); ?>
			</p>
    </div>
	<hr class="featurette-divider">
<?php
}
$featuretwo =  of_get_option( 'title_two_text' );
if ($featuretwo)
{?>
	<!-- Second Featurette -->
	<div class="featurette" id="services">
            <img class="featurette-image img-rounded img-thumbnail img-responsive pull-left" src="<?php echo of_get_option( 'feature_two_image' ); ?>">
			<div class="featurette-divider"></div>
			<h2 class="featurette-heading">
				<b><?php echo of_get_option( 'title_two_text', 'no entry' ); ?></b>
            </h2>
            <p class="lead">
            	<?php echo of_get_option( 'description_two_text', 'no entry' ); ?>
            </p>
    </div>
	<hr class="featurette-divider">
<?php
}
$featurethree =  of_get_option( 'title_three_text' );
if ($featurethree)
{?>
	<!-- Third Featurette -->
	<div class="featurette" id="contact">
            <img class="featurette-image img-rounded img-thumbnail img-responsive pull-right" src="<?php echo of_get_option( 'feature_three_image' ); ?>">
<div class="featurette-divider"></div>
			<h2 class="featurette-heading">
				<b><?php echo of_get_option( 'title_three_text', 'no entry' ); ?></b>
            </h2>
            <p class="lead">
            	<?php echo of_get_option( 'description_three_text', 'no entry' ); ?>
            </p>
    </div>
<?php }?>
</div>
</section>
<?php }
else{
	echo of_get_option( 'section_two_custom_text' );
}?>
<!-- End section two -->

<!-- section three -->
<?php $showthree = of_get_option( 'section_three_custom');
	if(empty($showthree)){
?>

<?php
$background = of_get_option('section_three_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<section id="portfolio" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<section id="portfolio" style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<section id="portfolio" style="background-color:white">';
};
?>

<div class="container-fulid">
	<div class="row">
	<?php
	$background = of_get_option('section_three_head_background');
	if ( $background ) {
		if ( $background['image'] ) {
			echo '<div id="section-three" class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
		}
		else {
			echo '<div id="section-three" class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
		}
	}
	else{
			echo '<div id="section-three" class="col-lg-12 service" style="background-color:transparent;">';
	};
	?>
		<h1 id="partthree" class="text-center service">
			<?php echo of_get_option( 'section_three_head_text' );?>
		</h1>
		</div>
	</div>
</div>

	<div class="container" id="partthreecontent">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<hr>
				<!-- tags -->
				<?php
				$cat_args = array(
				    'orderby'       => 'term_id',
				    'order'         => 'ASC',
				    'hide_empty'    => true,
				);

				$terms = get_terms('portfoliotag', $cat_args);
					foreach($terms as $taxonomy){

						echo '<a href="'. esc_url( get_term_link( $taxonomy->term_id ) ) . '" class="btn btn-primary">
								'. $taxonomy->name .'</a>';

					}
				?>
				<hr>
			</div>
		</div>
		<!-- portfolio post type -->
		<?php
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
			$loop = new WP_Query( $args );
		?>
		<div class="row">
		<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-md-4 col-sm-6 team-member">
					<div class="caption">
					<a href="<?php the_permalink(); ?>">

						 <?php
		 					if ( has_post_thumbnail() ) {
		 						the_post_thumbnail('medium_large' ,array('class' => 'img-responsive img-portfolio'));
		 					}
		 				?>
	                 </a>
					 <div class="caption-desc text-center">
 						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p><?php the_excerpt(); ?></p>
					</div>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); else: ?>
				<div class="col-md-4 col-sm-6 portfolio-item">
				<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php }
else{
	echo of_get_option( 'section_three_custom_text' );
}?>
<!-- End section three  -->

<!-- section four  -->
<?php $showfour = of_get_option( 'section_four_custom');
	if(empty($showfour)){
?>
<?php
$background = of_get_option('section_four_one_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<section id="four" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<section id="four" style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<section id="four" style="background-color:transparent;">';
};
?>
	<div class="container-fulid">
		<div class="row">
			<?php
			$background = of_get_option('section_four_head_background');
			if ( $background ) {
				if ( $background['image'] ) {
					echo '<div id="section-four" class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
				}
				else {
					echo '<div id="section-four" class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
				}
			}
			else{
					echo '<div id="section-four" class="col-lg-12 service" style="background-color:transparent;">';
			};
			?>
				<h1 id="partfour" class="text-center service">
					<?php echo of_get_option( 'section_four_head_text' );?>
				</h1>
			</div>
		</div>
	</div>
<div class="meter">
	<div id="partfourcontent" class="container testimonials">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center background-rgba">
				<div id="odometer" class="odometer">0</div>
				<h2 class="big-font"><b><?php echo of_get_option( 'number_one_text' );?></b></h2>
				<hr>
				<div id="odometer2" class="odometer">0</div>
				<h2 class="big-font"><b><?php echo of_get_option( 'number_two_text' );?></b></h2>
				<hr>
			</div>
		</div>
	</div>
</div>
</section>
<?php
$showtestimonial = of_get_option( 'sub_head_text');
if($showtestimonial)
{
?>
<section id="carousel">
	<?php
	$background = of_get_option('section_four_two_background');
	if ( $background ) {
		if ( $background['image'] ) {
			echo '<section id="section-four" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
		}
		else {
			echo '<section id="section-four" style="background-color:' . $background['color'] . ' ">';
		}
	}
	else{
			echo '<section id="section-four" style="background-color:transparent;">';
	};
	?>
		<div class="container-fulid">
			<div class="row">
				<?php
				$background = of_get_option('section_four_two_head_background');
				if ( $background ) {
					if ( $background['image'] ) {
						echo '<div id="test" class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
					}
					else {
						echo '<div id="test" class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
					}
				}
				else{
						echo '<div id="test" class="col-lg-12 service" style="background-color:transparent;">';
				};
				?>
					<h1 class="text-center service">
						<?php echo of_get_option( 'sub_head_text' );?>
					</h1>
				</div>
			</div>
		</div>
		<div class="container testimonials">
			<div class="col-md-12 col-sm-12 text-center">
						<hr>
						<!-- tags -->
						<?php
						$cat_args = array(
						    'orderby'       => 'term_id',
						    'order'         => 'ASC',
						    'hide_empty'    => true,
						);

						$terms = get_terms('testimonialtag', $cat_args);
							foreach($terms as $taxonomy){

								echo '<a href="'. esc_url( get_term_link( $taxonomy->term_id ) ) . '" class="btn btn-primary">
										'. $taxonomy->name .'</a>';

							}
						?>
						<hr>
					</div>
			<div class="row text-center">
				<div>
				<!-- portfolio post type -->
				<?php
					$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 4 );
					$loop = new WP_Query( $args );
				?>
				<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="col-md-6 text-center blogpost">
						<div id="testimonial">
							<div class="testimonials-image">
								<a href="<?php the_permalink(); ?>">
								 <?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('medium_large' ,array('class' => 'img-responsive testimonials-image'));
									}
								?>
							</a>
							</div>
							<div class="caption-desc">
							 <h3>
							 <a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
							</h3>
							<?php the_excerpt(); ?>
							</div>
						</div>
						</div>
					<?php endwhile; wp_reset_query(); else: ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
					<?php endif; ?>
		</div>
		</div>
		</div>
</section>
</section>

<?php
}
}
else
{
	echo of_get_option( 'section_four_custom_text' );
}?>
<!-- End section four  -->

<!-- blog section -->
<?php $showblog = of_get_option( 'blog_head_text');
	if($showblog){
?>
<?php
$background = of_get_option('section_blog_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<section id="blog" class="blog" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<section id="blog" class="blog" style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<section id="blog" class="blog" style="background-color:transparent;">';
};
?>
			<?php
			$background = of_get_option('blog_head_background');
			if ( $background ) {
				if ( $background['image'] ) {
					echo '<div class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
				}
				else {
					echo '<div class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
				}
			}
			else{
					echo '<div class="col-lg-12 service" style="background-color:transparent;">';
			};
			?>
				<h1 id="partblog" class="text-center service">
					<?php echo of_get_option( 'blog_head_text','Blog' );?>
				</h1>
			</div>
			<div id="partblogcontent" class="container">
				<div class="row">
					<!-- Blog Entries Column -->
					<?php
					$bloglayout  = of_get_option( 'blog_layout', 'right' );
					if($bloglayout == 'left')
					{?>
						<!-- Blog Sidebar Widgets Column -->
							<div class="col-md-4 col-lg-4 col-sm-4 blogpost">
								<div class="featurette-divider"></div>
								<?php get_sidebar(); ?>
								<div class="featurette-divider"></div>
							</div>
							<div class="col-sm-8 col-lg-8 col-md-8 blogpost">
								<div class="featurette-divider"></div>
								<!-- First Blog Post -->
								<?php query_posts('showposts=4'); ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<div class="col-md-6">
									<div class="caption">
										<a href="<?php the_permalink(); ?>">
										<!-- <div class="col-md-4"> -->
											<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail('medium_large', array('class' => 'img-responsive home-blog-image'));
												}
											?>
										<!-- </div> -->
										<div class="caption-desc text-center">
											<p>
												<?php the_title(); ?>
											</p>
											</a>
											<p><?php the_excerpt(); ?></p>
										</div>
										</div>
									</div>

								<?php endwhile; wp_reset_query(); else: ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
								<?php endif; ?>
							</div>
					<?php }
					elseif ($bloglayout == 'center')
					{ ?>
						<div class="col-md-10 col-md-offset-1 blogpost">

							<!-- First Blog Post -->
							<?php query_posts('showposts=4'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="col-md-6">
								<div class="caption">
									<a href="<?php the_permalink(); ?>">
									<!-- <div class="col-md-4"> -->
										<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail('medium_large', array('class' => 'img-responsive home-blog-image'));
											}
										?>
									<!-- </div> -->
									<div class="caption-desc text-center">
										<p>
											<?php the_title(); ?>
										</p>
										</a>
										<p><?php the_excerpt(); ?></p>
									</div>
									</div>
								</div>

							<?php endwhile; wp_reset_query(); else: ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
							<?php endif; ?>
						</div>
					<?php }
					elseif ($bloglayout == 'right')
					{?>

						<div class="col-sm-8 col-lg-8 col-md-8 blogpost">
							<div class="featurette-divider"></div>
							<!-- First Blog Post -->
							<?php
							$blogposts_number = of_get_option('blogposts_select','4');
							query_posts('showposts='.$blogposts_number);
							?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="col-md-6">
								<div class="caption">
									<a href="<?php the_permalink(); ?>">
									<!-- <div class="col-md-4"> -->
										<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail('medium_large', array('class' => 'img-responsive home-blog-image'));
											}
										?>
									<!-- </div> -->
									<div class="caption-desc text-center">
										<p>
											<?php the_title(); ?>
										</p>
										</a>
										<p><?php the_excerpt(); ?></p>
									</div>
									</div>
								</div>

							<?php endwhile; wp_reset_query(); else: ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.');?></p>
							<?php endif; ?>
						</div>

						<!-- Blog Sidebar Widgets Column -->
							<div class="col-md-4 col-lg-4 col-sm-4 blogpost">
								<div class="featurette-divider"></div>
								<?php get_sidebar(); ?>
								<div class="featurette-divider"></div>
							</div>
					<?php }?>
			</div>
		</div>
</section>
<?php }
else{

}?>
<!-- End blog section -->


<?php $showfive = of_get_option( 'section_five_custom');
	if(empty($showfive)){
?>
<!-- Section five -->
<?php
$background = of_get_option('section_five_background');
if ( $background ) {
	if ( $background['image'] ) {
		echo '<section id="five" style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else {
		echo '<section id="five" style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<section id="five" style="background-color:gray">';
};
?>
	<div class="container-fulid">
		<div class="row">
			<?php
			$background = of_get_option('section_five_head_background');
			if ( $background ) {
				if ( $background['image'] ) {
					echo '<div id="section-five" class="col-lg-12 service" style="background-image:url(' . $background['image'] . ');">';
				}
				else {
					echo '<div id="section-five" class="col-lg-12 service" style="background-color:' . $background['color'] . ' ">';
				}
			}
			else{
					echo '<div id="section-five" class="col-lg-12 service" style="background-color:transparent;">';
			};
			?>
				<h1 id="partfive" class="text-center service">
					<?php echo of_get_option( 'section_five_head_text' );?>
				</h1>
			</div>
		</div>
	</div>
	<div id="partfivecontent" class="container">
		<div class="row text-center">
			<?php
			$blogusers = get_users( 'orderby=id&role=author' );
			if(empty($blogusers))
			{
				echo 'no user';
			}
			else{
				foreach ( $blogusers as $user ) {
					$userID = $user->ID;
			?>
			<div class="col-md-4 col-sm-6 team-member">
					<div class="caption">
                        <?php echo get_avatar( $user->user_email, 280 ); ?>
						<div class="caption-desc">
	                        <h4><?php echo $user->first_name . ' ' .  $user->last_name;?></h4>
							<p><?php echo $user->description; ?></p>
	                        <ul class="list-inline social-buttons">
	                            <li><a target="_blank" href="<?php echo the_author_meta( 'twitter_profile', $userID ); ?>"><i class="fa fa-twitter"></i></a>
	                            </li>
	                            <li><a target="_blank" href="<?php echo the_author_meta( 'facebook_profile', $userID ); ?>"><i class="fa fa-facebook"></i></a>
	                            </li>
	                            <li><a target="_blank" href="<?php echo the_author_meta( 'linkedin_profile', $userID ); ?>"><i class="fa fa-linkedin"></i></a>
	                            </li>
								<li><a target="_blank" href="<?php echo the_author_meta( 'google_profile', $userID ); ?>"><i class="fa fa-google-plus"></i></a>
	                            </li>
								<li><a  href="mailto:<?php echo $user->user_email?>"><i class="fa fa-envelope"></i></a>
	                            </li>
	                        </ul>
						</div>
					</div>
            </div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>
<?php }
else{
	echo of_get_option( 'section_five_custom_text' );
}?>
<!-- End section five -->
<?php get_footer(); ?>
