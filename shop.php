<?php include_once "methods.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our Shop</title>
	<?php include "header.php"; ?>
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Order Online</h1>
						<p class="breadcrumbs">
							<span class="mr-2"><a href="index.html">Home</a></span>
							<span>Shop</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="checkout">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 ftco-animate">
					<div class="container">
						<div class="row d-md-flex">
							<div class="col-lg-12 ftco-animate p-md-5">
								<div class="row">
									<div class="col-md-12 nav-link-wrap mb-5">
										<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee</a>

											<a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Coffee Machines</a>

											<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Coffee Capsuls</a>

											<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Accessories</a>
										</div>
									</div>
									<div class="col-md-12 d-flex align-items-center">
										<div class="tab-content ftco-animate" id="v-pills-tabContent">
											<!--Bill-0 Coffee-->
											<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
												<div class="row">
													<div class="col-md-3">
														<div class="menu-entry">
															<a href="product-single.html" class="img" style="
                                    background-image: url(product img from DB);
                                  "></a>
															<div class="text text-center pt-4">
																<h3>
																	<a href="product-single.html">product name from DB</a>
																</h3>
																<p>product short description from DB</p>
																<p class="price">
																	<span>product price from DB</span>
																</p>
																<p>
																	<a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--Bill-1 Machines-->
											<div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
												<div class="row">
													<div class="col-md-4 text-center">
														<div class="menu-wrap">
															<a href="product-single.html" class="menu-img img mb-4" style="
                                    background-image: url(product img from DB);
                                  "></a>
															<div class="text">
																<h3>
																	<a href="product-single.html">product name from DB</a>
																</h3>
																<p>product description from DB</p>
																<p class="price">
																	<span>product price from DB</span>
																</p>
																<p>
																	<a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--Bill-2 Capsuls-->
											<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
												<div class="row">
													<div class="col-md-4 text-center">
														<div class="menu-wrap">
															<a href="#" class="menu-img img mb-4" style="
                                    background-image: url(product img from DB);
                                  "></a>
															<div class="text">
																<h3>
																	<a href="product-single.html">product name from DB</a>
																</h3>
																<p>Product description from DB</p>
																<p class="price">
																	<span>product price from DB</span>
																</p>
																<p>
																	<a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--Bill- Accessories-->
											<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
												<div class="row">
													<div class="col-md-4 text-center">
														<div class="menu-wrap">
															<a href="product-single.html" class="menu-img img mb-4" style="
                                    background-image: url(product img from DB);
                                  "></a>
															<div class="text">
																<h3>
																	<a href="product-single.html">product name from DB</a>
																</h3>
																<p>product description from DB</p>
																<p class="price">
																	<span>product price from DB</span>
																</p>
																<p>
																	<a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-8 -->

				<div class="col-xl-4 sidebar ftco-animate">
					<div class="sidebar-box">
						<form action="#" class="search-form">
							<div class="form-group">
								<div class="icon">
									<span class="icon-search"></span>
								</div>
								<input type="text" class="form-control" placeholder="Search..." />
							</div>
						</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Categories</h3>
							<li>
								<a href="#">Coffee<span>(12)</span></a>
							</li>
							<li>
								<a href="#">Coffee Machines<span>(7)</span></a>
							</li>
							<li>
								<a href="#">Coffee Capsuls<span>(17)</span></a>
							</li>
							<li>
								<a href="#">Accessories<span>(12)</span></a>
							</li>
						</div>
					</div>

					<div class="sidebar-box ftco-animate">
						<h3>Tag Cloud</h3>
						<div class="tagcloud">
							<a href="#" class="tag-cloud-link">nespresso</a>
							<a href="#" class="tag-cloud-link">cup</a>
							<a href="#" class="tag-cloud-link">black</a>
							<a href="#" class="tag-cloud-link">tasty</a>
							<a href="#" class="tag-cloud-link">strong</a>
							<a href="#" class="tag-cloud-link">meduim</a>
							<a href="#" class="tag-cloud-link">smooth</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include "footer.php"; ?>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<!-- <script src="jazzbeans/register/javascript/logout.js"></script> -->
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