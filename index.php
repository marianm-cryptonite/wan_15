<?php 

session_start();
if(!isset($_SESSION['LoginUser'])){
  header('Location: payroll.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sensitect - Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="shortcut icon" href="Box/l1.png">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="categories.html">Store</a></li>
			<li><a href="guides.html">Guides</a></li>
			<li><a href="company.html">Company</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+63 914234123</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="box/l1.png" alt="" width="200px"></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li><a href="categories.html">Store</a></li>
					<li><a href="guides.html">Guides</a></li>
					<li><a href="company.html">Company</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User 
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>-->
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+63 914234123</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">
					
					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/mainbg1.png)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<?php echo $_SESSION['LoginUser']; ?>
											<div class="home_title">Whole Set</div>
											<div class="home_subtitle">Flood Detector</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="arduinoproductspics/products/arduino-uno-rev3.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>Full</div>
																	<div>Set<span>1</span></div>
																</div>
															</div>
															<div class="product_image"><img src="arduinoproductspics/products/arduino-uno-rev3-1.jpg" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Flood Detector</a></div>
																			<div class="product_category"><a href="category.html">Main Product</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
																		<div class="product_price text-right">&#8369 450<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="images/home_3.jpeg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/mainbg2.png)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Steps &#38</div>
											<div class="home_subtitle">Guides</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="images/home_1.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>for</div>
																	<div>FREE<span></span></div>
																</div>
															</div>
															<div class="product_image"><img src="images/product_1.jpeg" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">User Manual</a></div>
																			<div class="product_category"><a href="category.html">Free Item</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
																		<div class="product_price text-right">&#8369 0<span>.00</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="images/home_3.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<!-- Slide 3
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/mainbg3.png)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Trendsetters</div>
											<div class="home_subtitle"></div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="images/home_1.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>$3<span>.99</span></div>
																</div>
															</div>
															<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="images/home_3.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					Slide 
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/home.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Premium Items</div>
											<div class="home_subtitle">Summer Wear</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="images/home_1.jpg" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>$3<span>.99</span></div>
																</div>
															</div>
															<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="images/home_3.jpg" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>-->

				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>


				<!-- Home Slider Dots -->
				
				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<!--<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>-->
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Frequently Bought Products</div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="category.html">Catergory 1</a></li>
								<li><a href="category.html">Category 2</a></li>
								<li><a href="category.html">Category 3</a></li>
								<li><a href="category.html">Category 4</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">
					
					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part1.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 60<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part2.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 60<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part3.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 60<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part4.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 60<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part5.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 60<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Product -->
					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image"><img src="images/part6.jpeg" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product.html">Part Name</a></div>
											<div class="product_category">In <a href="category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<!--<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
										<div class="product_price text-right">&#8369 63<span>.99</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Boxes 

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

							Box 
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_1.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="category.html">
												<div class="background_image" style="background-image:url(images/box_1_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Trendsetter Collection</div>
									</div>
								</div>
							</div>

							 Box 
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="category.html">
												<div class="background_image" style="background-image:url(images/box_2_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Popular Choice</div>
									</div>
								</div>
							</div>

							Box 
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_3.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="category.html">
												<div class="background_image" style="background-image:url(images/box_3_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Popular Choice</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
-->
		<!-- Features 

		<div class="features">
			<div class="container">
				<div class="row">
					
					Feature 
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Fast Secure Payments</div>
							</div>
						</div>
					</div>

					 Feature 
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Premium Products</div>
							</div>
						</div>
					</div>

					 Feature 
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Free Delivery</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
-->
		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="images/logo_1.png" alt=""></div>
											<div></div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Pwede natin lagay Mission &#38 Vision dito</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
									</li>
									<li>
										<a href="#"><div>Return Policy</div></a>
									</li>
									<li>
										<a href="#"><div>Guide<div class="footer_tag_2">recommended</div></div></a>
									</li>
									<li>
										<a href="#"><div>Terms and Conditions</div></a>
									</li>
									<li>
										<a href="#"><div>Contact</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Stay in Touch</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">Home</a></li>
										<li><a href="category.html">Store</a></li>
										<li><a href="category.html">Galler</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>