<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package X_MARG_DESTINATION
 */

$header_image = get_field('header_image', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'x-marg-destination'); ?></a>

		<header id="masthead" class="site-header">
			<!-- Topbar Start -->
			<div class="container-fluid bg-dark px-5 d-none d-lg-block">
				<div class="row gx-0">
					<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
						<div class="d-inline-flex align-items-center" style="height: 45px;">
							<small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New
								York, USA</small>
							<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
							<small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
						</div>
					</div>
					<div class="col-lg-4 text-center text-lg-end">
						<div class="d-inline-flex align-items-center" style="height: 45px;">
							<?php if (get_field('social_icons','option')): ?>
								<?php while (the_repeater_field('social_icons','option')): ?>
									<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?= the_sub_field('icon_link'); ?>">
										<?= the_sub_field('icon_name'); ?>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Topbar End -->


			<!-- Navbar & Hero Start -->
			<div class="container-fluid position-relative p-0">
				<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand p-0">
						<h4 class="text-info m-0"><i class="fa fa-map-marker-alt me-3"></i><?php bloginfo('name'); ?>
						</h4>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="fa fa-bars"></span>
					</button>

					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php bloginfo('name'); ?></h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
								aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'header', // Ensure this matches the registered menu location
								'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
								'container' => false,
								'walker' => new Custom_Nav_Walker(), // Your custom walker
								'fallback_cb' => false // You can set a fallback callback if no menu is assigned
							));
							?>
							<div class="regiseter_btn d-flex align-items-center d-none">
								<a href="#" class="btn btn-info text-white rounded-pill py-2 px-4">Register</a>
							</div>
						</div>
					</div>
				</nav>
				<div class="container-fluid bg-primary py-5 mb-5 hero-header"
					style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url(<?php echo $header_image['url']; ?>);">
					<?php if (is_front_page()): ?>
						<div class="container py-5">
							<div class="row justify-content-center py-5">
								<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
									<h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us
									</h1>
									<p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita
										diam amet diam et eos erat ipsum lorem sit</p>
									<div class="position-relative w-75 mx-auto animated slideInDown d-none">
										<input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
											placeholder="Eg: Thailand">
										<button type="button"
											class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
											style="margin-top: 7px;">Search</button>
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="container py-5">
							<div class="row justify-content-center py-5">
								<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
									<h1 class="display-3 text-white animated slideInDown">
										<?php echo get_the_title(); ?>
									</h1>
									<?php custom_breadcrumbs(); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>

			</div>
			<!-- Navbar & Hero End -->
		</header><!-- #masthead -->