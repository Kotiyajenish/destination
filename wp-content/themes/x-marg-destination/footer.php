<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package X_MARG_DESTINATION
 */

?>
<?php
$contact_address = get_field('contact_address', 'option');
$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');
?>
<footer id="colophon" class="site-footer">
	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-3">Company</h4>
					<a class="btn btn-link" href="">About Us</a>
					<a class="btn btn-link" href="">Contact Us</a>
					<a class="btn btn-link" href="">Privacy Policy</a>
					<a class="btn btn-link" href="">Terms & Condition</a>
					<a class="btn btn-link" href="">FAQs & Help</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-3">Contact</h4>

					<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $contact_address; ?></p>
					<p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $contact_number; ?></p>
					<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $contact_email; ?></p>
					<div class="d-flex pt-2">

						<?php if (get_field('social_icons', 'option')): ?>
							<?php while (the_repeater_field('social_icons', 'option')): ?>
								<a class="btn btn-outline-light btn-social" href="<?= the_sub_field('icon_link'); ?>">
									<?= the_sub_field('icon_name'); ?>
								</a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-3">Gallery</h4>
					<div class="row g-2 pt-2">
						<div class="owl-carousel footer_owl-c">
							<?php if (get_field('footer_image_repeater', 'option')): ?>
								<?php while (have_rows('footer_image_repeater', 'option')):
									the_row();
									$footer_img_gallery = get_sub_field('footer_img_gallery'); ?>
									<div class="col-12">
										<a href="<?= $footer_img_gallery['url']; ?>" data-fancybox="gallery">
											<img class="img-fluid bg-light p-1" src="<?= $footer_img_gallery['url']; ?>" alt="">
										</a>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-white mb-3">Newsletter</h4>
					<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
					<div class="position-relative mx-auto" style="max-width: 400px;">
						<input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
							placeholder="Your email">
						<button type="button"
							class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyright">
				<div class="row">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						&copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
					</div>
					<div class="col-md-6 text-center text-md-end">
						<div class="footer-menu">
							<a href="">Home</a>
							<a href="">Cookies</a>
							<a href="">Help</a>
							<a href="">FQAs</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>