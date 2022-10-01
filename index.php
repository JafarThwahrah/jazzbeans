<?php require_once "./php/conn.php";
include_once "./methods.php";
$product1 = getSingleProduct(1);
$product2 = getSingleProduct(2);
$product3 = getSingleProduct(3);
$product4 = getSingleProduct(4);

$product5 = getSingleProduct(5);
$product6 = getSingleProduct(6);
$product7 = getSingleProduct(7);
$product8 = getSingleProduct(8);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Jazz Beans</title>
	<?php include "header.php"; ?>
	<!-- END nav -->
	<?php
	getAllProduct();

	?>
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_1.jpg)">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">Your coffee heaven</h1>
						<p class="mb-4 mb-md-5">
							We work daily to provide you with the finest coffee, the modern
							machines, and the classiest accessories.
						</p>
						<p>
							<a href="./shop.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(images/bg_2.jpg)">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">Great Quality &amp; Usefull Tools</h1>
						<p class="mb-4 mb-md-5">
							Who said you can't make a great cup of coffee in your home? We
							can help you achieve that!
						</p>
						<p>
							<a href="./shop.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(images/bg_3.jpg)">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					<div class="col-md-8 col-sm-12 text-center ftco-animate">
						<span class="subheading">Welcome</span>
						<h1 class="mb-4">It’s not just coffee, it’s an experience.</h1>
						<p class="mb-4 mb-md-5">
							For true coffee enthusiasts, our shop is the ultimate way to
							experience the spirit of coffee.
						</p>
						<p>
							<a href="./shop.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro">
		<div class="container-wrap">
			<div class="wrap d-md-flex align-items-xl-end">
				<div class="info">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-phone"></span></div>
							<div class="text">
								<h3>00 (962) 776 789012</h3>
								<p>
									For more details or suggestions, call our customer support.
								</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-my_location"></span></div>
							<div class="text">
								<h3>Amman, Jordan</h3>
								<p>We can deliver for each house in Jordan.</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-clock-o"></span></div>
							<div class="text">
								<h3>Open daily</h3>
								<p>You can place your order anytime.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-about d-md-flex" id="about">
		<div class="one-half img" style="background-image: url(images/about.jpg)"></div>
		<div class="one-half ftco-animate">
			<div class="overlap">
				<div class="heading-section ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Story</h2>
				</div>
				<div>
					<p>
						In COVID-19 dark days, the importance of online stores has
						increased and the need to serve customers to ensure their safety
						and our workers' safety has emerged. Our team consists of coffee
						experts, baristas, and people with a passion for coffee. We import
						the finest coffee from all over the world, contract with the best
						coffee machines and equipment brands, and choose the most useful
						and practical accessories for you.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-choices"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Easy to Order</h3>
							<p>
								We have provided you with a smooth experience to buy what you
								need, just a few clicks then login and you'll be good to go.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-delivery-truck"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Fastest Delivery</h3>
							<p>
								We know it's hard to wait for your order so we can promise to
								deliver your order within 48 hours, all over Jordan.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-coffee-bean"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Quality Products</h3>
							<p>
								Our goal is to provide you with the finest quality coffee
								beans, coffee machines, and everything related to coffee.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon">
										<span class="flaticon-coffee-cup"></span>
									</div>
									<strong class="number" data-number="48">0</strong>
									<span>Our Products</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon">
										<span class="flaticon-coffee-cup"></span>
									</div>
									<strong class="number" data-number="5">0</strong>
									<span>Number of Awards</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon">
										<span class="flaticon-coffee-cup"></span>
									</div>
									<strong class="number" data-number="1012">0</strong>
									<span>Happy Customer</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<div class="icon">
										<span class="flaticon-coffee-cup"></span>
									</div>
									<strong class="number" data-number="8">0</strong>
									<span>Staff</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Newest Products</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<!--Add 4 cards only-->
				<?php

				$newPro = array_reverse(getAllProduct());
				for ($i = 0; $i < 4; $i++) { ?>






					<div class="col-md-3">
						<div class="menu-entry">
							<a href="./product-single.php?p_id=<?php echo ($newPro[$i]["id"]); ?>" class="img" style="background-image: url(<?php echo ($newPro[$i]["img"]); ?>)"></a>
							<div class="text text-center pt-4">
								<h3><a href="./product-single.php?p_id=<?php echo ($newPro[$i]["id"]); ?>"><?php echo ($newPro[$i]["name"]); ?></a></h3>
								<p><?php echo ($newPro[$i]["short_desc"]); ?></p>
								<p class="price"><span><?php echo ($newPro[$i]["price"]); ?></span></p>
								<p>
									<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg)">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg)">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg)">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg)">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-search"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Don't miss</span>
					<h2 class="mb-4">summer end sale!</h2>
					<p>
						Winter is Coming, we all need to stay cozy and drink our coffee.
					</p>
				</div>
			</div>
			<div class="row">
				<!--only 4 cards-->
				<?php
				$desArr = getProductsWithDiscount();
				shuffle($desArr);
				for ($i = 0; $i < count($desArr) && $i < 4; $i++) { ?>

					<div class="col-md-3">
						<div class="menu-entry">
							<a href="./product-single.php?p_id=<?php echo ($desArr[$i]["id"]); ?>" class="img" style="background-image: url(<?php echo ($desArr[$i]["img"]); ?>)"></a>
							<div class="text text-center pt-4">
								<h3><a href="./product-single.php?p_id=<?php echo ($desArr[$i]["id"]); ?>"><?php echo ($desArr[$i]["name"]); ?></a></h3>
								<p><?php echo ($desArr[$i]["short_desc"]); ?></p>
								<p class="price"> <span> <?php echo ($desArr[$i]["discount"]); ?></span>
									<span>
										<h6 class="Secondary text"> <s><?php echo ($desArr[$i]["price"]); ?></s></h6>
									</span>
								</p>
								<p>JOD</p>
								<p>
									<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Customers Says</h2>
					<p>
						The honest endorsement of our products and services from our loyal
						customers.
					</p>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>
								&ldquo;With this machine I can easily create an authentic
								top-quality coffee at home, thanks to Jazz Beans store's
								convenience and coffee expertise.&rdquo;
							</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="https://randomuser.me/api/portraits/men/32.jpg" alt="" />
							</div>
							<div class="name align-self-center">
								Ibrahim Ahmad
								<span class="position">Softwere Engineer</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>
								&ldquo;I would like to give a huge shoutout to Jeez Beans
								employees, I literally asked them about every little detail
								and they just answered with super kindness and explained all I
								needed to know, I received my order last week and I am
								obsessed. Thanks for the experience..&rdquo;
							</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="https://randomuser.me/api/portraits/women/40.jpg" alt="" />
							</div>
							<div class="name align-self-center">
								Raghed AlQadi
								<span class="position">Chef</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>
								&ldquo;I don’t usually treat myself to fancy coffee, but I’m
								homebound with a broken ankle currently, so I treated myself.
								I mainly purchased a veriaty of coffee. The flavors are
								incredibly smooth and strong. Would definitely purchase again.
								&rdquo;
							</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="https://randomuser.me/api/portraits/men/18.jpg" alt="" />
							</div>
							<div class="name align-self-center">
								Osama Al Batsh
								<span class="position">Parkour Coach</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>
								&ldquo;I orderd a coffee machine for my wife's birthday, and
								we both love it. It makes delicious coffee, thanks to the
								great variety of pods and the high quality of coffee
								available. I drink both espressos, with a thick crema and
								flavor similar to what one gets at the best European cafés,
								and americanos (for the morning jug of coffee).&rdquo;
							</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="https://randomuser.me/api/portraits/men/34.jpg" alt="" />
							</div>
							<div class="name align-self-center">
								Zayed AlNabulsi
								<span class="position">Orthopedic doctor</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>
								&ldquo;I love homemade espresso coffee drink. The package I
								orderd has the perfect grinding level. The espresso comes out
								nice and smooth. &rdquo;
							</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="https://randomuser.me/api/portraits/women/12.jpg" alt="" />
							</div>
							<div class="name align-self-center">
								Sahtha Albaw
								<span class="position">Electrical Engineer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- loader -->
	<?php include "footer.php"; ?>
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	</body>

</html>