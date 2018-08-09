<?php
/**
 * Template Name: home page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package activello
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style-new.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Mr.Light. Check out our range of State-of-the-Art Home Appliances</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="standard-logo" data-dark-logo="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-dark.png">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Mr. Light Logo"></a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="retina-logo" data-dark-logo="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-dark@2x.png">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo@2x.png" alt="Mr. Light Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li class="current"><a href="index.html"><div>Home</div></a></li>
							<li><a href="#"><div>About</div></a></li>
							<li><a href="#"><div>Products</div></a></li>
							<li><a href="#"><div>Media</div></a></li>
							<li><a href="shop.html"><div>Career</div></a></li>
							<li><a href="#"><div>Distributor</div></a></li>
							<li><a href="#"><div>Mr Care</div></a></li>
							<li><a href="#"><div>Contact</div></a></li>
							<li><a href="#"><div>E Waste</div></a></li>
						</ul>

						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="#" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/slider/swiper/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to Mr. Light</h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">FOR ALL IT TAKES TO MAKE A GOOD HOME, A GREAT ONE!</p>
								</div>
							</div>
						</div>
						
						<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-xl-5" data-animate="fadeInLeft" data-delay="100">
							<div class="heading-block bottommargin-sm">
								<h1><span style="color:#de1a1a;">Mr. Light</span> Story</h1>
							</div>
							<p class="lead">Established in 2004 in the UAE, Mr. LIGHT is an international presence today in the Home Appliances market with operations spread across 26 countries. The rousing reception we received at the market encouraged us to innovate across a vast variety of Home Appliances products.
 &amp; much more.</p>
 <div class=""><a href="#" class="button ls0 button-rounded button-border nott t400 ">Read More</a></div>
						</div>

						<div class="col-xl-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-md="287" data-height-xs="183">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mr-light-product.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInRight" data-delay="100" alt="Chrome">
								<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">-->

							</div>

						</div>

					</div>
				</div>

				<div class="section nobottommargin">
					<div class="container clearfix">

						<div class="container clearfix">

					<div class="col_one_third" data-animate="fadeInUp" data-delay="50">
						<div class="feature-box ">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-washingmachine.png">
							</div>
							<h3>Home Appliances</h3>
							<p>Good Looks & Great Functionality. Check out our range of State-of-the-Art Home Appliances.</p>
						</div>
					</div>

					<div class="col_one_third" data-animate="fadeInUp" data-delay="100">
						<div class="feature-box ">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-mixi.png">
							</div>
							<h3>Kitchen Appliances</h3>
							<p>Hearths that answer to a Homemaker's Heart. Kitchen Appliances to make Life easy. </p>
						</div>
					</div>

					<div class="col_one_third col_last" data-animate="fadeInUp" data-delay="150">
						<div class="feature-box ">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-speaker.png">
							</div>
							<h3>Entertainment Products</h3>
							<p>Leisure & Pleasure at your Fingertips. Ease up with Cutting Edge Entertainment Technology.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third nobottommargin" data-animate="fadeInUp" data-delay="50">
						<div class="feature-box ">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-torch.png">
							</div>
							<h3>Lighting Devices</h3>
							<p>Picture Perfect Lighting Devices. Easy on the Eye in every sense of the word!</p>
						</div>
					</div>

					<div class="col_one_third nobottommargin" data-animate="fadeInUp" data-delay="100">
						<div class="feature-box">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-kettle.png">
							</div>
							<h3>Household Products</h3>
							<p>Designed to Serve. Our Super Handy range of  Household Products.</p>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last" data-animate="fadeInUp" data-delay="150">
						<div class="feature-box ">
							<div class="fbox-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-phone.png">
							</div>
							<h3>Best Customer Service</h3>
							<p>At every nook & corner; At your beck & call. Why? Because YOU are Royal!</p>
						</div>
					</div>

					<div class="clear"></div>

				</div>

					</div>
				</div>

				<div class="section nobg clearfix">
					<div class="container clearfix">

						<div class="heading-block divcenter nobottomborder center clearfix" style="max-width: 600px">
							<small class="text-black-50 uppercase ls3 t600">Latest Products</small>
							<h2 class="capitalize t600 mb-2" style="font-size: 36px; letter-spacing: -1px">Looking for More Products?</h2>
							<!--<p class="mb-3">Energistically syndicate team building synergy after efficient human capital. Assertively underwhelm sticky solutions.</p>-->
							<div class="center"><a href="#" class="button ls0 button-rounded button-border nott t400 ">View More</a></div>
						</div>

						<div class="row clearfix">

							<div class="col-lg-3 col-sm-6" data-animate="fadeInUp" data-delay="50">
								<a href="#" class="iportfolio border d-block bg1 clearfix">
									<div class="portfolio-image clearfix">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mr-1063.jpg" alt="Image">
									</div>
									<div class="portfolio-desc d-flex align-items-center justify-content-between  w-100" style="bottom: 0; padding: 0 20px 15px;">
										<h3 class="mb-0 text-dark">Blender</h3>
										
									</div>
								</a>
							</div>

							<div class="col-lg-3 col-sm-6 mt-4 mt-sm-0" data-animate="fadeInUp" data-delay="100">
								<a href="#" class="iportfolio border d-block clearfix">
									<div class="portfolio-image clearfix">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mr-1205.jpg" alt="Image">
									</div>
									<div class="portfolio-desc d-flex align-items-center justify-content-between  w-100" style="bottom: 0; padding: 0 20px 15px;">
										<h3 class="mb-0 text-dark">Rechargeble Fan</h3>
										
									</div>
								</a>
							</div>

							<div class="col-lg-3 col-sm-6 mt-4 mt-lg-0" data-animate="fadeInUp" data-delay="150">
								<a href="#" class="iportfolio border d-block bg1 clearfix">
									<div class="portfolio-image clearfix">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mr-2603.jpg" alt="Image">
									</div>
									<div class="portfolio-desc d-flex align-items-center justify-content-between  w-100" style="bottom: 0; padding: 0 20px 15px;">
										<h3 class="mb-0 text-dark">Kettle</h3>
										
									</div>
								</a>
							</div>

							<div class="col-lg-3 col-sm-6 mt-4 mt-lg-0" data-animate="fadeInUp" data-delay="200">
								<a href="#" class="iportfolio border d-block clearfix">
									<div class="portfolio-image clearfix">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mr-7825b.jpg" alt="Image">
									</div>
									<div class="portfolio-desc d-flex align-items-center justify-content-between  w-100" style="bottom: 0; padding: 0 20px 15px;">
										<h3 class="mb-0 text-dark">Home Theatre (5.1)</h3>
										
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>


				<div class="section bottommargin-lg">
					<div class="container clearfix">

						<div class="col_half nobottommargin center">

							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/guiness.png" alt="Image" data-animate="fadeInLeft" class="fadeInLeft animated">

						</div>

						<div class="col_half topmargin-sm nobottommargin col_last">

							<div class="row">
								<div class="col center">
									
									<div class="counter counter-large" style="color:#de1a1a;"><span data-from="100" data-to="300" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h4>Quality Products</h4>
								</div>
								<div class="col center">
									
									<div class="counter counter-large" style="color:#de1a1a;"><span data-from="10000" data-to="50000" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h4>Satisfied Customers</h4>
								</div>
							</div>
							<div class="row">
								<div class="col center">
									
									<div class="counter counter-large" style="color:#de1a1a;"><span data-from="15" data-to="26" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h4>Countries Reached</h4>
								</div>
								<div class="col center">
									
									<div class="counter counter-large" style="color:#de1a1a;"><span data-from="3" data-to="10" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h4>Successful Years</h4>
								</div>
							</div>

					

				</div>

					</div>
				</div>



				<div class="container clearfix">

					<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-1.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-2.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-3.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-4.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-5.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-6.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-7.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-8.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-9.jpg" alt="Outlets"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/outlet-10.jpg" alt="Outlets"></a></div>

					</div>


				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-widget-logo.png" alt="" class="footer-logo">

								

								<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										Tiger Building - 2, Office No:  101<br>Al Taawun Sharjah UAE<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> +971 6523 7952<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> +971 6523 7952<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@mrlightglobal.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Links</h4>

								<ul>
									<li><a href="#">About</a></li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Distributor</a></li>
									<li><a href="#">Mr Care</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Media</a></li>
									<li><a href="#">E Waste Management</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Mr Light Global.<br>
						<div class="copyright-links">Designed by: <a href="http://www.sparcsdigital.com">Sparcs Digital Agency</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@mrlightglobal.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +971 6523 7952
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script>

</body>
</html>