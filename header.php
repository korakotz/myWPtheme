<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="9JIwehQNMKxTnAN19IIAEDe7Ejlg9oyXoE4jhRBLkDw" />
	<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) :
    	function theme_slug_render_title() {
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
endif;?>
	<?php wp_head(); ?>
	<script>
	$(document).ready( function () {
		setTimeout(function(){
		odometer.innerHTML = <?php echo of_get_option( 'number_one' );?>;
		odometer2.innerHTML = <?php echo of_get_option( 'number_two' );?>;
		}, 4000);
	});
	</script>
	<script>
	$(document).ready( function () {

		$('a.click').on('click', function(){
			$('#header').addClass('animated flipInY');
			$('#part-two').addClass('animated fadeIn');
			$('#firstfeaturette').addClass('animated fadeInLeft');
			$('#partthree').addClass('animated fadeIn');
			$('#partthreecontent').addClass('animated fadeInRight');
			$('#partfour').addClass('animated fadeIn');
			$('#partfive').addClass('animated fadeIn');
			$('#partfivecontent').addClass('animated fadeInRight');
			$('#partblog').addClass('animated fadeIn');
			$('#partblogcontent').addClass('animated fadeInLeft');
			$('#header').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#header').removeClass('animated flipInY');
			});
			$('#part-two').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#part-two').removeClass('animated fadeIn');
			});
			$('#firstfeaturette').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#firstfeaturette').removeClass('animated fadeInLeft');
			});
			$('#partthree').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partthree').removeClass('animated fadeIn');
			});
			$('#partthreecontent').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partthreecontent').removeClass('animated fadeInRight');
			});
			$('#partfour').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partfour').removeClass('animated fadeIn');
			});
			$('#partfive').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partfive').removeClass('animated fadeIn');
			});
			$('#partfivecontent').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partfivecontent').removeClass('animated fadeInRight');
			});
			$('#partblog').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partblog').removeClass('animated fadeIn');
			});
			$('#partblogcontent').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
			function() {
				$('#partblogcontent').removeClass('animated fadeInLeft');
			});
		});

	});
	</script>
</head>
<body <?php body_class(); ?> >
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			  <b><?php bloginfo('title'); ?></b>
		  </a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
             wp_nav_menu( array(
                 'menu'              => 'primary',
                 'theme_location'    => 'primary',
                 'depth'             => 2,
                 'menu_class'        => 'nav navbar-nav navbar-right',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                 'walker'            => new wp_bootstrap_navwalker())
             );
         	?>
	    </div>
	  </div>
	</nav>
