<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Homeland
 */

?>

<footer class="site-footer">
	<div class="container">
		<?php
		$about_heading = get_field('about_heading', "option");
		$description = get_field('description', "option");
		$copyright = get_field('copyright', "option");
		$social_link = get_field('social_link', "option");
		$facebook = $social_link['facebook'];
		$twitter = $social_link['twitter'];
		$instagram = $social_link['instagram'];
		$linkedin = $social_link['linkedin'];
		?>
		<div class="row">
			<div class="col-lg-4">
				<div class="mb-5">
					<h3 class="footer-heading mb-4"><?php echo $about_heading; ?></h3>
					<p><?php echo $description; ?></p>
				</div>

			</div>
			<div class="col-lg-4 mb-5 mb-lg-0">
				<div class="row mb-5">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Navigations</h3>
					</div>
					<div class="col-md-6 col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Buy</a></li>
							<li><a href="#">Rent</a></li>
							<li><a href="#">Properties</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Terms</a></li>
						</ul>
					</div>
				</div>


			</div>

			<div class="col-lg-4 mb-5 mb-lg-0">
				<h3 class="footer-heading mb-4">Follow Us</h3>

				<div>
					<a href="<?php echo $facebook; ?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
					<a href="<?php echo $twitter; ?>" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
					<a href="<?php echo $instagram; ?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
					<a href="<?php echo $linkedin; ?>" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
				</div>



			</div>

		</div>
		<div class="row pt-5 mt-5 text-center">
			<div class="col-md-12">
				<p>
					<?php echo $copyright; ?>
				</p>
			</div>

		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>