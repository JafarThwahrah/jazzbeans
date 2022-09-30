<?php include_once "methods.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Details</title>
	<?php include_once "header.php"; ?>
	<!-- END nav -->

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Product Detail</h1>
						<p class="breadcrumbs">
							<span class="mr-2"><a href="shop.html">Shop</a></span>
							<span>Product Detail</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="product img url" class="image-popup"><img src="product img url" class="img-fluid" alt="Colorlib Template" /></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>Product name</h3>
					<p class="price"><span>Price</span></p>
					<p>Description</p>
					<p>Description</p>
					<div class="row mt-4">
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
									<i class="icon-minus"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" />
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="icon-plus"></i>
								</button>
							</span>
						</div>
					</div>
					<p>
						<a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Related products</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(images/menu-1.jpg)"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">Coffee Capuccino</a></h3>
							<p>
								A small river named Duden flows by their place and supplies
							</p>
							<p class="price"><span>$5.90</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="product-single.html" class="img" style="background-image: url(product img url)"></a>
						<div class="text text-center pt-4">
							<h3><a href="product-single.html">product name</a></h3>
							<p>short description</p>
							<p class="price"><span>product price</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- loader --><?php include_once "footer.php"; ?>
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