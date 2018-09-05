<!-- Footer -->
<?php
$background = of_get_option('footer_background');
if ( $background )
{
	if ( $background['image'] )
	{
		echo '<footer style="background:url(' . $background['image'] . ') no-repeat fixed;background-size:cover;background-position:center;">';
	}
	else
	{
		echo '<footer style="background-color:' . $background['color'] . ' ">';
	}
}
else{
		echo '<footer id="five" style="background-color:#191E23">';
};
?>
	<div class="container">
		<div class="row">
		<div class="center-block">
			<div class="col-md-4 footer-widget">
				<div class="footer-caption">
				<?php
				if(is_active_sidebar('footer-sidebar-1'))
				{
					dynamic_sidebar('footer-sidebar-1');
				}
				?>
				</div>
			</div>
			<div class="col-md-4 footer-widget">
				<div class="footer-caption">
				<?php
				if(is_active_sidebar('footer-sidebar-2'))
				{
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
				</div>
			</div>
			<div class="col-md-4 footer-widget">
				<div class="footer-caption">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
				</div>
			</div>
		</div>
		</div>
		<hr>
			<div class="big-social row text-center">
				<?php
				$foottext = of_get_option('head_text_footer');
				if ( $foottext )
				{?>
					<h1 class="text-center service">
						<?php echo $foottext;?>
					</h1>
					<div class="featurette-divider"></div>
				<?php } ?>
				<div class="col-sm-offset-3">
					<?php
					$facebook = of_get_option('facebook_url');
					if ( $facebook )
					{?>
				<div class="col-sm-1 social-item facebook">
					<a href="<?php echo $facebook;?>">
						<i class="social-icon fa fa-2x fa-facebook"></i>
					</a>
				</div>
				<?php } ?>
				<?php
				$twitter = of_get_option('twitter_url');
				if ( $twitter ) {?>
				<div class="col-sm-1 social-item twitter">
					<a href="<?php echo $twitter;?>">
						<i class="social-icon fa fa-2x fa-twitter"></i>
					</a>
				</div>
				<?php } ?>
				<?php
				$google = of_get_option('google_url');
				if ( $google ) {?>
				<div class="col-sm-1 social-item google">
					<a href="<?php echo $google;?>">
						<i class="social-icon fa fa-2x fa-google-plus"></i>
					</a>
				</div>
				<?php } ?>
				<?php
				$linkedin = of_get_option('linkedin_url');
				if ( $linkedin ) {?>
				<div class="col-sm-1 social-item linkedin">
					<a href="<?php echo $facebook;?>">
						<i class="social-icon fa fa-2x fa-linkedin"></i>
					</a>
				</div>
				<?php } ?>
				<?php
				$email = of_get_option('your_email');
				if ( $email ) {?>
				<div class="col-sm-1 social-item email">
					<a href="mailto:<?php echo $email;?>">
						<i class="social-icon fa fa-2x fa-envelope"></i>
					</a>
				</div>
				<?php } ?>
				<?php
				$tel = of_get_option('your_tel');
				if ( $tel ) {?>
				<div class="col-sm-6 social-item tel">
						<i class="social-icon fa fa-2x fa-phone-square"> : <?php echo $tel;?></i>
				</div>
				<?php } ?>
				</div>
			</div>
			<p class="text-center">
				<?php echo of_get_option('footer_text','Copy Right');?>
			</p>
			<div class="featurette-divider"></div>
		</div><!-- /.container -->

</footer>
</div>
<!-- /.container -->
<?php wp_footer(); ?>
</body>
</html>
