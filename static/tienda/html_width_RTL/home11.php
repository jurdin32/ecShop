
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Destino - Advanced & High Customizable eCommerce HTML5/CSS3 Theme</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.rtl.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/footer11.css" rel="stylesheet">
	<link href="css/header11.css" rel="stylesheet">
	<link id="color_scheme" href="css/home11.css" rel="stylesheet">

</head>

<body class="common-home res layout-home11">
	
	<div id="wrapper" class="wrapper-full banners-effect-7">

		<!-- Header Container  -->
		<header id="header" class=" variantleft type_11 ">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="header-top-left form-inline  col-sm-6 col-xs-6 compact-hidden">
							<div class="form-group currencies-block">
								<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-credit "></span> USD <span class="fa fa-caret-down"></span>
									</a>
									<ul class="dropdown-menu btn-xs">
										<li> <a href="#">(€)&nbsp;Euro</a></li>
										<li> <a href="#">(£)&nbsp;Pounds</a></li>
										<li> <a href="#">($)&nbsp;USD</a></li>
									</ul>
								</form>
							</div>
							<div class="form-group languages-block ">
								<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<img src="img/demo/flags/lb.png" alt="Arabic" title="Arabic">
										<span class="hidden-xs">Arabic</span>
										<span class="fa fa-caret-down"></span>
									</a>
									<ul class="dropdown-menu" >
										<li><a href="../home11.php"><img class="image_flag" src="img/demo/flags/gb.png" alt="English" title="English"> English </a></li>
										<li> <a href="#"> <img class="image_flag" src="img/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic </a> </li>
									</ul>
								</form>
							</div>
						</div>
						<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 hidden-xs">
							
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="my-accout "><a href="my-account.html" id="wishlist-total" class="top-link-wishlist" title="My Accout"><span>My Account</span></a></li>
									<li class="wishlist"><a href="wishlist.html" title="Wishlist"><span>Wishlist(0)</span></a></li>
									<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span>Checkout</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->

			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- Logo -->
						<div class="navbar-logo col-lg-5 col-md-4 col-sm-5 col-xs-12">
							<a href="index.php"><img src="img/demo/logo/logo.png" title="Your Store" alt="Your Store"></a>
						</div>
						<!-- //end Logo -->

						<!-- Search -->
						<div id="sosearchpro" class=" col-lg-4 col-md-4 col-sm-5 col-xs-12 search-pro">
							
							<form method="GET" action="index.html">
								<div id="search0" class="search input-group">
									<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
									<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search" aria-hidden="true"></i></button>
								</div>
								
							</form>

						</div>
						<!-- //end Search -->

						<!-- Secondary menu -->
						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 shopping_cart">
							<!--cart-->
							<div id="cart" class=" btn-group btn-shopping-cart">
								<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
									<div class="shopcart">
										<span class="handle pull-left"></span>
										<span class="number-shopping-cart">2</span>
									</div>
								</a>

								<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

									<li>
										<table class="table table-striped">
											<tbody>
												<tr>
													<td class="text-center" style="width:70px">
														<a href="product.html"> <img src="img/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
													</td>
													<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
													<td class="text-center"> x1 </td>
													<td class="text-center"> $1,202.00 </td>
													<td class="text-right">
														<a href="product.html" class="fa fa-edit"></a>
													</td>
													<td class="text-right">
														<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
													</td>
												</tr>
												<tr>
													<td class="text-center" style="width:70px">
														<a href="product.html"> <img src="img/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
													</td>
													<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
													<td class="text-center"> x1 </td>
													<td class="text-center"> $60.00 </td>
													<td class="text-right">
														<a href="product.html" class="fa fa-edit"></a>
													</td>
													<td class="text-right">
														<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li>
										<div>
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td class="text-left"><strong>Sub-Total</strong>
														</td>
														<td class="text-right">$1,060.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>Eco Tax (-2.00)</strong>
														</td>
														<td class="text-right">$2.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>VAT (20%)</strong>
														</td>
														<td class="text-right">$200.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>Total</strong>
														</td>
														<td class="text-right">$1,262.00</td>
													</tr>
												</tbody>
											</table>
											<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
										</div>
									</li>
								</ul>
							</div>
							<!--//cart-->
							<div class="sign-in pull-right">
								<span class="icon-sign-in"></span>
								<div class="link">
									<a href="login.html">Sign In</a>
									<span> / </span>
									<a href="register.html">Register</a>
									<br>
									<span class="welcome">Welcome Guest</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- //Header center -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">


						<!-- Main menu -->
						<div class="megamenu-hori header-bottom-left  col-md-12 col-sm-2 col-xs-12 ">
							<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">

										<div class="navbar-header">
											<button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<p class="close-menu"></p>
															<a  class="menu1">
																<strong>Home</strong>
																<b class="caret"></b>
															</a>

															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-3">
																			<a href="index.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-1.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home2.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-2.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home3.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-3.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home4.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-4.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="home5.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-5.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home6.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-6.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home7.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-7.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home8.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-8.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="home9.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-9.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 9</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home10.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-10.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 10</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home11.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-11.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 11</h3> 
																			</a> 
																		</div>
																		
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a  class="clearfix menu1">
																<strong>Features</strong>
																<b class="caret"></b>
																<img class="label-hot" src="img/theme/icon/hot-icon.png" alt="icon items">
															</a>
															<div class="sub-menu" style="width: 100%; right: 0px; display: none;">
																<div class="content" style="height: 288px; display: none;">
																	<div class="row">
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Listing pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="category.html">Category Page 1 </a></li>
																						<li><a href="category-v2.html">Category Page 2</a></li>
																						<li><a href="category-v3.html">Category Page 3</a></li>
																					</ul>

																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Product pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="product.html">Image size - big</a></li>
																						<li><a href="product-v2.html">Image size - medium</a></li>
																						<li><a href="product-v3.html">Image size - small</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Shopping pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="wishlist.html">Wishlist Page</a></li>

																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a  class="clearfix menu1">
																<strong>Pages</strong>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; right: auto; display: none;">
																<div class="content" style="height: 160px; display: none;">
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>

																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a  class="clearfix menu1">
																<strong>Categories</strong>
																<b class="caret"></b>
																<img class="label-hot" src="img/theme/icon/hot-icon.png" alt="icon items">

															</a>
															<div class="sub-menu" style="width: 100%; right: 0px; display: none;">
																<div class="content" style="height: 398px; display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="img/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="img/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="img/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="img/demo/cms/img4.jpg" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#" class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#" class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#" class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#" class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#" class="main-menu">Home Audio</a></li>
																							<li><a href="#" class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Earings</a></li>
																							<li><a href="#" class="main-menu">Wedding Rings</a></li>
																							<li><a href="#" class="main-menu">Men Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#" class="main-menu">Gift for Man</a></li>
																							<li><a href="#" class="main-menu">Gift for Woman</a></li>
																							<li><a href="#" class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>

														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a  class="clearfix menu1">
																<strong>Accessories</strong>
																<b class="caret"></b>


															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="row">
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																									<li><a href="3#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Apparel</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li><a href="#">Camping &amp; Hiking</a></li>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#">Battereries &amp; Chargers</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<span class="title-submenu">Bestseller</span>
																			<div class="row">
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Filet Mign</a></h4>
																							<div class="rating-box">
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">$1,202.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Dail Lulpa</a></h4>
																							<div class="rating-box">
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">$78.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Canon EOS 5D</a></h4>

																							<div class="rating-box">
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">
																								<span class="price-new">$60.00</span>
																								<span class="price-old">$145.00</span>

																							</p>
																						</div>
																					</div>
																				</div>
																			</div>
																			

																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="blog-page.html" class="clearfix menu1">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>

														
													</ul>

												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
						<!-- //end Main menu -->
					</div>
				</div>

			</div>
		</header>
		<!-- //Header Container  -->
		<div class="content-main home-9">
			<div class="conten-top">
				<section class="so-spotlight1 ">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel" data-dots="yes" data-margin="0" data-items_md='1' data-items_sm="1" data-items_xs="1">
									<div class="img-slider">
										<a href="#"><img src="img/demo/slider/home-11/slider-1.jpg" alt=""></a>
									</div>
									<div class="img-slider">
										<a href="#"><img src="img/demo/slider/home-11/slider-2.jpg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="so-spotlight2">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12 category">
								<div class="banners ">
									<div><img src="img/demo/banner/home-11/banner1-1.jpg" alt=""></div>
								</div>
								<h3><a href="#">smartphone & accessories</a></h3>
								<ul>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Cases & Covers</a></li>
									<li><a href="#">Power Banks</a></li>
									<li><a href="#">Memory Cards</a></li>
								</ul>
								<button class="btn">more categories</button>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 category">
								<div class="banners ">
									<div><img src="img/demo/banner/home-11/banner1-2.jpg" alt=""></div>
								</div>
								<h3><a href="#">Computer</a></h3>
								<ul>
									<li><a href="#">Macbooks & iMacs</a></li>
									<li><a href="#">Computers & Desktops</a></li>
									<li><a href="#">Printers, Scanners, & Fax</a></li>
									<li><a href="#">Laptop & Desktop</a></li>
								</ul>
								<button class="btn">more categories</button>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 category">
								<div class="banners ">
									<div><img src="img/demo/banner/home-11/banner1-3.jpg" alt=""></div>
								</div>
								<h3><a href="#">Electronics</a></h3>
								<ul>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Tablet Accessories</a></li>
									<li><a href="#">Cases & Covers</a></li>
									<li><a href="#">Power Banks</a></li>
								</ul>
								<button class="btn">more categories</button>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 category">
								<div class="banners ">
									<div><img src="img/demo/banner/home-11/banner1-4.jpg" alt=""></div>
								</div>
								<h3><a href="#">tablet & accessories</a></h3>
								<ul>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Tablet Accessories</a></li>
									<li><a href="#">Cases & Covers</a></li>
									<li><a href="#">Power Banks</a></li>
								</ul>
								<button class="btn">more categories</button>
							</div>
						</div>	
					</div>
				</section>
			</div>
			
			<section class="so-spotlight3">
				<div class="container">
					<div class="row">
						<div class="banners">
							<div class="col-sm-6">
								<a href="#"><img src="img/demo/banner/home-11/banner2-1.jpg" alt=""></a>
							</div>
							<div class="col-sm-6">
								<a href="#"><img src="img/demo/banner/home-11/banner2-2.jpg" alt=""></a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<section class="so-spotlight4">
				<div class="container">
					<div class="row">
						<div class="col-md-9  col-sm-12 col-xs-12">
							<div class="product-latest">
								<div class="titleh3">
									<h3 class="h3module">Latest Product</h3>
								</div>
								<div class="box-product">
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$91.00</span>   

													</div>
													<span class="new">new</span>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-1.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$53.00</span>   

													</div>
													<span class="new">new</span>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-2.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$45.00</span>   

													</div>
													
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-3.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$72.00</span>   

													</div>

												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-4.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$84.00</span>   

													</div>
													
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-5.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$74.00</span>   

													</div>
													<span class="new">new</span>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-6.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$114.00</span>   

													</div>

												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-7.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="product ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">New Style Blender</a></h4>	


													<div class="price">
														<span class="price-new">$83.00</span>   

													</div>
													
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-8.jpg" alt=""></a>
													<!--Sale Label-->


													<div class="hover-1">
														<ul>
															<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
															</li>
															<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
															<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
															<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="best-sellers">
								<div class="titleh3">
									<h3 class="h3module">Best Sellers</h3>
								</div>
								<div class="box-product-seller">
									<div class="product-seller ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">Philips Stand Mixers</a></h4>
													<div class="price">
														<span class="price-new">$96.00</span>   
														<span class="price-old">$107.00</span>   
													</div>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-9.jpg" alt=""></a>
												</div>
											</div>

										</div>
									</div>
									<div class="product-seller ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">Philips Stand Mixers</a></h4>
													<div class="price">
														<span class="price-new">$64.00</span>  <span class="price-old">$97.00</span> 
													</div>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-10.jpg" alt=""></a>
												</div>
											</div>

										</div>
									</div>
									<div class="product-seller ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">Philips Stand Mixers</a></h4>
													<div class="price">
														<span class="price-new">$81.00</span>   
														<span class="price-old">$119.00</span> 
													</div>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-11.jpg" alt=""></a>
												</div>
											</div>

										</div>
									</div>
									<div class="product-seller ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">Philips Stand Mixers</a></h4>
													<div class="price">
														<span class="price-new">$70.00</span>   
														<span class="price-old">$92.00</span> 
													</div>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-12.jpg" alt=""></a>
												</div>
											</div>

										</div>
									</div>
									<div class="product-seller ">
										<div class="product-item-container">
											<div class="top-block ">
												<div class="caption">
													<div class="ratings">
														<div class="rating-box">
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class=""><i class="fa fa-star "></i></span>
															<span class="gray"><i class="fa fa-star "></i></span>
														</div>
													</div>
													<h4><a href="product.html">Philips Stand Mixers</a></h4>
													<div class="price">
														<span class="price-new">$80.00</span>   
														<span class="price-old">$117.00</span> 
													</div>
												</div>
												
											</div>
											<div class=" bot-block ">
												<div class="product-image-container  second_img ">
													<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-13.jpg" alt=""></a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-xs-12 banners">
							<div>
								<a href="#"><img src="img/demo/banner/home-11/banner3.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight6">
				<div class="container">
					<div class="row">
						<div class="banners">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<a href="#"><img src="img/demo/collections/home-11/c1.jpg" alt=""></a>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 watch">
								<a href="#"><img src="img/demo/collections/home-11/c2.jpg" alt=""></a>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 last">
								<a href="#"><img src="img/demo/collections/home-11/c3.jpg" alt=""></a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<section class="so-spotlight7">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="suggest">
								<div class="title-suggest">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#product1">Recommended</a></li>
										<li><a data-toggle="tab" href="#product2">Trending</a></li>
										<li><a data-toggle="tab" href="#product3">Top Rate</a></li>
									</ul>
								</div>
								<div class="product-suggest">
									<div class="tab-content">
										<div id="product1"  class="tab-pane fade in active">
											<div class="box-product">
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$64.00</span>   
																	<span class="price-old">$83.00</span>  
																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-14.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$89.00</span>  
																	<span class="price-old">$107.00</span>   

																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-15.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$34.00</span>   
																	<span class="price-old">$52.00</span>  
																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-16.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$70.00</span>   
																	<span class="price-old">$80.00</span> 

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-17.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$86.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-18.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$53.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-19.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div id="product2"  class="tab-pane fade">
											<div class="box-product">
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$45.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-20.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$84.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-21.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$79.00</span>   

																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-22.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$60.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-23.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$75.00</span>   

																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-24.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$83.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-1.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div id="product3"  class="tab-pane fade">
											<div class="box-product">
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$103.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-3.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$97.00</span>   

																</div>
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-5.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$75.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-7.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$68.00</span>   

																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-9.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$96.00</span>   

																</div>
																
															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-11.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>

													</div>
												</div>
												<div class="product ">
													<div class="product-item-container">
														<div class="top-block ">
															<div class="caption">
																<div class="ratings">
																	<div class="rating-box">
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class=""><i class="fa fa-star "></i></span>
																		<span class="gray"><i class="fa fa-star "></i></span>
																	</div>
																</div>
																<h4><a href="product.html">New Style Blender</a></h4>	


																<div class="price">
																	<span class="price-new">$69.00</span>   

																</div>

															</div>

														</div>
														<div class=" bot-block ">
															<div class="product-image-container  second_img ">
																<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-13.jpg" alt=""></a>
																<!--Sale Label-->


																<div class="hover-1">
																	<ul>
																		<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																		</li>
																		<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																		<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																		<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																	</ul>
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
				</div>
			</section>
			<section class="so-spotlight8">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="brand">
								<div class="owl-carousel owl-brand" data-margin="15" data-nav="yes" data-dots="no" data-loop="yes" data-items_xs="1" data-items_sm="4" data-items_md="5">
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-2.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-3.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-4.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-5.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-3.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-2.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Footer Container -->
		<footer class="footer-container  type_footer11">

			<!-- /Footer Top Container -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="policy-detail">
								<div class="banner-policy">
									<div class="policy policy1">
										<a > 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Money Back Guarantee</span> 
												<br> 
												<span>30 Days Money Back</span> 
											</div>
										</a>
									</div>
									<div class="policy policy2">
										<a > 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Member Discount</span> 
												<br> 
												<span>Upto 70 % Discount</span> 
											</div>
										</a>
									</div>
									<div class="policy policy3">
										<a > 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Free Worldwide Shipping</span> 
												<br> 
												<span>On Order Over $100</span> 
											</div>
										</a>
									</div>
									<div class="policy policy4">
										<a > 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">24/7 Online Support</span> 
												<br> 
												<span>Technical Support 24/7</span> 
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-mid">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="contact-info">
								<div class="info">
									<h3>Contact Info</h3>
									<p>No 1123, Marmora Road, Glasgow, D04 89GR. (801) 2345 - 6788 / (801) 2345 - 6789</p>
									<p>support@etrostore.com</p>
								</div>
								<div class="social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<div class="support">
								<h3>Support</h3>
								<ul>
									<li><a href="#">Product Support</a></li>
									<li><a href="#">PC Setup & Support </a></li>
									<li><a href="#">Extended Service Plans</a></li>
									<li><a href="#">Community</a></li>
									<li><a href="#">Product Manual</a></li>
									<li><a href="#">Product Registration</a></li>
								</ul>
							</div>
							
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<div class="your-links">
								<h3>Your Links</h3>
								<ul>
									<li><a href="#">My Account</a></li>
									<li><a href="#">Order Tracking</a></li>
									<li><a href="#">Watch List</a></li>
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Returns / Exchanges</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>
							</div>
							
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="newsletter">
								<h3>Newsletter</h3>
								<p>Get all the best deals, sales and offers from the best online shopping store in UAE. Sign up now !</p>
								<div class="box-input">
									<input type="text" class="form-control" placeholder="Your email...">
									<button type="button" class="btn ">Subscribe</button>
								</div>
								<div class="download">
									<a href="#"><img src="img/demo/download/home-11/app.jpg" alt=""></a>
									<a href="#"><img src="img/demo/download/home-11/ggplay.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bot">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="payment">
								<img src="img/demo/payment/home-9/payment.png" alt="">
								<p>Destino - Premium Multipurpose HTML5/CSS3 Theme - Designed by SmartAddons.Com</p>
							</div>
							
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>
		</footer>
	</div>



	
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog"></i>
	</div>		

	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<form action="" method="post" class="myform" >

				<div class="panel-group">
					<label>Color Scheme</label>

					<div class="group-schemes">
						<input name="cplthemesColors" class="minicolors minicolors-input form-control" type="text" value="#f4A137" size="7">

					</div>
				</div>


				<div class="panel-group ">
					<label>Layout Box</label>
					<div class="group-boxed">
						<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
							<option value="full">Wide</option>
							<option value="boxed">Boxed</option>
							<option value="iframed">Iframed</option>
							<option value="rounded">Rounded</option>
						</select>
					</div>
				</div>

				<div class="panel-group">
					<label>Body Image</label>

					<div class="group-pattern">
						<div data-pattern="28"  class="img-pattern"><img src="img/theme/patterns/28.png" alt="pattern 28"></div>
						<div data-pattern="29"  class="img-pattern"><img src="img/theme/patterns/29.png" alt="pattern 29"></div>
						<div data-pattern="30"  class="img-pattern"><img src="img/theme/patterns/30.png" alt="pattern 30"></div>
						<div data-pattern="31"  class="img-pattern"><img src="img/theme/patterns/31.png" alt="pattern 31"></div>
						<div data-pattern="32"  class="img-pattern"><img src="img/theme/patterns/32.png" alt="pattern 32"></div>
						<div data-pattern="33"  class="img-pattern"><img src="img/theme/patterns/33.png" alt="pattern 33"></div>
						<div data-pattern="34"  class="img-pattern"><img src="img/theme/patterns/34.png" alt="pattern 34"></div>
						<div data-pattern="35"  class="img-pattern"><img src="img/theme/patterns/35.png" alt="pattern 35"></div>
						<div data-pattern="36"  class="img-pattern"><img src="img/theme/patterns/36.png" alt="pattern 36"></div>
						<div data-pattern="37"  class="img-pattern"><img src="img/theme/patterns/37.png" alt="pattern 37"></div>
						<div data-pattern="38"  class="img-pattern"><img src="img/theme/patterns/38.png" alt="pattern 38"></div>
						<div data-pattern="39"  class="img-pattern"><img src="img/theme/patterns/39.png" alt="pattern 39"></div>
						<div data-pattern="40"  class="img-pattern"><img src="img/theme/patterns/40.png" alt="pattern 40"></div>
						<div data-pattern="41"  class="img-pattern"><img src="img/theme/patterns/41.png" alt="pattern 41"></div>
						<div data-pattern="42"  class="img-pattern"><img src="img/theme/patterns/42.png" alt="pattern 42"></div>
						<div data-pattern="43"  class="img-pattern"><img src="img/theme/patterns/43.png" alt="pattern 43"></div>
						<div data-pattern="44"  class="img-pattern"><img src="img/theme/patterns/44.png" alt="pattern 44"></div>
						<div data-pattern="45"  class="img-pattern"><img src="img/theme/patterns/45.png" alt="pattern 45"></div>
					</div>
					<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
					<button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-text"></i> Get Skin CSS</button>

				</div>

				<div class="reset-group">
					<input type="submit" name="submit-reset" class="btn btn-success " value="Reset" onClick="ResetAll();">
					<input type="submit" name="submitbtn" class="btn" value="Apply">
				</div>
			</form>
		</div>

	</div>

<!-- Begin Color Scheme
	============================================ -->
		<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
		<link rel='stylesheet' property='stylesheet'  href='css/' type='text/css' media='all' />
	
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4> </div>
				<div class="modal-body"> 
					<textarea id="getCSSTextarea" class="get-css" readonly="">/********************************************
						*	 Color Scheme: home11.css
						********************************************/
						/*******************************************
*	Theme Name: Market
*	Author: Magentech
*	Author URI: http://www.magentech.com
*	Version: 1.0.0
*	Description: This is html5 Sass template 
*******************************************/
/*===============================================
	[SASS DIRECTORY ]
	
    [1] Minxin Link
    [2] Minxin Buton
    [3] Minxin Triangle
   
    ==============================================*/
.no-margin {
  margin: 0 !important; }

.marginbottom__3x {
  margin-bottom: 30px; }

@-webkit-keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }
@keyframes animLoadedLogo {
  to {
    -webkit-transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1);
    transform: translate3d(0, 100%, 0) translate3d(0, 50px, 0) scale3d(0.65, 0.65, 1); } }
@-webkit-keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }
@keyframes animLoadedLoader {
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1);
    transform: translate3d(0, -100%, 0) scale3d(0.3, 0.3, 1); } }
@-webkit-keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0); } }
@keyframes animLoadedHeader {
  to {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }
@-webkit-keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0); } }
@keyframes animInitialHeader {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 800px, 0);
    transform: translate3d(0, 800px, 0); } }
/*******************************************************************
******                SO Framework: Sass System                ******
********************************************************************/
/* 1.BACK TOP TOP DEMO OPENCART
----------------------------------------------------- */
.back-to-top {
  cursor: pointer;
  background-color: #777;
  color: #fff;
  width: 45px;
  bottom: 50px;
  left: 50px;
  padding: 5px 0;
  overflow: hidden;
  z-index: 40;
  position: fixed;
  display: inline;
  text-align: center;
  border-radius: 3px;
  opacity: 1;
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1); }
  .back-to-top.hidden-top {
    bottom: -100px;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0); }
  .back-to-top:hover {
    background-color: #ffaa00; }
  .back-to-top i {
    font-size: 32px;
    display: block;
    line-height: 18px; }
  .back-to-top span {
    display: block;
    line-height: 18px; }
  @media (max-width: 991px) {
    .back-to-top {
      right: 10px;
      bottom: 10px; } }

/* 2.SOCIAL ACCOUNTS (RIGHT FIXED PANEL)
----------------------------------------------------- */
.social-widgets {
  position: fixed;
  z-index: 560;
  top: 50%;
  height: 0;
  width: 0;
  left: 0; }

.social-widgets .item, .social-widgets .items {
  margin: 0;
  padding: 0;
  list-style-type: none; }

.social-widgets .items {
  top: -100px;
  position: relative; }

.social-widgets .item {
  position: absolute;
  top: 0;
  right: 120px; }

.social-widgets .active {
  z-index: 100;
  right: -310px; }

.social-widgets .item-01, .social-widgets .item-02, .social-widgets .item-03, .social-widgets .item-04, .social-widgets .item-05, .social-widgets .item-06, .social-widgets .item-07, .social-widgets .item-08, .social-widgets .item-09 {
  right: 0; }

.social-widgets .item-01 {
  top: 0;
  z-index: 99; }

.social-widgets .item-02 {
  top: 45px;
  z-index: 98; }

.social-widgets .item-03 {
  top: 90px;
  z-index: 97; }

.social-widgets .item-04 {
  top: 150px;
  z-index: 96; }

.social-widgets .item-05 {
  top: 200px;
  z-index: 95; }

.social-widgets .tab-icon .fa {
  font-size: 18px; }

.social-widgets .tab-icon {
  position: absolute;
  top: 0;
  right: -45px;
  display: block;
  width: 45px;
  height: 45px;
  background: #fff;
  text-align: center;
  font-size: 1.54em;
  line-height: 45px; }

.social-widgets .tab-icon:hover {
  text-decoration: none; }

.social-widgets .active .tab-icon {
  border-color: #E9E9E9;
  background: #fff; }

.social-widgets .facebook .tab-icon {
  background: #3b5998;
  background-clip: content-box;
  color: white; }

.social-widgets .twitter .tab-icon {
  background: #07779a;
  background-clip: content-box;
  color: white; }

.social-widgets .youtube .tab-icon {
  background: #DA2723;
  background-clip: content-box;
  color: white; }

.social-widgets .tab-content {
  background: #fff;
  width: 310px;
  padding: 10px; }

.social-widgets .active .tab-content {
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.15); }

.social-widgets .title {
  margin: -10px -10px 10px;
  padding: 0px 10px;
  background-color: #ccc;
  text-transform: uppercase;
  line-height: 45px;
  color: #000;
  font-weight: bold; }
  .social-widgets .title h5 {
    line-height: 45px;
    margin: 0; }

.social-widgets .facebook.active {
  right: -260px; }

.social-widgets .facebook .tab-content {
  width: 260px; }

.social-widgets .twitter.active {
  right: -300px; }

.social-widgets .twitter .tab-content {
  width: 300px; }

.social-widgets .twitter-widget {
  padding-top: 10px; }

.social-widgets .youtube.active {
  right: -450px; }

.social-widgets .youtube .tab-content {
  width: 450px; }

.social-widgets .loading {
  min-height: 200px;
  position: relative;
  z-index: 1000; }

.social-widgets .loading img.ajaxloader {
  position: absolute;
  top: 45%;
  right: 45%;
  width: 32px;
  height: 32px; }

/* 3.TOP PANEL (RIGHT FIXED PANEL)
----------------------------------------------------- */
/* 4.LARY LOADER
--------------------------------------- */
.mfp-iframe-scaler iframe {
  background: white url(../img/theme/lazy-loader.gif) no-repeat center center; }

.lazy {
  display: block;
  position: relative;
  overflow: hidden;
  background: transparent url(../img/theme/lazy-loader.gif) no-repeat center center; }

.loadeding {
  background: white url(../img/theme/lazy-loader.gif) no-repeat center center;
  height: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1; }

.loaded .loadeding {
  background: none;
  height: auto;
  opacity: 0;
  display: none; }

@media (min-width: 1200px) {
  .lazy.lazy-loaded {
    background: none;
    height: auto; }

  .lazy img {
    transition: 1s all ease;
    opacity: 0;
    -webkit-backface-visibility: hidden; }

  .lazy.lazy-loaded img {
    opacity: 1; } }
/* Overlay pattern 
--------------------------------------- */
body.no-bgbody {
  background-image: none; }

.pattern-1 {
  background-image: url("../img/theme/patterns/1.png"); }

.pattern-2 {
  background-image: url("../img/theme/patterns/2.png"); }

.pattern-3 {
  background-image: url("../img/theme/patterns/3.png"); }

.pattern-4 {
  background-image: url("../img/theme/patterns/4.png"); }

.pattern-5 {
  background-image: url("../img/theme/patterns/5.png"); }

.pattern-6 {
  background-image: url("../img/theme/patterns/6.png"); }

.pattern-7 {
  background-image: url("../img/theme/patterns/7.png"); }

.pattern-8 {
  background-image: url("../img/theme/patterns/8.png"); }

.pattern-9 {
  background-image: url("../img/theme/patterns/9.png"); }

.pattern-10 {
  background-image: url("../img/theme/patterns/10.png"); }

.pattern-11 {
  background-image: url("../img/theme/patterns/11.png"); }

.pattern-12 {
  background-image: url("../img/theme/patterns/12.png"); }

.pattern-13 {
  background-image: url("../img/theme/patterns/13.png"); }

.pattern-14 {
  background-image: url("../img/theme/patterns/14.png"); }

.pattern-15 {
  background-image: url("../img/theme/patterns/15.png"); }

.pattern-16 {
  background-image: url("../img/theme/patterns/16.png"); }

.pattern-17 {
  background-image: url("../img/theme/patterns/17.png"); }

.pattern-18 {
  background-image: url("../img/theme/patterns/18.png"); }

.pattern-19 {
  background-image: url("../img/theme/patterns/19.png"); }

.pattern-20 {
  background-image: url("../img/theme/patterns/20.png"); }

.pattern-21 {
  background-image: url("../img/theme/patterns/21.png"); }

.pattern-22 {
  background-image: url("../img/theme/patterns/22.png"); }

.pattern-23 {
  background-image: url("../img/theme/patterns/23.png"); }

.pattern-24 {
  background-image: url("../img/theme/patterns/24.png"); }

.pattern-25 {
  background-image: url("../img/theme/patterns/25.png"); }

.pattern-26 {
  background-image: url("../img/theme/patterns/26.png"); }

.pattern-27 {
  background-image: url("../img/theme/patterns/27.png"); }

.pattern-28 {
  background-image: url("../img/theme/patterns/28.png"); }

.pattern-29 {
  background-image: url("../img/theme/patterns/29.png"); }

.pattern-30 {
  background-image: url("../img/theme/patterns/30.png"); }

.pattern-31 {
  background-image: url("../img/theme/patterns/31.png"); }

.pattern-32 {
  background-image: url("../img/theme/patterns/32.png"); }

.pattern-33 {
  background-image: url("../img/theme/patterns/33.png"); }

.pattern-34 {
  background-image: url("../img/theme/patterns/34.png"); }

.pattern-35 {
  background-image: url("../img/theme/patterns/35.png"); }

.pattern-36 {
  background-image: url("../img/theme/patterns/36.png"); }

.pattern-37 {
  background-image: url("../img/theme/patterns/37.png"); }

.pattern-38 {
  background-image: url("../img/theme/patterns/38.png"); }

.pattern-39 {
  background-image: url("../img/theme/patterns/39.png"); }

.pattern-40 {
  background-image: url("../img/theme/patterns/40.png"); }

.pattern-41 {
  background-image: url("../img/theme/patterns/41.png"); }

.pattern-42 {
  background-image: url("../img/theme/patterns/42.png"); }

.pattern-43 {
  background-image: url("../img/theme/patterns/43.png"); }

.pattern-44 {
  background-image: url("../img/theme/patterns/44.png"); }

.pattern-45 {
  background-image: url("../img/theme/patterns/45.png"); }

/* Preloading Screen
--------------------------------------- */
@keyframes spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }
.loaded #loader-wrapper .loader-section.section-left {
  transform: translateX(-100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1); }

.loaded #loader-wrapper .loader-section.section-right {
  transform: translateX(100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1); }

.loaded #loader {
  opacity: 0;
  transition: all 0.3s ease-out; }

.loaded #loader-wrapper {
  visibility: hidden;
  transform: translateY(-100%);
  transition: all 0.3s 1s ease-out; }

/* @group Banners hover effect */
.banners-effect-1 .banners > div img {
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in; }
  .banners-effect-1 .banners > div img:hover {
    opacity: 0.8; }

.banners-effect-2 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-2 .banners > div a:hover:before, .banners-effect-2 .banners > div a:hover:after {
    left: 0;
    opacity: 1; }
  .banners-effect-2 .banners > div a:before, .banners-effect-2 .banners > div a:after {
    background-color: rgba(255, 255, 255, 0.4);
    display: block;
    width: 100%;
    height: 100%;
    left: -100%;
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    top: 0;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    content: "";
    z-index: 1; }

.banners-effect-3 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-3 .banners > div a:hover:before, .banners-effect-3 .banners > div a:hover:after {
    border: 0 solid rgba(0, 0, 0, 0.7);
    opacity: 0;
    filter: alpha(opacity=0); }
  .banners-effect-3 .banners > div a:before, .banners-effect-3 .banners > div a:after {
    border: 50px solid transparent;
    border-top-right-radius: 50px;
    border-top-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    position: absolute;
    top: 0;
    content: "";
    opacity: 1;
    filter: alpha(opacity=100);
    width: 100px;
    height: 100px;
    -webkit-transform: scale(7);
    -moz-transform: scale(7);
    -ms-transform: scale(7);
    -o-transform: scale(7);
    transform: scale(7);
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    visibility: visible;
    z-index: 1; }

.banners-effect-4 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-4 .banners > div a:hover:before, .banners-effect-4 .banners > div a:hover:after {
    opacity: 1;
    -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1);
    transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 4, 1); }
  .banners-effect-4 .banners > div a:before, .banners-effect-4 .banners > div a:after {
    border-bottom: 50px solid rgba(0, 0, 0, 0.2);
    border-top: 50px solid rgba(0, 0, 0, 0.2);
    content: "";
    height: 100%;
    left: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    top: 0;
    transform-origin: 50% 50% 0;
    width: 100%;
    -webkit-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -moz-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -ms-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -o-transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    transform: rotate3d(0, 0, 1, 45deg) scale3d(1, 0, 1);
    -webkit-transition: opacity 0.4s ease 0s, -webkit-transform 0.35s ease 0s;
    -moz-transition: opacity 0.4s ease 0s, -moz-transform 0.35s ease 0s;
    transition: opacity 0.4s ease 0s, transform 0.35s ease 0s;
    visibility: visible;
    z-index: 1; }

.banners-effect-5 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-5 .banners > div a:hover:before, .banners-effect-5 .banners > div a:hover:after {
    opacity: 0;
    filter: alpha(opacity=0);
    border: 0 double rgba(255, 255, 255, 0.7);
    visibility: hidden; }
  .banners-effect-5 .banners > div a:before, .banners-effect-5 .banners > div a:after {
    bottom: 0;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
    border: 200px double transparent;
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
    -webkit-transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s;
    -moz-transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s;
    transition: all 0.4s cubic-bezier(0.94, 0.85, 0.1, 0.62) 0s; }

.banners-effect-6 .banners > div a {
  display: inline-block;
  vertical-align: top;
  position: relative;
  overflow: hidden;
  background: #000; }

.banners-effect-6 .banners > div a img {
  backface-visibility: hidden;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition: opacity 1s ease 0s, transform 1s ease 0s;
  -o-transition: opacity 1s ease 0s, transform 1s ease 0s;
  transition: opacity 1s ease 0s, transform 1s ease 0s; }

.banners-effect-6 .banners > div a:hover img {
  opacity: 0.8;
  filter: alpha(opacity=80);
  transform: scale3d(1.1, 1.1, 1); }

.banners-effect-7 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }

.banners-effect-7 .banners > div a:before {
  position: absolute;
  background: rgba(0, 0, 0, 0.3);
  width: 0;
  top: 0;
  left: 50%;
  content: "";
  transition: all 0.3s ease-in-out 0s; }

.banners-effect-7 .banners > div a:hover:before {
  width: 100%;
  left: 0;
  top: 0;
  height: 100%; }

.banners-effect-8 .banners > div a {
  display: inline-block;
  position: relative;
  overflow: hidden;
  background: #000;
  vertical-align: top; }

.banners-effect-8 .banners > div a:before,
.banners-effect-8 .banners > div a:after {
  bottom: 20px;
  content: "";
  left: 20px;
  opacity: 0;
  position: absolute;
  right: 20px;
  top: 20px;
  -webkit-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  -o-transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
  z-index: 1; }

.banners-effect-8 .banners > div a:before {
  border-bottom: 1px solid #ffffff;
  border-top: 1px solid #ffffff;
  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  -o-transform: scale(0, 1);
  transform: scale(0, 1); }

.banners-effect-8 .banners > div a:after {
  border-left: 1px solid #ffffff;
  border-right: 1px solid #ffffff;
  -webkit-transform: scale(1, 0);
  -ms-transform: scale(1, 0);
  -o-transform: scale(1, 0);
  transform: scale(1, 0); }

.banners-effect-8 .banners > div img {
  opacity: 1;
  width: 100%;
  filter: alpha(opacity=100);
  -webkit-transition: opacity 0.35s ease 0s;
  -o-transition: opacity 0.35s ease 0s;
  transition: opacity 0.35s ease 0s; }

.banners-effect-8 .banners > div a:hover:before,
.banners-effect-8 .banners > div a:hover:after {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1); }

.banners-effect-8 .banners > div a:hover img {
  opacity: 0.5;
  filter: alpha(opacity=50); }

.banners-effect-9 .banners > div a {
  display: block;
  position: relative;
  z-index: 10; }

.banners-effect-9 .banners > div a:before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 100%;
  height: 100%;
  background: #000;
  content: '';
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
  box-shadow: 0 3px 30px rgba(0, 0, 0, 0.2);
  opacity: 0; }

.banners-effect-9 .banners > div a:hover:before {
  opacity: 1; }

.banners-effect-9 .banners > div a img {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: perspective(1000px) translate3d(0, 0, 0);
  transform: perspective(1000px) translate3d(0, 0, 0); }

.banners-effect-9 .banners > div a:hover img {
  -webkit-transform: perspective(1000px) translate3d(0, 0, 21px);
  transform: perspective(1000px) translate3d(0, 0, 21px); }

.banners-effect-10 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }

.banners-effect-10 .banners > div a:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, transparent 0%, rgba(0, 0, 0, 0.2) 75%);
  background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.2) 75%);
  content: '';
  opacity: 0;
  -webkit-transform: translate3d(0, 50%, 0);
  transform: translate3d(0, 50%, 0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s; }

.banners-effect-10 .banners > div a:hover:before {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0); }

.banners-effect-11 .banners > div a {
  display: block;
  position: relative;
  overflow: hidden; }
  .banners-effect-11 .banners > div a:hover:before, .banners-effect-11 .banners > div a:hover:after {
    width: 100%;
    height: 100%; }
  .banners-effect-11 .banners > div a:before, .banners-effect-11 .banners > div a:after {
    background-color: rgba(0, 0, 0, 0.15);
    content: "";
    height: 0;
    left: 0;
    margin: auto;
    position: absolute;
    width: 0;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
  .banners-effect-11 .banners > div a:after {
    left: auto;
    right: 0;
    bottom: 0; }

.banners-effect-12 .banners > div img {
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in; }
  .banners-effect-12 .banners > div img:hover {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%); }

/* @end */
.icons-social a {
  display: inline-block;
  margin-right: 5px;
  color: #f82e56; }
.icons-social .fa {
  font-size: 20px;
  line-height: 40px;
  vertical-align: top; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-facebook {
  background: #3b5998;
  border-color: #3b5998;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-facebook {
  background: #4c70ba; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-twitter {
  background: #00aced;
  border-color: #00aced;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-twitter {
  background: #21c2ff; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-google-plus {
  background: #dd4b39;
  border-color: #dd4b39;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-google-plus {
  background: #e47365; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-linkedin {
  background: #007bb5;
  border-color: #007bb5;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-linkedin {
  background: #009ee8; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-instagram {
  background: #125688;
  border-color: #125688;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-instagram {
  background: #1872b5; }
.icons-social .icon-circled {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  line-height: 40px;
  border: 1px solid #ffaa00;
  color: #ffaa00;
  vertical-align: top;
  text-align: center; }
.icons-social .icon-color.fa-youtube {
  background: #b00;
  border-color: #b00;
  color: #fff; }
.icons-social a:hover .icon-circled {
  background: #ffaa00;
  color: #fff; }
.icons-social a:hover .icon-color.fa-youtube {
  background: #ee0000; }

.divider {
  clear: both;
  height: 40px; }

.alert {
  border-radius: 0; }
  .alert .fa {
    font-size: 20px;
    vertical-align: middle;
    margin-left: 10px; }

.tab-content {
  padding: 15px 15px 10px;
  margin-bottom: 20px;
  z-index: 2;
  border: 1px solid #ddd;
  border-top: 0px; }

.simple-ul {
  margin: 0 0 15px 0;
  padding: 0;
  list-style: none; }
  .simple-ul li {
    position: relative;
    padding-right: 15px;
    margin-bottom: 5px; }
    .simple-ul li:before {
      position: absolute;
      top: 0;
      right: 0;
      display: block;
      font-family: "FontAwesome";
      font-size: 14px;
      content: "\f103"; }
    .simple-ul li ul {
      margin: 10px 0 10px 0;
      padding: 0;
      list-style: none; }
      .simple-ul li ul li:before {
        content: "\f111";
        font-size: 7px; }

.decimal-list {
  margin: 0px 0 15px 20px;
  padding: 0;
  list-style: decimal outside; }
  .decimal-list li {
    padding-left: 0;
    margin-bottom: 5px;
    text-indent: 0; }

blockquote {
  font-size: 12px; }

.well {
  border-radius: 0; }

.feature-box {
  border-radius: 0;
  margin-bottom: 20px; }
  .feature-box .feature-icon {
    color: #3e7cb4;
    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: right; }
  .feature-box .feature-content {
    padding-right: 50px; }

.featured-icon {
  border-radius: 50%;
  color: #fff;
  background-color: #3e7cb4;
  display: inline-block;
  font-size: 40px;
  height: 110px;
  line-height: 110px;
  margin: 5px;
  position: relative;
  text-align: center;
  width: 110px;
  z-index: 1; }

.simple-list {
  margin: 0;
  padding: 0;
  list-style-type: none; }

.bold-list > li > a {
  font-weight: 700;
  text-transform: uppercase; }

.simple-list ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  position: relative; }

.simple-list li {
  margin: 0;
  padding: 0 0 8px; }

.simple-list .checkbox {
  padding-left: 0; }

.simple-list .checkbox input[type=checkbox] {
  margin-right: 10px; }

.simple-list .icon {
  margin-left: 9px; }

.arrow-list li {
  padding-right: 12px;
  position: relative; }
  .arrow-list li a {
    color: #444; }
    .arrow-list li a:hover {
      color: #ffaa00; }

.arrow-list li:before {
  margin-left: 10px;
  font-size: 14px;
  display: inline-block;
  font-family: "FontAwesome";
  content: "\f104"; }

.page-login .well {
  background: #fff;
  min-height: 285px;
  border: 1px solid #e7e7e7;
  margin: 0;
  line-height: 23px;
  border-radius: 0; }
  .page-login .well h2 {
    padding-bottom: 10px;
    font-size: 14px;
    text-transform: uppercase;
    position: relative; }
.page-login .bottom-form {
  background: #f5f5f5;
  border: 1px solid #e7e7e7;
  border-top: 0;
  padding: 10px 20px;
  overflow: hidden;
  line-height: 35px; }
  .page-login .bottom-form .btn {
    padding: 7px 12px;
    background: #555555;
    color: #fff;
    border-radius: 0;
    border-color: #555555; }
    .page-login .bottom-form .btn:hover {
      background: #ffaa00;
      border-color: #ffaa00;
      color: #fff; }
  .page-login .bottom-form a {
    color: #444; }
    .page-login .bottom-form a:hover {
      color: #ffaa00; }

div.required .control-label:before {
  content: '* ';
  color: #F00;
  font-weight: bold; }

/*******************************************************************
******                SO Framework: Sass Menu                 ******
********************************************************************/
div.horizontal ul.megamenu > li {
  float: right; }
div.horizontal ul.megamenu .sub-menu .title-submenu,
div.horizontal ul.megamenu li .sub-menu .content .static-menu a.main-menu {
  text-transform: uppercase;
  color: #222222;
  border-bottom: 1px solid #ddd;
  font-size: 13px;
  font-weight: bold;
  padding-bottom: 5px;
  margin-bottom: 5px; }
div.horizontal ul.megamenu .sub-menu .image-link {
  margin-bottom: 10px;
  color: #333333; }
  div.horizontal ul.megamenu .sub-menu .image-link:hover {
    color: #ffaa00; }
div.horizontal .image-link .thumbnail {
  position: relative;
  overflow: hidden;
  border-radius: 0;
  background: #fff;
  padding: 3px;
  margin: 0 0 10px; }
div.horizontal .image-link .btn {
  position: absolute;
  top: -100px;
  left: calc(50% - 50px);
  padding: 7px 12px;
  background: #555555;
  color: #fff;
  border-radius: 0;
  border-color: #555555;
  background: #ffaa00;
  border-color: #ffaa00;
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
  border-radius: 2px; }
  div.horizontal .image-link .btn:hover {
    background: #ffaa00;
    border-color: #ffaa00;
    color: #fff; }
  div.horizontal .image-link .btn:hover {
    background: #555555;
    border-color: #555555; }
div.horizontal .image-link:hover .thumbnail {
  border: 1px solid #bcbcbc;
  background: #ddd; }
  div.horizontal .image-link:hover .thumbnail img {
    opacity: 0.8; }
div.horizontal .image-link .figcaption {
  font-size: 12px;
  text-align: center;
  text-transform: uppercase;
  margin-top: 0; }
div.horizontal ul.megamenu .label-hot {
  position: absolute;
  z-index: 2;
  top: -10px;
  left: 0px; }
div.horizontal ul.megamenu .sub-menu a {
  color: #444;
  line-height: 24px;
  display: block;
  padding: 3px 0;
  font-size: 13px; }
  div.horizontal ul.megamenu .sub-menu a:hover {
    color: #ffaa00; }
@media (min-width: 1200px) {
  div.horizontal ul.megamenu .megamenu--container {
    min-width: 1170px; } }

header .so-megamenu .navbar-header {
  color: white; }

@media (min-width: 992px) {
  div.so-vertical-menu {
    position: relative; }
    div.so-vertical-menu .vertical-wrapper {
      border-top: 3px solid #ffaa00; }
    div.so-vertical-menu ul.megamenu > li {
      border: none; }
      div.so-vertical-menu ul.megamenu > li a {
        color: #444;
        line-height: 24px;
        font-size: 14px; }
        div.so-vertical-menu ul.megamenu > li a:hover {
          color: #ffaa00; }
        div.so-vertical-menu ul.megamenu > li a img {
          margin: 0 0 0 5px; }
      div.so-vertical-menu ul.megamenu > li > a:hover, div.so-vertical-menu ul.megamenu > li.loadmore:hover {
        background: #ffaa00;
        color: white; }
        div.so-vertical-menu ul.megamenu > li > a:hover .caret, div.so-vertical-menu ul.megamenu > li.loadmore:hover .caret {
          background-position: center 0; }
      div.so-vertical-menu ul.megamenu > li .caret {
        background: url("../img/theme/icons/ico-menu-parent.png") no-repeat;
        width: 15px;
        height: 15px;
        background-position: center -25px;
        border: none;
        margin: 5px  0;
        position: absolute;
        left: 10px;
        transform: rotate(180deg); }
      div.so-vertical-menu ul.megamenu > li.loadmore {
        border-top: 1px solid #ddd; }
      div.so-vertical-menu ul.megamenu > li .sub-menu {
        right: 100% !important;
        left: auto; }
    div.so-vertical-menu ul.megamenu > li.active > a {
      background: #ffaa00;
      color: white; } }
.list-product {
  padding: 0;
  height: 100%; }
  .list-product .image {
    margin-left: 15px; }
  .list-product .caption h4 {
    margin: 0;
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 14px;
    /* [8] */
    font-size: 1.4rem;
    /* [8] */ }

.megamenuToogle-wrapper .container > div {
  float: right;
  margin: 0px 0px 0px 10px; }

/* 	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+

	[1]		Header Wrapper
	[2]		Content Wrapper
	[3]		Footer Wrapper
	
*/
#wrapper {
  overflow-x: hidden; }

/* ************************************************************************************************
STRUCTURE
************************************************************************************************ */
@media (max-width: 1024px) {
  .no-res {
    width: 1190px; } }
.wrapper-boxed, .wrapper-iframed, .wrapper-rounded {
  max-width: 1200px;
  margin: 0 auto;
  background: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); }
  .wrapper-boxed header.navbar-compact, .wrapper-iframed header.navbar-compact, .wrapper-rounded header.navbar-compact {
    width: auto; }

.wrapper-iframed {
  margin: 20px auto; }

.wrapper-rounded {
  margin: 20px auto;
  border-radius: 10px;
  overflow: hidden; }

@media (min-width: 1360px) {
  .container-full {
    clear: both;
    margin-left: -10%;
    margin-left: -10%; } }
@media (min-width: 1600px) {
  .container-full {
    clear: both;
    margin-left: -40%;
    margin-left: -40%; } }
/**************************************************************
	  Header Wrapper
**************************************************************/
/**************************************************************
	  Content Wrapper
**************************************************************/
#content {
  margin-bottom: 23px; }
  #content:before, #content:after {
    content: " ";
    display: table; }
  #content:after {
    clear: both; }

/* 	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+

	[1]		BLOCK MODULE STYLE
	[2]		BLOCK LIST ITEM
	[3]		BLOCK MENU CATEGORY
	[4]		BLOCK FILTER SHOP BY
	[5]		BLOCK TAGS
	[6]		BLOCK LANGUAGE
	[7]		BLOCK CURRENCY
	[8]		BLOCK BREADCRUMB
	[9]		BLOCK LATEST PRODUCT
	[10]    BLOCK PRODUCT LAYOUT
	*/
h3.modtitle {
  /* [4] */
  /* [6] */
  /* [6] */
  /* [7] */
  font-size: 22px;
  /* [8] */
  font-size: 2.2rem;
  /* [8] */
  line-height: 30px;
  margin: 0 0 5px;
  position: relative;
  font-weight: 400;
  color: #222222; }

h3.modtitle3 {
  font-size: 44px;
  font-weight: 400;
  color: #333333;
  margin: 0 0 5px; }

h3.modtitle4 {
  font-size: 40px;
  font-weight: 700;
  color: #333333;
  text-transform: uppercase; }

h3.modtitle7 {
  color: #fff;
  text-align: center;
  font-weight: 400;
  font-size: 40px;
  text-transform: uppercase; }

.box-full {
  max-width: 1720px;
  margin: 0 auto;
  float: none; }

@media (max-width: 1199px) {
  h3.modtitle {
    /* [4] */
    /* [6] */
    /* [6] */
    /* [7] */
    font-size: 20px;
    /* [8] */
    font-size: 2rem;
    /* [8] */ } }
img {
  max-width: 100%; }

.list-item {
  list-style: none;
  padding: 0; }
  .list-item li {
    margin-bottom: 3px; }
    .list-item li:before {
      font-family: "FontAwesome";
      margin-left: 10px;
      display: inline-block;
      content: "\f104"; }
    .list-item li a {
      color: #444; }
      .list-item li a:hover {
        color: #ffaa00; }

.menu-category .modcontent {
  border: 1px solid #e6e6e6;
  margin-top: 20px;
  padding: 0 20px; }
.menu-category .list-group > li {
  border-bottom: 1px dotted #E4E4E4;
  margin: 0;
  position: relative; }
  .menu-category .list-group > li span.button-view {
    display: block;
    position: absolute;
    left: 0;
    top: 5px;
    cursor: pointer;
    z-index: 10;
    text-align: center;
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 14px; }
  .menu-category .list-group > li a {
    color: #333333;
    padding: 10px 0;
    display: block; }
    .menu-category .list-group > li a:hover {
      color: #ffaa00; }
  .menu-category .list-group > li a:hover + .button-view {
    color: #ffaa00; }
  .menu-category .list-group > li .active, .menu-category .list-group > li .active + .button-view {
    color: #ffaa00; }
  .menu-category .list-group > li .active + .button-view:before {
    content: '\f147'; }
  .menu-category .list-group > li li {
    padding: 0 10px;
    position: relative;
    list-style: none; }
    .menu-category .list-group > li li a {
      padding: 5px 0; }
      .menu-category .list-group > li li a:before {
        content: '';
        padding: 0 5px;
        font-family: "FontAwesome";
        content: "\f104";
        margin-right: -10px;
        transition: all 400ms ease;
        opacity: 0; }
      .menu-category .list-group > li li a:hover:before {
        opacity: 1;
        margin: 0; }

.filter-shopby, .filter-row {
  border: 1px solid #e6e6e6;
  padding: 20px; }
  .filter-shopby .table_layout, .filter-row .table_layout {
    display: block; }
  .filter-shopby .table_cell, .filter-row .table_cell {
    margin-bottom: 10px;
    padding-bottom: 20px;
    border-bottom: #f1f1f1 1px solid;
    display: block; }
  .filter-shopby legend, .filter-row legend {
    border: none;
    font-size: 13px;
    margin: 0;
    text-transform: uppercase; }
  .filter-shopby .checkboxes_list > li:not(:last-child), .filter-row .checkboxes_list > li:not(:last-child), .filter-shopby .simple_vertical_list li:not(:last-child), .filter-row .simple_vertical_list li:not(:last-child) {
    margin-bottom: 5px; }
  .filter-shopby .color_btn, .filter-row .color_btn {
    position: relative;
    padding-right: 32px; }
  .filter-shopby .color_btn::before, .filter-row .color_btn::before {
    content: "" !important;
    padding: 1px;
    background-clip: content-box !important;
    border: 1px solid #eaeaea;
    border-radius: 50% !important;
    -webkit-transition: border-color .3s ease;
    transition: border-color .3s ease; }
  .filter-shopby .color_btn.green::before, .filter-row .color_btn.green::before {
    background: #269300; }
  .filter-shopby .color_btn.yellow::before, .filter-row .color_btn.yellow::before {
    background: #fccd36; }
  .filter-shopby .color_btn.red::before, .filter-row .color_btn.red::before {
    background: #ff0000; }
  .filter-shopby .color_btn.blue::before, .filter-row .color_btn.blue::before {
    background: #018bc8; }
  .filter-shopby .color_btn.grey::before, .filter-row .color_btn.grey::before {
    background: #b2b2b2; }
  .filter-shopby .color_btn.orange::before, .filter-row .color_btn.orange::before {
    background: #ff7b1a; }
  .filter-shopby input[type="checkbox"]:checked + .color_btn::before, .filter-row input[type="checkbox"]:checked + .color_btn::before {
    border-color: #333; }

.filter-row {
  padding: 0; }
  .filter-row .table_layout {
    display: table;
    width: 100%;
    table-layout: fixed; }
  .filter-row .table_row {
    display: table;
    width: 100%; }
  .filter-row .table_cell {
    display: table-cell;
    border-right: 1px solid #e6e6e6;
    padding: 19px; }
  .filter-row .bottom_box {
    padding: 15px 19px; }

.ui-slider {
  height: 7px;
  background: #f8f8f8;
  border: 1px solid #eaeaea;
  max-width: 220px; }

.ui-slider .ui-slider-handle {
  display: block;
  width: 19px;
  height: 19px;
  background: #fff;
  border: 1px solid #eaeaea;
  cursor: pointer;
  top: -7px; }

.ui-slider .ui-slider-handle::before {
  content: "";
  display: block;
  width: 9px;
  height: 9px;
  background: #b2b2b2;
  position: absolute;
  top: 4px;
  right: 4px; }

.ui-slider .ui-slider-handle,
.ui-slider .ui-slider-handle::before {
  border-radius: 50%; }

.range {
  margin-bottom: 15px; }

.range > * {
  display: inline; }

.checkboxes_list {
  color: #333; }

.simple_vertical_list input[type="radio"], .simple_vertical_list input[type="checkbox"],
.checkboxes_list input[type="radio"],
.checkboxes_list input[type="checkbox"] {
  display: none; }
.simple_vertical_list input[type="radio"] + label,
.simple_vertical_list input[type="checkbox"] + label,
.checkboxes_list input[type="radio"] + label,
.checkboxes_list input[type="checkbox"] + label {
  position: relative;
  width: auto !important;
  margin: 0 17px 0 0 !important;
  padding-right: 32px;
  cursor: pointer;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  user-select: none; }
.simple_vertical_list input[type="radio"] + label::before,
.simple_vertical_list input[type="checkbox"] + label::before,
.checkboxes_list input[type="radio"] + label::before,
.checkboxes_list input[type="checkbox"] + label::before {
  content: "";
  display: block;
  text-align: center;
  font-family: 'FontAwesome';
  position: absolute;
  right: 0;
  top: -1px;
  width: 22px;
  height: 22px;
  color: inherit;
  background: #fff;
  border: 1px solid #eaeaea;
  border-radius: 3px; }
.simple_vertical_list input[type="checkbox"] + label::before,
.checkboxes_list input[type="checkbox"] + label::before {
  font-size: 12px; }
.simple_vertical_list input[type="radio"] + label::before,
.checkboxes_list input[type="radio"] + label::before {
  border-radius: 50%; }
.simple_vertical_list input[type="radio"] + label:empty,
.checkboxes_list input[type="radio"] + label:empty {
  width: 22px !important;
  padding-right: 0px;
  margin: 0px !important; }
.simple_vertical_list input[type="checkbox"]:checked + label::before,
.checkboxes_list input[type="checkbox"]:checked + label::before {
  content: '\f00c'; }
.simple_vertical_list input[type="radio"]:checked + label::before,
.checkboxes_list input[type="radio"]:checked + label::before {
  content: "\f10c"; }

.tags_cloud li {
  display: inline-block;
  margin: 0 4px 4px 0; }

.button_grey {
  padding: 6px 15px;
  display: inline-block;
  color: #555555;
  background: #f1f1f1;
  text-transform: capitalize;
  border-radius: 3px;
  border: none; }
  .button_grey:hover {
    color: white;
    background: #ffaa00; }

.button_submit {
  background: #ffaa00;
  color: white;
  margin-right: 5px; }

.header-top ul.dropdown-menu {
  min-width: 105px;
  margin: 0;
  border-radius: 0; }
  .header-top ul.dropdown-menu li > a {
    color: #666; }

.languages-block, .currencies-block {
  z-index: 10;
  position: relative;
  vertical-align: top;
  margin: 0;
  display: inline-block; }
  .languages-block form > a, .currencies-block form > a {
    color: #666;
    display: block; }
  .languages-block form .dropdown-menu, .currencies-block form .dropdown-menu {
    margin: 0; }
  .languages-block form span.fa-angle-down, .currencies-block form span.fa-angle-down {
    margin-right: 3px; }

.currencies-block {
  margin-right: -5px; }

@media (max-width: 767px) {
  .collapsed-block .tabBlockTitle {
    margin: 6px 0px;
    line-height: 20px; }
    .collapsed-block .tabBlockTitle .expander {
      margin: 0 10px;
      color: #333333;
      font-size: 14px; } }
.breadcrumb {
  padding: 0;
  background: none; }
  .breadcrumb .home i {
    padding: 0 10px; }
  .breadcrumb li {
    display: inline-block;
    list-style: none;
    font-size: 14px; }
    .breadcrumb li a {
      color: #777777; }
      .breadcrumb li a:hover {
        color: #ffaa00; }

/*==========================BLOCK CART ======================*/
.shopping_cart {
  padding: 0; }
  .shopping_cart .btn-group {
    display: block;
    z-index: 5; }
  .shopping_cart a.top_cart {
    display: block;
    position: relative;
    box-shadow: none !important;
    text-decoration: none !important; }
    .shopping_cart a.top_cart .shopcart .title {
      color: #444;
      font-weight: bold; }
    .shopping_cart a.top_cart .shopcart .text-shopping-cart {
      color: #999;
      margin-bottom: 0;
      white-space: nowrap; }
  .shopping_cart .shoppingcart-box {
    padding: 15px;
    border-radius: 0;
    border-top: 3px solid #ffaa00;
    min-width: 300px; }
    .shopping_cart .shoppingcart-box .added_items {
      margin-bottom: 10px; }
    .shopping_cart .shoppingcart-box .table-striped > tbody > tr:nth-of-type(odd) {
      background: #fff; }
    .shopping_cart .shoppingcart-box .table-striped a {
      color: #666; }
      .shopping_cart .shoppingcart-box .table-striped a.fa-edit {
        display: none; }
      .shopping_cart .shoppingcart-box .table-striped a:hover {
        color: #ffaa00; }
    .shopping_cart .shoppingcart-box .table-striped a.fa-delete {
      width: 20px;
      height: 20px;
      background: #d6d6d6;
      border-radius: 3px;
      text-align: center;
      line-height: 19px;
      color: #000; }
      .shopping_cart .shoppingcart-box .table-striped a.fa-delete:hover {
        background: #ffaa00;
        color: #fff;
        text-decoration: none; }
    .shopping_cart .shoppingcart-box a.btn {
      color: #fff;
      background: #444;
      border-color: #444; }
      .shopping_cart .shoppingcart-box a.btn i {
        margin-left: 5px; }
      .shopping_cart .shoppingcart-box a.btn:hover {
        border: 1px solid #ffaa00;
        background: #ffaa00; }
  .shopping_cart .table-bordered {
    border-right: 0;
    border-right: 0; }
  .shopping_cart .table > tbody > tr {
    margin: 10px 0; }
    .shopping_cart .table > tbody > tr:first-child > td {
      border-top: 0; }
  .shopping_cart .table > tbody > tr > td, .shopping_cart .table > tbody > tr > th, .shopping_cart .table > tfoot > tr > td, .shopping_cart .table > tfoot > tr > th, .shopping_cart .table > thead > tr > td, .shopping_cart .table > thead > tr > th {
    vertical-align: middle; }
  .shopping_cart .table-bordered > tbody > tr > td, .shopping_cart .table-bordered > tbody > tr > th, .shopping_cart .table-bordered > tfoot > tr > td,
  .shopping_cart .table-bordered > tfoot > tr > th, .shopping_cart .table-bordered > thead > tr > td, .shopping_cart .table-bordered > thead > tr > th {
    border: 0; }

.latest-product .product-latest-item {
  margin-bottom: 20px; }
.latest-product .product-latest-item:last-child {
  margin: 0; }
.latest-product .media .media-left {
  float: right;
  border: 1px solid #ddd;
  padding: 0;
  margin-left: 10px; }
.latest-product .media .media-body h4 {
  margin-top: 10px; }
  .latest-product .media .media-body h4 a {
    font-size: 14px;
    color: #222222;
    font-weight: 400; }
    .latest-product .media .media-body h4 a:hover {
      color: #ffaa00; }
.latest-product .media .media-body .price {
  margin-top: 7px; }
.latest-product .media:hover .media-left {
  border-color: #ffaa00; }

.main-newsleter-popup .so-custom-popup {
  background-color: #fff;
  border-radius: 5px; }
  @media (min-width: 768px) and (max-width: 991px) {
    .main-newsleter-popup .so-custom-popup {
      width: 85% !important; }
      .main-newsleter-popup .so-custom-popup:before {
        content: "";
        position: absolute;
        z-index: 2;
        background: rgba(255, 255, 255, 0.9);
        width: 100%;
        height: 100%;
        top: 0;
        right: 0; } }
  @media (max-width: 767px) {
    .main-newsleter-popup .so-custom-popup:before {
      content: "";
      position: absolute;
      z-index: 2;
      background: rgba(255, 255, 255, 0.9);
      width: 100%;
      height: 100%;
      top: 0;
      right: 0; } }
.main-newsleter-popup .modcontent {
  position: relative;
  z-index: 9; }
.main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
  padding: 15px 10px;
  text-align: center; }
  @media (min-width: 1200px) {
    .main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
      padding: 60px 30px;
      padding-left: 55%;
      margin: 0 20px; } }
  @media (min-width: 992px) and (max-width: 1199px) {
    .main-newsleter-popup .so-custom-popup .oca_popup .popup-content {
      padding: 60px 30px;
      padding-left: 55%;
      margin: 0 20px; } }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .popup-title {
    font-weight: bold;
    font-size: 22px;
    color: #333333;
    text-transform: uppercase; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .newsletter_promo {
    font-size: 18px;
    color: #ffaa00;
    font-weight: bold; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .email {
    margin: 30px 0; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .form-control {
    background: white;
    border: 1px solid #ddd;
    border-radius: 3px;
    height: 41px;
    max-width: 280px;
    display: inline-block;
    width: 100%; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .hidden-popup {
    font-weight: normal; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .btn-default {
    padding: 7px 12px;
    background: #555555;
    color: #fff;
    border-radius: 0;
    border-color: #555555;
    background: #ffaa00;
    border-color: #ffaa00;
    margin-bottom: 20px;
    min-width: 160px;
    text-transform: uppercase;
    padding: 8px 10px;
    border-radius: 3px; }
    .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .btn-default:hover {
      background: #ffaa00;
      border-color: #ffaa00;
      color: #fff; }
    .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .btn-default:hover {
      background: #555555;
      border-color: #555555; }
  .main-newsleter-popup .so-custom-popup .oca_popup .popup-content .newsletter_promo {
    padding: 10px 0; }

.yt-content-slider--arrow1 .owl2-controls .owl2-nav div {
  position: absolute;
  top: 44.5%;
  outline: 0;
  width: 30px;
  height: 50px;
  font-size: 0;
  z-index: 9;
  transition: all 0.3s ease; }
  .yt-content-slider--arrow1 .owl2-controls .owl2-nav div.owl2-prev {
    right: 0px;
    background: url("../img/theme//icons/arrow-slider-left.png") no-repeat; }
    .yt-content-slider--arrow1 .owl2-controls .owl2-nav div.owl2-prev:hover {
      background-position: 0 -59px; }
  .yt-content-slider--arrow1 .owl2-controls .owl2-nav div.owl2-next {
    right: 0px;
    background: url("../img/theme//icons/arrow-slider-right.png") no-repeat; }
    .yt-content-slider--arrow1 .owl2-controls .owl2-nav div.owl2-next:hover {
      background-position: 0 -59px; }

.yt-content-slider--arrow2 {
  padding: 0px 70px 15px 70px;
  direction: ltr; }
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-prev,
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-next {
    width: 20px;
    height: 27px;
    border: 1px solid #ddd;
    background-image: url("../img/theme/icons/ico-slider.png");
    background-repeat: no-repeat;
    background-color: #fff;
    display: inline-block;
    text-indent: -999em;
    position: absolute;
    transition: all 0.2s ease-in-out 0s;
    top: calc(50% - 13px); }
    .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-prev:hover,
    .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: #ffaa00;
      background-position: 0px 0;
      border-color: #ffaa00; }
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-prev {
    background-position: -31px 0; }
    .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-prev:hover {
      background-position: 0px 0; }
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-next {
    background-position: -60px 0; }
    .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-next:hover {
      background-position: -90px 0; }
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-prev {
    left: 0px; }
  .yt-content-slider--arrow2 .owl2-controls .owl2-nav .owl2-next {
    right: 0px; }

.slider-brand--home6 {
  padding: 0;
  direction: ltr; }
  .slider-brand--home6 .owl2-controls {
    opacity: 0; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev,
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next {
      width: 20px;
      height: 27px;
      border: 1px solid #ddd;
      background-image: url("../img/theme/icons/ico-slider.png");
      background-repeat: no-repeat;
      background-color: #fff;
      display: inline-block;
      text-indent: -999em;
      position: absolute;
      transition: all 0.2s ease-in-out 0s;
      top: calc(50% - 13px); }
      .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev:hover,
      .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next:hover {
        background-color: #ffaa00;
        background-position: 0px 0;
        border-color: #ffaa00; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev {
      background-position: -31px 0; }
      .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev:hover {
        background-position: 0px 0; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next {
      background-position: -60px 0; }
      .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next:hover {
        background-position: -90px 0; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev {
      left: 0px; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next {
      right: 0px; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-prev {
      right: -30px; }
    .slider-brand--home6 .owl2-controls .owl2-nav .owl2-next {
      left: -30px; }
  .slider-brand--home6:hover .owl2-controls {
    opacity: 1; }
  .slider-brand--home6 a {
    border: 1px solid #ddd;
    display: block; }
    .slider-brand--home6 a:hover {
      border-color: #ffaa00; }

.block-clientsay .yt-content-slide {
  border: 1px solid #ddd;
  padding: 15px 20px;
  margin-left: 1px; }
  .block-clientsay .yt-content-slide .client-info {
    border-top: 1px solid #ddd;
    margin-top: 15px;
    padding-top: 20px; }
    .block-clientsay .yt-content-slide .client-info strong {
      font-size: 116.6%;
      text-transform: uppercase;
      font-weight: bold;
      color: #444; }
    .block-clientsay .yt-content-slide .client-info img {
      float: left;
      margin-right: 10px;
      width: auto; }
.block-clientsay .owl2-controls {
  position: absolute;
  top: -30px;
  width: 100%; }
  .block-clientsay .owl2-controls .owl2-nav .owl2-prev,
  .block-clientsay .owl2-controls .owl2-nav .owl2-next {
    width: 20px;
    height: 27px;
    border: 1px solid #ddd;
    background-image: url("../img/theme/icons/ico-slider.png");
    background-repeat: no-repeat;
    background-color: #fff;
    display: inline-block;
    text-indent: -999em;
    position: absolute;
    transition: all 0.2s ease-in-out 0s;
    top: calc(50% - 13px); }
    .block-clientsay .owl2-controls .owl2-nav .owl2-prev:hover,
    .block-clientsay .owl2-controls .owl2-nav .owl2-next:hover {
      background-color: #ffaa00;
      background-position: 0px 0;
      border-color: #ffaa00; }
  .block-clientsay .owl2-controls .owl2-nav .owl2-prev {
    background-position: -31px 0; }
    .block-clientsay .owl2-controls .owl2-nav .owl2-prev:hover {
      background-position: 0px 0; }
  .block-clientsay .owl2-controls .owl2-nav .owl2-next {
    background-position: -60px 0; }
    .block-clientsay .owl2-controls .owl2-nav .owl2-next:hover {
      background-position: -90px 0; }
  .block-clientsay .owl2-controls .owl2-nav .owl2-prev {
    left: 0px;
    right: auto; }
  .block-clientsay .owl2-controls .owl2-nav .owl2-next {
    left: 25px; }

.fa.fa-angle-right:before {
  content: "\f104"; }

.product-layout {
  padding-bottom: 1px;
  margin: 0 1px; }
  .product-layout:hover .product-img {
    background: rgba(0, 0, 0, 0.3);
    display: block;
    overflow: hidden; }
  .product-layout:hover .hover ul li {
    opacity: 1 !important; }
  .product-layout:hover .hover-1 ul li {
    opacity: 1 !important;
    height: 40px !important; }
  .product-layout:hover .right-block button {
    background: #ffaa00;
    border-color: #ffaa00; }
    .product-layout:hover .right-block button span {
      color: #fff !important; }
  .product-layout:hover .right-block .caption h4 a {
    color: #ffaa00; }
  .product-layout .product-item-container {
    border: none; }
    .product-layout .product-item-container .left-block {
      position: relative;
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      padding: 5px; }
      .product-layout .product-item-container .left-block .product-image-container .product-img {
        display: block;
        overflow: hidden; }
        .product-layout .product-item-container .left-block .product-image-container .product-img img {
          width: 100%; }
        .product-layout .product-item-container .left-block .product-image-container .product-img:before {
          background-color: inherit;
          position: absolute;
          top: 0;
          bottom: 0;
          right: 0;
          left: 0;
          content: "";
          width: 100%;
          height: 100%;
          transition: all 0.5s; }
      .product-layout .product-item-container .left-block .new {
        position: absolute;
        width: 45px;
        height: 45px;
        border-radius: 100px;
        color: #fff;
        line-height: 45px;
        text-align: center;
        top: 10px;
        right: 10px;
        background: #0083c1;
        text-transform: uppercase; }
      .product-layout .product-item-container .left-block .sale {
        position: absolute;
        width: 45px;
        height: 45px;
        border-radius: 100px;
        color: #fff;
        line-height: 45px;
        text-align: center;
        background: #ff5555;
        top: 10px;
        left: 10px; }
      .product-layout .product-item-container .left-block .hover {
        position: absolute;
        bottom: 0;
        left: 5px; }
        .product-layout .product-item-container .left-block .hover ul {
          padding: 0; }
          .product-layout .product-item-container .left-block .hover ul li {
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background: #fff;
            line-height: 40px;
            text-align: center;
            border-radius: 3px;
            margin: 5px;
            transition-timing-function: ease;
            opacity: 0; }
            .product-layout .product-item-container .left-block .hover ul li a {
              font-size: 1.5em;
              transition: none;
              width: 40px;
              height: 40px;
              display: block; }
            .product-layout .product-item-container .left-block .hover ul li:hover {
              background: #ffaa00; }
              .product-layout .product-item-container .left-block .hover ul li:hover a {
                color: #fff; }
        .product-layout .product-item-container .left-block .hover .icon-heart {
          transition: opacity 2s; }
        .product-layout .product-item-container .left-block .hover .icon-exchange {
          transition: opacity 1s; }
        .product-layout .product-item-container .left-block .hover .icon-search {
          transition: opacity 0s; }
      .product-layout .product-item-container .left-block .hover-1 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%; }
        .product-layout .product-item-container .left-block .hover-1 ul {
          padding: 0; }
          .product-layout .product-item-container .left-block .hover-1 ul li {
            list-style: none;
            display: inline-block;
            width: 25%;
            float: left;
            height: 0;
            transition: all .5s;
            background: rgba(0, 0, 0, 0.5);
            line-height: 40px;
            text-align: center;
            transition-timing-function: ease;
            opacity: 0; }
            .product-layout .product-item-container .left-block .hover-1 ul li a {
              font-size: 1.5em;
              transition: none;
              height: 40px;
              display: block;
              text-align: center;
              width: 100%;
              color: #fff; }
            .product-layout .product-item-container .left-block .hover-1 ul li:hover a {
              color: #ffaa00; }
    .product-layout .product-item-container .right-block {
      padding-top: 5px; }
      .product-layout .product-item-container .right-block h4 {
        margin-bottom: 10px;
        margin-top: 10px; }
        .product-layout .product-item-container .right-block h4 a {
          font-size: 14px;
          color: #444444; }
          .product-layout .product-item-container .right-block h4 a:hover {
            color: #ffaa00; }
      .product-layout .product-item-container .right-block .ratings {
        line-height: 30px; }
        .product-layout .product-item-container .right-block .ratings span i {
          color: #222222; }
        .product-layout .product-item-container .right-block .ratings .gray i {
          color: #cccccc; }
      .product-layout .product-item-container .right-block .price {
        margin: 10px 0 15px; }
        .product-layout .product-item-container .right-block .price span {
          font-size: 18px;
          color: #ff5555;
          font-weight: 500; }
        .product-layout .product-item-container .right-block .price .price-old {
          font-size: 14px;
          text-decoration: line-through;
          color: #777777; }
      .product-layout .product-item-container .right-block .button-group button {
        border-radius: 5px;
        text-transform: uppercase;
        width: 120px;
        height: 40px; }
        .product-layout .product-item-container .right-block .button-group button:hover span {
          color: #fff; }
        .product-layout .product-item-container .right-block .button-group button span {
          color: #777777;
          font-size: 12px; }
        .product-layout .product-item-container .right-block .button-group button:active:focus, .product-layout .product-item-container .right-block .button-group button:active, .product-layout .product-item-container .right-block .button-group button:focus {
          background: #ffaa00;
          outline: none; }
          .product-layout .product-item-container .right-block .button-group button:active:focus span, .product-layout .product-item-container .right-block .button-group button:active span, .product-layout .product-item-container .right-block .button-group button:focus span {
            color: #fff; }

@media (max-width: 1199px) {
  .product-layout .product-item-container .left-block .hover .icon-search {
    display: none !important; } }
@media (max-width: 991px) {
  .btn-block input.form-control {
    margin: 10px; }

  .wishlist-remove {
    margin-top: 5px; } }
@media (max-width: 767px) {
  .banners {
    display: none; } }
/*==========================

BLOG PAGE
BLOG DETAIL
===========================*/
/*============ BLOG PAGE ================*/
.main-container .header-main {
  padding: 0;
  margin: 20px 0; }
  .main-container .header-main .home i {
    padding: 0 10px; }
  .main-container .header-main li {
    display: inline-block;
    list-style: none;
    font-size: 14px; }
    .main-container .header-main li a {
      color: #777777; }
      .main-container .header-main li a:hover {
        color: #ffaa00; }
.main-container #column-left h3 {
  color: #222222; }
.main-container #column-left .block-search {
  height: 90px;
  background: #f8f8f8;
  margin: 50px 0 20px 0;
  border: 1px solid #cccccc;
  border-radius: 3px; }
  .main-container #column-left .block-search .search {
    padding: 22px 22px; }
    .main-container #column-left .block-search .search .modsearch {
      position: relative; }
      .main-container #column-left .block-search .search .modsearch input {
        border-radius: 4px;
        border: 1px solid #cccccc;
        height: 44px;
        box-shadow: none; }
      .main-container #column-left .block-search .search .modsearch button {
        position: absolute;
        top: 0;
        left: 0;
        background: none;
        color: #777777;
        border: none;
        height: 100%; }
.main-container #column-left .blog-category h3 {
  border: none;
  font-weight: 400; }
  .main-container #column-left .blog-category h3:after {
    content: none; }
.main-container #column-left .blog-category .modcontent .list-group {
  padding-right: 0; }
  .main-container #column-left .blog-category .modcontent .list-group .list-group-item {
    background: #f8f8f8;
    border: 1px solid #cccccc;
    border-bottom: none; }
    .main-container #column-left .blog-category .modcontent .list-group .list-group-item:hover {
      background: #fff; }
      .main-container #column-left .blog-category .modcontent .list-group .list-group-item:hover a {
        color: #ffaa00; }
    .main-container #column-left .blog-category .modcontent .list-group .list-group-item:first-child {
      border-top-right-radius: 5px;
      border-top-left-radius: 5px; }
    .main-container #column-left .blog-category .modcontent .list-group .list-group-item:last-child {
      border-bottom-right-radius: 5px;
      border-bottom-left-radius: 5px;
      border-bottom: 1px solid #cccccc; }
.main-container #column-left .product h3 {
  font-weight: 300; }
.main-container #column-left .product .owl-carousel .article-image {
  border-radius: 3px;
  padding: 8px;
  border: 1px solid #e5e5e5;
  position: relative; }
  .main-container #column-left .product .owl-carousel .article-image .day {
    position: absolute;
    background: #fff;
    top: 17px;
    right: 17px;
    display: block;
    z-index: 999;
    width: 50px;
    height: 65px;
    text-align: center;
    border-radius: 3px; }
    .main-container #column-left .product .owl-carousel .article-image .day p {
      color: #ffaa00; }
      .main-container #column-left .product .owl-carousel .article-image .day p:first-child {
        font-weight: 700;
        font-size: 2em;
        margin-top: 15px;
        margin-bottom: 3px; }
  .main-container #column-left .product .owl-carousel .article-image:hover {
    background: #7f7f7f;
    opacity: 0.6; }
    .main-container #column-left .product .owl-carousel .article-image:hover img {
      transform: none; }
.main-container #column-left .product .owl-carousel .itemBlogContent1 {
  color: #888888; }
  .main-container #column-left .product .owl-carousel .itemBlogContent1 .article-title h4 a {
    color: #444444; }
  .main-container #column-left .product .owl-carousel .itemBlogContent1 .article-description1 {
    color: #888; }
  .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 {
    padding-top: 20px; }
    .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .comment_count1 {
      float: right; }
      .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .comment_count1 a {
        color: #444444; }
        .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .comment_count1 a i {
          padding-left: 3px; }
        .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .comment_count1 a:hover {
          color: #ffaa00; }
    .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .author {
      float: left; }
      .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .author a {
        color: #ffaa00;
        font-size: 12px; }
        .main-container #column-left .product .owl-carousel .itemBlogContent1 .blog-meta1 .author a:hover {
          color: red; }
.main-container #column-left .product .owl-carousel .owl-nav {
  position: absolute;
  top: -35px;
  left: 0; }
  .main-container #column-left .product .owl-carousel .owl-nav .owl-prev {
    width: 30px;
    height: 30px;
    background: #f2f2f2;
    text-align: center;
    border-radius: 3px;
    line-height: 30px;
    display: inline-block;
    margin-left: 5px; }
    .main-container #column-left .product .owl-carousel .owl-nav .owl-prev:after {
      content: "<"; }
    .main-container #column-left .product .owl-carousel .owl-nav .owl-prev:hover {
      background: #ffaa00;
      color: #fff; }
  .main-container #column-left .product .owl-carousel .owl-nav .owl-next {
    width: 30px;
    height: 30px;
    background: #f2f2f2;
    text-align: center;
    border-radius: 3px;
    line-height: 30px;
    display: inline-block; }
    .main-container #column-left .product .owl-carousel .owl-nav .owl-next:after {
      content: ">"; }
    .main-container #column-left .product .owl-carousel .owl-nav .owl-next:hover {
      background: #ffaa00;
      color: #fff; }
.main-container #content {
  float: right; }
  .main-container #content .blog-header h3 {
    font-size: 30px;
    color: #444444; }
  .main-container #content .blog-header p {
    padding-bottom: 20px; }
  .main-container #content .blog-listitem {
    margin: 0; }
    .main-container #content .blog-listitem .blog-item {
      display: block;
      overflow: hidden;
      padding: 14px 0; }
      .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image {
        border-radius: 3px;
        padding: 8px;
        border: 1px solid #e5e5e5;
        position: relative;
        width: 46%;
        float: right; }
        .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image .day {
          position: absolute;
          background: #fff;
          top: 17px;
          right: 17px;
          display: block;
          z-index: 999;
          width: 50px;
          height: 65px;
          text-align: center;
          border-radius: 3px; }
          .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image .day p {
            color: #ffaa00; }
            .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image .day p:first-child {
              font-weight: 700;
              font-size: 2em;
              margin-top: 15px;
              margin-bottom: 3px; }
        .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image .popup-gallery {
          width: 100%; }
        .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image a {
          display: block;
          overflow: hidden; }
          .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image a:before {
            background-color: inherit;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            content: "";
            width: 100%;
            height: 100%;
            transition: all 0.5s; }
        .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image:hover a {
          background: rgba(217, 217, 217, 0.5); }
      .main-container #content .blog-listitem .blog-item .itemBlogContent {
        width: 54%;
        float: left;
        display: block;
        overflow: hidden;
        padding: 11px 0 0;
        padding-right: 23px; }
    .main-container #content .blog-listitem .last {
      padding-bottom: 19px; }
    .main-container #content .blog-listitem .itemBlogContent h4 a {
      font-weight: 500;
      font-size: 22px;
      color: #444444; }
      .main-container #content .blog-listitem .itemBlogContent h4 a:hover {
        color: #ffaa00; }
    .main-container #content .blog-listitem .itemBlogContent .blog-meta {
      display: block;
      float: none;
      padding: 16px 0 22px 0;
      border-bottom: 1px solid #f0f0f0; }
      .main-container #content .blog-listitem .itemBlogContent .blog-meta .comment_count {
        border: none; }
        .main-container #content .blog-listitem .itemBlogContent .blog-meta .comment_count a {
          font-size: 1.2em; }
          .main-container #content .blog-listitem .itemBlogContent .blog-meta .comment_count a i {
            padding-left: 3px; }
          .main-container #content .blog-listitem .itemBlogContent .blog-meta .comment_count a:hover {
            color: #ffaa00; }
      .main-container #content .blog-listitem .itemBlogContent .blog-meta .author {
        float: left; }
        .main-container #content .blog-listitem .itemBlogContent .blog-meta .author a {
          color: #ffaa00;
          font-size: 12px; }
          .main-container #content .blog-listitem .itemBlogContent .blog-meta .author a:hover {
            color: red; }
    .main-container #content .blog-listitem .itemBlogContent .share {
      padding-top: 20px; }
      .main-container #content .blog-listitem .itemBlogContent .share p {
        font-size: 14px;
        float: right;
        display: inline-block;
        margin-top: 4px; }
      .main-container #content .blog-listitem .itemBlogContent .share .share-icon {
        float: left;
        display: inline-block; }
        .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul li {
          list-style: none;
          display: inline-block;
          background: #1d9ffa;
          text-align: center;
          border-radius: 3px;
          margin-right: 5px; }
          .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul li a {
            display: block;
            height: 27px;
            width: 27px;
            line-height: 27px; }
            .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul li a i {
              color: #fff; }
        .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .twitter {
          background: #456bbe; }
          .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .twitter:hover {
            background: #8e9dbd; }
        .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .facebook {
          background: #1d9ffa; }
          .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .facebook:hover {
            background: #b9def9; }
        .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .google {
          background: #e04d3f; }
          .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .google:hover {
            background: #e2aba6; }
        .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .skype {
          background: #4899d2; }
          .main-container #content .blog-listitem .itemBlogContent .share .share-icon ul .skype:hover {
            background: #abc4d6; }
    .main-container #content .blog-listitem .blog-listitem-bottom {
      display: block;
      overflow: hidden;
      height: 50px;
      width: 100%;
      background: #f8f8f8;
      border-radius: 5px;
      margin: 11px 0 29px 0;
      border: 1px solid #cccccc; }
      .main-container #content .blog-listitem .blog-listitem-bottom p {
        display: block;
        float: right;
        padding: 16px 0 0 0;
        padding-right: 16px; }
      .main-container #content .blog-listitem .blog-listitem-bottom .pagination {
        float: left;
        margin: 0;
        padding: 9px 0 0 0;
        padding-left: 9px; }
        .main-container #content .blog-listitem .blog-listitem-bottom .pagination li a {
          margin-right: 5px;
          border-radius: 4px;
          line-height: 33px;
          height: 33px;
          width: 33px;
          padding: 0;
          text-align: center;
          color: #777777; }
        .main-container #content .blog-listitem .blog-listitem-bottom .pagination .active {
          color-border: #ffaa00; }
          .main-container #content .blog-listitem .blog-listitem-bottom .pagination .active span {
            line-height: 33px;
            height: 33px;
            width: 33px;
            padding: 0;
            text-align: center;
            background: #ffaa00;
            border-radius: 4px;
            border-color: #ffaa00; }

/*==================== BLOG DETAIL =======================*/
#content-detail h3 {
  font-size: 22px; }
#content-detail .article-info h2 {
  margin-bottom: 24px;
  margin-top: 27px;
  font-size: 30px;
  font-weight: 300;
  color: #222222; }
#content-detail .article-info hr {
  border-top: 1px dashed #dddddd;
  margin: 1px 0; }
#content-detail .article-image {
  position: relative; }
  #content-detail .article-image .day {
    position: absolute;
    background: #fff;
    top: 20px;
    right: 20px;
    display: block;
    z-index: 999;
    width: 50px;
    height: 65px;
    text-align: center;
    border-radius: 3px; }
    #content-detail .article-image .day p {
      color: #ffaa00; }
      #content-detail .article-image .day p:first-child {
        font-weight: 700;
        font-size: 2em;
        margin-top: 15px;
        margin-bottom: 3px; }
  #content-detail .article-image img {
    border-radius: 3px;
    padding: 8px;
    border: 1px solid #e5e5e5;
    position: relative; }
#content-detail .article-description {
  padding-top: 14px;
  margin-bottom: 43px; }
  #content-detail .article-description p {
    margin: 0px 0 22px; }
#content-detail .share {
  display: block;
  overflow: hidden;
  border-top: 1px solid #f0f0f0;
  padding-top: 21px; }
  #content-detail .share p {
    font-size: 14px;
    float: right; }
  #content-detail .share .share-icon {
    float: left; }
    #content-detail .share .share-icon ul li {
      list-style: none;
      display: inline-block;
      background: #1d9ffa;
      text-align: center;
      border-radius: 3px;
      margin-right: 5px; }
      #content-detail .share .share-icon ul li a {
        display: block;
        height: 27px;
        width: 27px;
        line-height: 27px; }
        #content-detail .share .share-icon ul li a i {
          color: #fff; }
    #content-detail .share .share-icon ul .twitter {
      background: #456bbe; }
      #content-detail .share .share-icon ul .twitter:hover {
        background: #8e9dbd; }
    #content-detail .share .share-icon ul .facebook {
      background: #1d9ffa; }
      #content-detail .share .share-icon ul .facebook:hover {
        background: #b9def9; }
    #content-detail .share .share-icon ul .google {
      background: #e04d3f; }
      #content-detail .share .share-icon ul .google:hover {
        background: #e2aba6; }
    #content-detail .share .share-icon ul .skype {
      background: #4899d2; }
      #content-detail .share .share-icon ul .skype:hover {
        background: #abc4d6; }
#content-detail .related-comment .content-comment h3 {
  font-size: 22px;
  color: #000012;
  margin-top: 78px;
  margin-bottom: 8px; }
#content-detail .related-comment .content-comment .list-comment {
  padding-top: 6px; }
  #content-detail .related-comment .content-comment .list-comment ul {
    padding: 0; }
    #content-detail .related-comment .content-comment .list-comment ul li {
      list-style: none; }
    #content-detail .related-comment .content-comment .list-comment ul .comment {
      display: block;
      overflow: hidden;
      padding-top: 40px; }
      #content-detail .related-comment .content-comment .list-comment ul .comment .avata {
        width: 9%;
        float: right; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .avata img {
          padding: 4px;
          border: 1px solid #dddddd;
          box-sizing: content-box;
          border-radius: 3px; }
      #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right {
        float: left;
        width: 91%;
        padding-right: 22px; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .title-comment h4 {
          float: right;
          margin: 0;
          font-size: 16px; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .title-comment span {
          padding-right: 30px; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .title-comment i {
          float: left;
          font-size: 1.5em; }
          #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .title-comment i:hover {
            color: #ffaa00; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .description {
          padding-top: 16px; }
      #content-detail .related-comment .content-comment .list-comment ul .comment .list-reply .reply {
        display: block;
        overflow: hidden;
        padding-top: 12px; }
        #content-detail .related-comment .content-comment .list-comment ul .comment .list-reply .reply .avata {
          width: 7%; }
#content-detail .leave-comment {
  display: block;
  overflow: hidden;
  padding-top: 54px; }
  #content-detail .leave-comment .form-comment {
    padding-top: 20px; }
    #content-detail .leave-comment .form-comment p {
      font-size: 14px;
      color: #555555; }
      #content-detail .leave-comment .form-comment p span {
        color: red; }
    #content-detail .leave-comment .form-comment input {
      height: 40px;
      border-radius: 3px; }
    #content-detail .leave-comment .form-comment .form-name {
      padding-top: 24px; }
      #content-detail .leave-comment .form-comment .form-name p {
        margin-bottom: 4px; }
    #content-detail .leave-comment .form-comment .form-comment input {
      padding-bottom: 175px;
      padding-top: 10px;
      height: 200px; }
    #content-detail .leave-comment .form-comment .btn-send {
      display: block;
      overflow: hidden;
      padding-top: 30px;
      padding-bottom: 42px; }
      #content-detail .leave-comment .form-comment .btn-send p {
        float: right;
        color: red;
        line-height: 40px; }
      #content-detail .leave-comment .form-comment .btn-send button {
        float: left;
        height: 40px;
        width: 130px;
        background: #333333;
        color: #fff;
        border: none;
        border-radius: 3px;
        text-transform: uppercase; }

@media (max-width: 991px) {
  .banners {
    display: none; } }
@media (max-width: 767px) {
  .main-container #content .blog-listitem .blog-item .itemBlogImg .article-image {
    width: 100%; }
  .main-container #content .blog-listitem .blog-item .itemBlogContent {
    width: 100%;
    padding: 0; }

  #content-detail .related-comment .content-comment .list-comment ul .comment .comment-right .title-comment span {
    padding-right: 5px; } }
/*****************************************************************************
******                     SO Framework: Sass Garenal                   ******
******************************************************************************/
/* 2. STYLE OWL
------------------------------*/
/* 3. STYLE ALL SITE
-------------------------------*/
html {
  direction: rtl; }

body {
  color: #555555;
  font-size: 12px;
  line-height: 18px;
  font-family: 'Poppins', sans-serif; }

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1; }

/* Override the bootstrap defaults */
h1 {
  font-size: 25px; }

h2 {
  font-size: 20px; }

h3 {
  font-size: 18px; }

h4 {
  font-size: 15px; }

h5 {
  font-size: 12px; }

h6 {
  font-size: 10.2px; }

ul.menu, ul.blank, .htmlcontent-home, .menu-category .list-group, .menu-category .list-group > li ul, .filter-shopby .checkboxes_list, .filter-row .checkboxes_list, .filter-shopby .simple_vertical_list, .filter-row .simple_vertical_list, .tags_cloud, ul.contact-address, ul.product-options {
  list-style: none;
  padding: 0; }

option {
  padding: 2px 5px;
  border-width: 1px; }

.alert ol li {
  list-style-type: decimal;
  margin: 0 0 5px 15px; }

.align-center {
  display: table;
  margin: 0 auto; }

.text-danger {
  color: #fff;
  display: inline-block;
  background-color: #a94442;
  padding: 0 5px;
  margin: 5px 0;
  border-radius: 3px;
  font-size: 11px; }

a, .btn-link {
  color: #222222;
  transition: color 0.3s ease-in-out; }
  a:hover, .btn-link:hover {
    color: #ffbb33;
    text-decoration: none; }

td a {
  color: red; }

a, a:visited, a:active, a:link, a:focus {
  cursor: pointer;
  text-decoration: none;
  outline: none; }

.btn.active, .btn:active {
  box-shadow: none !important; }

.input-group-btn > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

ol {
  counter-reset: item;
  list-style-type: none;
  margin: 0 0 0 15px; }

em {
  font-style: normal; }

.fancybox-outer, .fancybox-inner {
  text-align: center; }
  .fancybox-outer .wishlist_product_view, .fancybox-inner .wishlist_product_view {
    margin-bottom: 15px; }

.list-inline {
  display: inline-block; }

.zoomContainer {
  overflow: hidden; }

.img-thumbnail.pull-left {
  margin-left: 30px; }
.img-thumbnail.pull-right {
  margin-left: 30px; }

.selector {
  display: inline-block;
  position: relative;
  height: 30px;
  padding-left: 30px; }
  .selector span {
    display: none; }
  .selector select {
    position: absolute;
    height: 100%;
    width: 100%;
    border-radius: 0;
    box-shadow: none;
    top: 0px;
    left: 0px;
    font-size: 13px;
    color: #999;
    padding: 5px 7px;
    border: solid 1px #e6e6e6; }
    .selector select:focus {
      box-shadow: none;
      outline: none;
      border-color: #e6e6e6; }
  .selector:after {
    content: "\f0d7";
    margin: 0;
    height: 28px;
    width: 28px;
    text-align: center;
    color: #666;
    position: absolute;
    top: 1px;
    left: 1px;
    background: #fff;
    pointer-events: none;
    line-height: 25px;
    font-size: 12px; }

.margin-zero {
  margin: 0; }

.col-xs-15,
.col-sm-15,
.col-md-15,
.col-lg-15 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-left: 15px; }

.col-xs-15 {
  width: 20%;
  float: left; }

@media (min-width: 768px) {
  .col-sm-15 {
    width: 20%;
    float: left; } }
@media (min-width: 992px) {
  .col-md-15 {
    width: 20%;
    float: left; } }
@media (min-width: 1200px) {
  .col-lg-15 {
    width: 20%;
    float: left; } }
/* 4. FORM
-----------------------------------------------------------------*/
.clearfix {
  clear: both; }

.inline {
  display: inline-block; }

legend {
  font-size: 18px;
  padding: 7px 0px; }

label {
  font-size: 12px;
  font-weight: normal; }

select.form-control, textarea.form-control, input[type="text"].form-control, input[type="password"].form-control, input[type="datetime"].form-control, input[type="datetime-local"].form-control, input[type="date"].form-control, input[type="month"].form-control, input[type="time"].form-control, input[type="week"].form-control, input[type="number"].form-control, input[type="email"].form-control, input[type="url"].form-control, input[type="search"].form-control, input[type="tel"].form-control, input[type="color"].form-control {
  font-size: 12px;
  border-radius: 0; }

.input-group .input-group-addon {
  font-size: 12px;
  height: 30px; }

.dropdown-menu {
  font-size: inherit; }

textarea, input[type="text"], input[type="password"], input[type="datetime"],
input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"],
input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"],
input[type="tel"], input[type="color"], .uneditable-input {
  border-radius: 0; }

.btn {
  border-radius: 0; }

.btn-default.active, .btn-default.focus, .btn-default:active,
.btn-default:focus, .btn-default:hover, .open > .dropdown-toggle.btn-default {
  background: #ffaa00;
  border-color: #ffaa00;
  color: white; }

.buttonGray {
  padding: 7px 12px;
  background: #555555;
  color: #fff;
  border-radius: 0;
  border-color: #555555; }
  .buttonGray:hover {
    background: #ffaa00;
    border-color: #ffaa00;
    color: #fff; }

.submit {
  margin: 1em 0; }

select, textarea {
  color: #666; }

select {
  box-shadow: none !important;
  padding-right: 5px;
  -webkit-box-shadow: none !important;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: url("../img/theme/icons/bg-selectbox.png") no-repeat right center #fff; }

textarea {
  height: auto;
  resize: none; }

.alert-danger,
.alert-success {
  display: inline-block;
  width: 100%;
  border-radius: 0; }

.filter_group input {
  display: none; }

.filter_group [type=checkbox] + span:before {
  content: "\f00c";
  font-family: FontAwesome;
  width: 18px;
  padding-left: 2px;
  line-height: 16px;
  height: 18px;
  border: 1px solid #dddddd;
  border-radius: 3px;
  position: absolute;
  top: 3px;
  left: 0;
  font-size: 12px;
  color: #ffffff; }

.filter_group [type=checkbox]:checked + span:before {
  color: #333333; }

/* 5. TABLE
-----------------------------------------------------*/
.table thead > tr > th {
  background: #eee; }

table.std th, table.std td {
  vertical-align: middle;
  border: #ccc;
  padding: 10px;
  text-align: center; }

table.std th {
  white-space: nowrap;
  background: #f5f5f5; }

table.std tfoot td {
  color: #333;
  text-align: left;
  white-space: nowrap; }

table.std {
  background: #fdfdfd;
  border-spacing: 0;
  vertical-align: middle;
  border: #ccc;
  width: 100%; }

table th {
  border: #ccc;
  color: #7a7a7a;
  font-size: 13px;
  font-weight: bold;
  padding: 10px;
  text-align: center;
  vertical-align: middle;
  text-transform: uppercase; }

.delivery_option table td {
  text-align: center; }

table tfoot td {
  text-align: left; }

table.table-bordered thead > * {
  background-color: rgba(51, 51, 51, 0.1);
  font-weight: bold; }

.no-margin {
  margin: 0 !important; }

.no-margin-bottom {
  margin-bottom: 0 !important; }

.sidebar-menu .box-category-menu {
  z-index: 2; }

.label-mega {
  background: #ee3b27; }

.carousel-inner > .item > a > img, .carousel-inner > .item > img,
.img-responsive, .thumbnail a > img, .thumbnail > img {
  margin: 0 auto; }

#button-review {
  margin-top: 12px;
  padding: 7px 12px;
  margin-left: 10px;
  background: gray;
  color: #fff;
  text-transform: capitalize;
  border-radius: 0;
  border-color: gray; }
  #button-review:hover {
    background: #ffaa00;
    border-color: #ffaa00; }

.product-search .checkbox-inline {
  display: block; }

/* 	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+

	[1]		Page Faq
	[2]		Page About us
	[3]		Page Contact
	[4]		page 404 
	
  */
#map-canvas {
  height: 600px; }

ul.yt-accordion {
  margin: 0;
  padding: 0;
  list-style: none; }

ul.yt-accordion li.accordion-group {
  margin-bottom: 1px; }
  ul.yt-accordion li.accordion-group h3.accordion-heading {
    margin: 0;
    cursor: pointer;
    background-color: #f4f4f4;
    position: relative;
    z-index: 2; }
    ul.yt-accordion li.accordion-group h3.accordion-heading span {
      padding: 10px;
      font-size: 16px;
      display: block;
      margin-right: 40px;
      line-height: 24px; }
    ul.yt-accordion li.accordion-group h3.accordion-heading .fa {
      margin: 0px;
      font-family: verdana;
      font-size: 17px;
      width: 40px;
      background: #A0A0A0;
      color: white;
      text-align: center;
      line-height: 40px;
      vertical-align: top;
      position: absolute;
      z-index: 5;
      top: 0;
      bottom: 0; }
  ul.yt-accordion li.accordion-group .accordion-inner {
    border: 1px solid #f4f4f4;
    padding: 10px 15px;
    background: #E6E6E3; }

ul.yt-accordion li.accordion-group h3.accordion-heading .fa-plus-square:before {
  content: "+"; }

ul.yt-accordion li.accordion-group h3.accordion-heading.active .fa-plus-square:before {
  content: "-"; }

ul.yt-accordion li.accordion-group h3.accordion-heading:hover {
  color: white;
  background: #8E8E8E; }

ul.yt-accordion li.accordion-group h3.accordion-heading:hover .fa {
  background: #666; }

.about-us .our-team-slider, .about-us .client-logo-content {
  position: relative; }
  .about-us .our-team-slider .owl-nav div, .about-us .client-logo-content .owl-nav div {
    width: 34px;
    height: 34px;
    display: block;
    position: absolute;
    background: gray;
    color: #fff;
    border-radius: 50%;
    font-size: 18px;
    line-height: 34px;
    text-align: center;
    top: 29%; }
    .about-us .our-team-slider .owl-nav div:hover, .about-us .client-logo-content .owl-nav div:hover {
      background: #ffaa00; }
  .about-us .our-team-slider .owl-nav .owl-prev, .about-us .client-logo-content .owl-nav .owl-prev {
    right: -1%; }
    .about-us .our-team-slider .owl-nav .owl-prev:before, .about-us .client-logo-content .owl-nav .owl-prev:before {
      content: "\f105";
      font-family: FontAwesome; }
  .about-us .our-team-slider .owl-nav .owl-next, .about-us .client-logo-content .owl-nav .owl-next {
    left: -1%; }
    .about-us .our-team-slider .owl-nav .owl-next:before, .about-us .client-logo-content .owl-nav .owl-next:before {
      content: "\f104";
      font-family: FontAwesome; }
.about-us .about-title {
  font-size: 171%;
  font-style: italic;
  font-weight: bold;
  margin-bottom: 20px; }
.about-us .name-member {
  font-size: 116.67%;
  font-weight: bold; }
.about-us .job-member {
  margin: 7px 0 5px;
  font-style: italic; }
  .about-us .job-member:before, .about-us .job-member:after {
    content: "---";
    margin: 0 5px; }
.about-us .social-member {
  list-style: none;
  padding: 0; }
  .about-us .social-member .social-icon {
    display: inline-block;
    margin: 3px; }
    .about-us .social-member .social-icon a {
      display: inline-block;
      color: #fff;
      font-size: 16px;
      width: 30px;
      height: 30px;
      text-align: center;
      line-height: 30px;
      border-radius: 50%;
      border-radius: 50%; }
      .about-us .social-member .social-icon a span {
        display: none; }
      .about-us .social-member .social-icon a:hover {
        background-color: #ffaa00 !important; }
    .about-us .social-member .social-icon.rss a {
      background-color: #f8bc2e; }
    .about-us .social-member .social-icon.facebook a {
      background-color: #39599f; }
    .about-us .social-member .social-icon.twitter a {
      background-color: #45b0e3; }
    .about-us .social-member .social-icon.google a {
      background-color: #1872bf; }
.about-us .des-member.des-client {
  max-width: 950px;
  margin: 0 auto;
  font-style: italic;
  margin-bottom: 10px; }
.about-us .member-info {
  text-align: center;
  padding-top: 15px; }
.about-us .client-say-content {
  text-align: center; }
  .about-us .client-say-content .owl-stage-outer {
    padding-top: 15px; }
  .about-us .client-say-content .owl-dots {
    margin-top: 15px;
    position: absolute;
    right: 0;
    top: -23px;
    width: 100%; }
    .about-us .client-say-content .owl-dots span {
      width: 16px;
      height: 16px;
      background-color: #d9d9d9;
      border: none;
      margin: 0 2px;
      opacity: 1;
      display: block;
      border-radius: 50%;
      -webkit-border-radius: 50%; }
    .about-us .client-say-content .owl-dots .owl-dot {
      display: inline-block; }
      .about-us .client-say-content .owl-dots .owl-dot.active span {
        background-color: #929292; }
      .about-us .client-say-content .owl-dots .owl-dot span:hover {
        background-color: #929292; }
.about-us .about-us-center {
  text-align: center; }
  .about-us .about-us-center .content-description {
    padding-top: 25px;
    clear: both;
    margin-bottom: 30px; }
.about-us .client-logo-content {
  border-bottom: 1px dashed #e7e7e7;
  border-top: 1px dashed #e7e7e7;
  padding-bottom: 10px;
  text-align: center; }
  .about-us .client-logo-content .about-title {
    background: #fff none repeat scroll 0 0;
    display: inline-block;
    margin: 0;
    padding: 0 10px;
    position: relative;
    text-align: center;
    top: -19px; }
.about-us .owl2-controls .owl2-nav div {
  color: #fff;
  border_radius: 50%;
  position: absolute;
  top: 29%;
  overflow: visible;
  display: inline-block;
  width: 34px;
  height: 34px;
  text-indent: -9999px;
  margin: 0 3px;
  background-color: #A6A6A8;
  border-radius: 50%;
  -webkit-border-radius: 50%; }
  .about-us .owl2-controls .owl2-nav div:hover {
    background-color: #ffaa00; }
  .about-us .owl2-controls .owl2-nav div.owl2-next {
    left: -19px; }
  .about-us .owl2-controls .owl2-nav div.owl2-prev {
    right: -19px; }
  .about-us .owl2-controls .owl2-nav div:before {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background-color: #a6a6a7;
    line-height: 32px;
    top: 1px; }
  .about-us .owl2-controls .owl2-nav div:hover:before {
    background-color: #ffaa00; }
.about-us .client-logo-slider {
  padding: 0 25px; }
  .about-us .client-logo-slider img {
    width: auto;
    display: inline-block; }
.about-us .about-image-slider {
  max-width: 570px;
  margin: 0 auto;
  position: relative; }
  .about-us .about-image-slider .owl-nav div {
    width: 34px;
    height: 34px;
    display: block;
    position: absolute;
    background: gray;
    color: #fff;
    border-radius: 3px;
    font-size: 18px;
    line-height: 34px;
    text-align: center;
    top: 50%;
    transform: translateY(-50%); }
    .about-us .about-image-slider .owl-nav div:before {
      background-color: transparent;
      color: #fff; }
    .about-us .about-image-slider .owl-nav div.owl-next {
      left: 0; }
      .about-us .about-image-slider .owl-nav div.owl-next:before {
        content: "\f105";
        font-family: FontAwesome; }
    .about-us .about-image-slider .owl-nav div.owl-prev {
      right: 0; }
      .about-us .about-image-slider .owl-nav div.owl-prev:before {
        content: "\f104";
        font-family: FontAwesome; }
    .about-us .about-image-slider .owl-nav div:hover {
      background: #ffaa00; }
      .about-us .about-image-slider .owl-nav div:hover:before {
        color: #fff; }
.about-us .skills-value {
  padding-top: 52px; }
  .about-us .skills-value .label-skill {
    font-weight: bold; }
.about-us .about-us-content .description-about {
  padding: 20px 0; }
.about-us .content-faq {
  position: relative;
  top: -15px; }
  .about-us .content-faq .panel {
    box-shadow: none;
    -webkit-box-shadow: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    -webkit-border-radius: 0;
    margin: 0; }
    .about-us .content-faq .panel .panel-title {
      font-size: 100%;
      font-weight: bold; }
      .about-us .content-faq .panel .panel-title a {
        display: block;
        padding: 15px 25px 15px 0;
        position: relative; }
        .about-us .content-faq .panel .panel-title a:after {
          transform: rotate(135deg);
          content: "";
          width: 4px;
          height: 4px;
          position: absolute;
          right: 6px;
          top: 50%;
          margin-top: 6px;
          background-color: #ffaa00; }
        .about-us .content-faq .panel .panel-title a:before {
          background-color: #ffaa00;
          content: "-";
          width: 16px;
          height: 16px;
          display: inline-block;
          position: absolute;
          right: 0px;
          top: 50%;
          margin-top: -8px;
          border-radius: 2px;
          -webkit-border-radius: 2px;
          color: #fff;
          text-align: center;
          line-height: 16px; }
        .about-us .content-faq .panel .panel-title a.collapsed:after {
          background-color: #737373; }
        .about-us .content-faq .panel .panel-title a.collapsed:before {
          background-color: #737373;
          content: "?"; }
    .about-us .content-faq .panel .panel-body {
      padding: 0 0 13px; }
.about-us .owl2-theme .owl2-controls .owl2-nav > div:before {
  display: inline-block;
  text-indent: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  right: 0px;
  top: 1px;
  color: #fff;
  font-size: 18px;
  line-height: 32px;
  text-align: center;
  border-radius: 50%;
  -webkit-border-radius: 50%; }
.about-us .owl2-theme .owl2-controls .owl2-nav > div.owl2-prev:before {
  content: "\f104";
  font-family: FontAwesome; }
.about-us .owl2-theme .owl2-controls .owl2-nav > div.owl2-next:before {
  content: "\f105";
  font-family: FontAwesome; }

.about-demo-1 .about-image,
.about-demo-1 .about-info {
  margin-bottom: 40px; }
.about-demo-1 .what-client-say {
  margin-bottom: 60px; }
.about-demo-1 .line-hori {
  text-align: center;
  position: relative;
  z-index: 3; }
  .about-demo-1 .line-hori > span {
    background: white;
    display: inline-block;
    position: relative;
    z-index: 10;
    padding: 0 20px; }
  .about-demo-1 .line-hori:before {
    position: absolute;
    content: "";
    border-bottom: 1px dashed #ccc;
    top: 50%;
    right: 0;
    height: 1px;
    width: 100%;
    z-index: 3; }

.about-demo-2 .our-team {
  margin-bottom: 60px; }

.about-demo-3 .about-image,
.about-demo-3 .about-info {
  margin-bottom: 30px; }

.info-contact .name-store h3 {
  padding: 7px 0px;
  margin-top: 10px; }
.info-contact .icon {
  float: right;
  padding-left: 15px; }
  .info-contact .icon .fa {
    font-size: 20px; }
.info-contact .comment {
  line-height: 24px; }

.contact-form legend {
  border-bottom: 0; }

/******************************************************************************
******                 SO Framework: Sass ProductList                     ******
********************************************************************************/
/*---------- Category ----------*/
.main-container .gray i {
  color: #cccccc; }
.main-container #column-left h3 {
  font-weight: 400;
  color: #222222;
  text-transform: none;
  margin: 0;
  margin-bottom: 10px; }
.main-container #column-left .menu-category {
  padding-bottom: 30px; }
  .main-container #column-left .menu-category .modcontent {
    padding: 0;
    margin-top: 10px;
    border-radius: 3px; }
    .main-container #column-left .menu-category .modcontent ul {
      margin: 0; }
      .main-container #column-left .menu-category .modcontent ul li {
        border-bottom: 1px solid #dddddd;
        background: #f8f8f8; }
        .main-container #column-left .menu-category .modcontent ul li a {
          padding-right: 20px;
          font-size: 14px;
          color: #444444; }
          .main-container #column-left .menu-category .modcontent ul li a:hover {
            color: #ffaa00; }
        .main-container #column-left .menu-category .modcontent ul li:last-child {
          border-bottom: none; }
        .main-container #column-left .menu-category .modcontent ul li:hover {
          background: #fff;
          color: #ffaa00; }
        .main-container #column-left .menu-category .modcontent ul li ul li {
          border: none; }
.main-container #column-left .latest-product .modcontent .product-latest-item .media-body h4 {
  font-size: 14px;
  color: #444444; }
  .main-container #column-left .latest-product .modcontent .product-latest-item .media-body h4 a {
    font-weight: 300;
    font-size: 14px; }
.main-container #column-left .latest-product .modcontent .product-latest-item .media-body .price span {
  font-size: 18px;
  color: #ff5555;
  font-weight: 500; }
.main-container #column-left .latest-product .modcontent .product-latest-item .media-body .price .price-old {
  font-size: 14px;
  text-decoration: line-through;
  color: #777777; }
.main-container #column-left .banner-left {
  margin-top: 30px; }
.main-container #content h2 {
  font-size: 30px;
  color: #222222;
  font-weight: 300; }
.main-container #content .refine-search {
  margin: 40px 0 25px 0; }
.main-container #content .product-filter {
  display: block;
  height: 60px;
  width: 100%;
  background: #f8f8f8;
  line-height: 55px;
  border: 1px solid #dddddd;
  border-radius: 3px;
  margin-top: 20px; }
  .main-container #content .product-filter .view-mode {
    padding: 0 10px; }
    .main-container #content .product-filter .view-mode button {
      border-radius: 3px; }
      .main-container #content .product-filter .view-mode button:focus {
        background: #ffaa00;
        color: #fff;
        border-color: #ffaa00; }
      .main-container #content .product-filter .view-mode button:hover {
        background: #ffaa00;
        color: #fff;
        border-color: #ffaa00; }
  .main-container #content .product-filter .short-by-show {
    padding-left: 28px; }
    .main-container #content .product-filter .short-by-show .text {
      float: right; }
      .main-container #content .product-filter .short-by-show .text p {
        margin: 0; }
    .main-container #content .product-filter .short-by-show .short-by {
      float: left;
      padding-right: 70px; }
    .main-container #content .product-filter .short-by-show .form-group select {
      border-radius: 3px;
      background: url(../img/theme/icon/bg-selectbox.png) no-repeat center left; }
    .main-container #content .product-filter .short-by-show .box-pagination ul {
      margin: 10px 0 0 0;
      float: left; }
      .main-container #content .product-filter .short-by-show .box-pagination ul li {
        display: inline-block;
        padding-right: 5px; }
        .main-container #content .product-filter .short-by-show .box-pagination ul li span {
          border-radius: 3px; }
        .main-container #content .product-filter .short-by-show .box-pagination ul li a {
          border-radius: 3px;
          color: #777777; }
.main-container #content .products-list {
  display: inline-block; }
  .main-container #content .products-list .product-layout {
    padding-bottom: 1px;
    margin: 0 1px; }
    .main-container #content .products-list .product-layout:hover .product-img {
      background: rgba(0, 0, 0, 0.3);
      display: block;
      overflow: hidden; }
    .main-container #content .products-list .product-layout:hover .hover ul li {
      opacity: 1 !important; }
    .main-container #content .products-list .product-layout:hover .hover-1 ul li {
      opacity: 1 !important;
      height: 40px !important; }
    .main-container #content .products-list .product-layout:hover .right-block button {
      background: #ffaa00;
      border-color: #ffaa00; }
      .main-container #content .products-list .product-layout:hover .right-block button span {
        color: #fff !important; }
    .main-container #content .products-list .product-layout:hover .right-block .caption h4 a {
      color: #ffaa00; }
    .main-container #content .products-list .product-layout .product-item-container {
      border: none; }
      .main-container #content .products-list .product-layout .product-item-container .left-block {
        position: relative;
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        padding: 5px; }
        .main-container #content .products-list .product-layout .product-item-container .left-block .product-image-container .product-img {
          display: block;
          overflow: hidden; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .product-image-container .product-img img {
            width: 100%; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .product-image-container .product-img:before {
            background-color: inherit;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            content: "";
            width: 100%;
            height: 100%;
            transition: all 0.5s; }
        .main-container #content .products-list .product-layout .product-item-container .left-block .new {
          position: absolute;
          width: 45px;
          height: 45px;
          border-radius: 100px;
          color: #fff;
          line-height: 45px;
          text-align: center;
          top: 10px;
          right: 10px;
          background: #0083c1;
          text-transform: uppercase; }
        .main-container #content .products-list .product-layout .product-item-container .left-block .sale {
          position: absolute;
          width: 45px;
          height: 45px;
          border-radius: 100px;
          color: #fff;
          line-height: 45px;
          text-align: center;
          background: #ff5555;
          top: 10px;
          left: 10px; }
        .main-container #content .products-list .product-layout .product-item-container .left-block .hover {
          position: absolute;
          bottom: 0;
          left: 5px; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .hover ul {
            padding: 0; }
            .main-container #content .products-list .product-layout .product-item-container .left-block .hover ul li {
              list-style: none;
              display: block;
              width: 40px;
              height: 40px;
              background: #fff;
              line-height: 40px;
              text-align: center;
              border-radius: 3px;
              margin: 5px;
              transition-timing-function: ease;
              opacity: 0; }
              .main-container #content .products-list .product-layout .product-item-container .left-block .hover ul li a {
                font-size: 1.5em;
                transition: none;
                width: 40px;
                height: 40px;
                display: block; }
              .main-container #content .products-list .product-layout .product-item-container .left-block .hover ul li:hover {
                background: #ffaa00; }
                .main-container #content .products-list .product-layout .product-item-container .left-block .hover ul li:hover a {
                  color: #fff; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .hover .icon-heart {
            transition: opacity 2s; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .hover .icon-exchange {
            transition: opacity 1s; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .hover .icon-search {
            transition: opacity 0s; }
        .main-container #content .products-list .product-layout .product-item-container .left-block .hover-1 {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%; }
          .main-container #content .products-list .product-layout .product-item-container .left-block .hover-1 ul {
            padding: 0; }
            .main-container #content .products-list .product-layout .product-item-container .left-block .hover-1 ul li {
              list-style: none;
              display: inline-block;
              width: 25%;
              float: left;
              height: 0;
              transition: all .5s;
              background: rgba(0, 0, 0, 0.5);
              line-height: 40px;
              text-align: center;
              transition-timing-function: ease;
              opacity: 0; }
              .main-container #content .products-list .product-layout .product-item-container .left-block .hover-1 ul li a {
                font-size: 1.5em;
                transition: none;
                height: 40px;
                display: block;
                text-align: center;
                width: 100%;
                color: #fff; }
              .main-container #content .products-list .product-layout .product-item-container .left-block .hover-1 ul li:hover a {
                color: #ffaa00; }
      .main-container #content .products-list .product-layout .product-item-container .right-block {
        padding-top: 5px; }
        .main-container #content .products-list .product-layout .product-item-container .right-block h4 {
          margin-bottom: 10px;
          margin-top: 10px; }
          .main-container #content .products-list .product-layout .product-item-container .right-block h4 a {
            font-size: 14px;
            color: #444444; }
            .main-container #content .products-list .product-layout .product-item-container .right-block h4 a:hover {
              color: #ffaa00; }
        .main-container #content .products-list .product-layout .product-item-container .right-block .ratings {
          line-height: 30px; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .ratings span i {
            color: #222222; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .ratings .gray i {
            color: #cccccc; }
        .main-container #content .products-list .product-layout .product-item-container .right-block .price {
          margin: 10px 0 15px; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .price span {
            font-size: 18px;
            color: #ff5555;
            font-weight: 500; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .price .price-old {
            font-size: 14px;
            text-decoration: line-through;
            color: #777777; }
        .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button {
          border-radius: 5px;
          text-transform: uppercase;
          width: 120px;
          height: 40px; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:hover span {
            color: #fff; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button span {
            color: #777777;
            font-size: 12px; }
          .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:active:focus, .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:active, .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:focus {
            background: #ffaa00;
            outline: none; }
            .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:active:focus span, .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:active span, .main-container #content .products-list .product-layout .product-item-container .right-block .button-group button:focus span {
              color: #fff; }

.jGrowl a {
  color: #ffaa00; }

/*---------- Category v1, v2 ----------*/
#content.type-1 .products-list.grid, #content.type-2 .products-list.grid {
  margin: 0 -15px; }
  #content.type-1 .products-list.grid .product-layout, #content.type-2 .products-list.grid .product-layout {
    float: right;
    width: 33.3333%;
    padding: 30px 15px 0 15px; }
    #content.type-1 .products-list.grid .product-layout .right-block, #content.type-2 .products-list.grid .product-layout .right-block {
      text-align: center; }

/*---------- Category v3 ----------*/
#column-left.type-3 {
  display: none; }

#content.type-3 {
  width: 100%;
  padding-top: 0; }
  #content.type-3 .products-list.grid {
    margin: 0 -15px; }
    #content.type-3 .products-list.grid .product-layout {
      width: 25%;
      padding: 30px 15px 0 15px;
      float: right; }
      #content.type-3 .products-list.grid .product-layout .right-block {
        text-align: center; }

/*---------- Category v1, v2 ----------*/
#content.type-1 .products-list.list, #content.type-2 .products-list.list {
  margin: 0 -15px; }
  #content.type-1 .products-list.list .product-layout, #content.type-2 .products-list.list .product-layout {
    padding-top: 30px; }
    #content.type-1 .products-list.list .product-layout .left-block, #content.type-2 .products-list.list .product-layout .left-block {
      width: 31%; }
    #content.type-1 .products-list.list .product-layout .right-block, #content.type-2 .products-list.list .product-layout .right-block {
      text-align: right;
      padding: 30px 30px 0 0;
      width: 69%; }
      #content.type-1 .products-list.list .product-layout .right-block h4 a, #content.type-2 .products-list.list .product-layout .right-block h4 a {
        font-size: 18px; }
      #content.type-1 .products-list.list .product-layout .right-block .ratings, #content.type-2 .products-list.list .product-layout .right-block .ratings {
        margin: 20px 0; }
      #content.type-1 .products-list.list .product-layout .right-block .description, #content.type-2 .products-list.list .product-layout .right-block .description {
        margin: 30px 0; }

/*---------- column-left v2 ----------*/
#column-left.type-2 {
  float: left; }

/*---------- Category v3 ----------*/
#content.type-3 .products-list.list {
  margin: 0 -15px; }
  #content.type-3 .products-list.list .product-layout {
    padding-top: 30px; }
    #content.type-3 .products-list.list .product-layout .left-block {
      width: 23.1%; }
    #content.type-3 .products-list.list .product-layout .right-block {
      text-align: right;
      width: 76.9%;
      padding: 30px 30px 0 0; }
      #content.type-3 .products-list.list .product-layout .right-block h4 a {
        font-size: 18px; }
      #content.type-3 .products-list.list .product-layout .right-block .ratings {
        margin: 20px 0; }
      #content.type-3 .products-list.list .product-layout .right-block .description {
        margin: 30px 0; }

@media (max-width: 1199px) {
  .main-container #content .product-filter .short-by-show .text {
    padding-right: 15px; } }
@media (max-width: 991px) {
  .product-layout .product-item-container .left-block .hover .icon-search {
    display: none !important; }

  .filter-row .table_cell {
    border: none;
    display: block; } }
@media (max-width: 767px) {
  .main-container #content .product-filter .short-by-show {
    text-align: center;
    padding-left: 15px; }
    .main-container #content .product-filter .short-by-show .text {
      float: none; }

  .main-container #content .product-filter .short-by-show .short-by {
    padding: 0;
    float: none; }

  #content.type-1 .products-list.grid .product-layout, #content.type-2 .products-list.grid .product-layout {
    width: 33.3333%; }

  .main-container #content .product-filter .short-by-show .box-pagination ul {
    width: 100%;
    text-align: center; }

  #content.type-3 .products-list.grid .product-layout {
    width: 100%; } }
@media (max-width: 479px) {
  #content.type-1 .products-list.grid .product-layout, #content.type-2 .products-list.grid .product-layout {
    width: 100%; } }
.product-view .content-product-left.class-honizol .thumb-video {
  bottom: 190px; }

.left-content-product {
  margin-bottom: 30px; }
  .left-content-product .content-product-left .large-image {
    cursor: pointer;
    display: block;
    padding: 1px;
    overflow: hidden;
    position: relative;
    border: 1px solid #e6e6e6;
    box-sizing: content-box;
    border-radius: 4px; }
    .left-content-product .content-product-left .large-image img {
      background: #fff;
      max-width: 100%; }
    .left-content-product .content-product-left .large-image .label-sale {
      right: 25px; }
  .left-content-product .content-product-left .thumb-video {
    margin-top: -50px;
    bottom: 40px;
    position: absolute;
    z-index: 950;
    font-size: 32px;
    left: 40px;
    z-index: 540; }
  .left-content-product .content-product-left .full_slider, .left-content-product .content-product-left .not_full_slider {
    margin-top: 10px; }
    .left-content-product .content-product-left .full_slider .owl-nav div, .left-content-product .content-product-left .not_full_slider .owl-nav div {
      display: block;
      width: 40px;
      height: 40px;
      position: absolute;
      line-height: 40px;
      text-align: center;
      font-size: 4em;
      background: none;
      color: #ababab;
      padding: 0;
      margin: 0;
      top: 50%;
      transform: translateY(-50%); }
      .left-content-product .content-product-left .full_slider .owl-nav div:hover, .left-content-product .content-product-left .not_full_slider .owl-nav div:hover {
        color: #ffaa00; }
    .left-content-product .content-product-left .full_slider .owl-nav .owl-next, .left-content-product .content-product-left .not_full_slider .owl-nav .owl-next {
      left: -30px; }
      .left-content-product .content-product-left .full_slider .owl-nav .owl-next:before, .left-content-product .content-product-left .not_full_slider .owl-nav .owl-next:before {
        content: '\f104';
        font-family: FontAwesome; }
    .left-content-product .content-product-left .full_slider .owl-nav .owl-prev, .left-content-product .content-product-left .not_full_slider .owl-nav .owl-prev {
      right: -30px; }
      .left-content-product .content-product-left .full_slider .owl-nav .owl-prev:before, .left-content-product .content-product-left .not_full_slider .owl-nav .owl-prev:before {
        content: '\f105';
        font-family: FontAwesome; }
    .left-content-product .content-product-left .full_slider .thumbnail, .left-content-product .content-product-left .not_full_slider .thumbnail {
      border-radius: 0;
      margin-bottom: 0;
      border-radius: 3px;
      margin: 0 1px; }
      .left-content-product .content-product-left .full_slider .thumbnail:hover, .left-content-product .content-product-left .not_full_slider .thumbnail:hover {
        border-color: #ffaa00; }
      .left-content-product .content-product-left .full_slider .thumbnail.active, .left-content-product .content-product-left .not_full_slider .thumbnail.active {
        border-color: #ffaa00; }
    .left-content-product .content-product-left .full_slider .owl2-nav div, .left-content-product .content-product-left .not_full_slider .owl2-nav div {
      width: 27px;
      height: 27px;
      border: 1px solid #dfdfdf;
      border-radius: 0;
      font-size: 0;
      background-color: transparent;
      -webkit-transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      transition: all 0.3s ease-in-out 0s;
      top: 50%;
      margin-top: -12px;
      position: absolute; }
      .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev {
        background: url("../img/theme/icons/next-prev-detail.png") no-repeat;
        background-position: -36px 0px;
        right: -14px;
        float: right;
        background-color: #fff; }
        .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev:hover, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev:hover {
          border-color: #ffaa00;
          background-color: #ffaa00;
          background-position: 0px 0px;
          opacity: 1; }
        .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-prev.disabled, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-prev.disabled {
          display: none; }
      .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next {
        background: url("../img/theme/icons/next-prev-detail.png") no-repeat;
        background-position: -71px 0px;
        left: -14px;
        float: left;
        background-color: #fff; }
        .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next:hover, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next:hover {
          border-color: #ffaa00;
          background-color: #ffaa00;
          background-position: -107px 0px;
          opacity: 1; }
        .left-content-product .content-product-left .full_slider .owl2-nav div.owl2-next.disabled, .left-content-product .content-product-left .not_full_slider .owl2-nav div.owl2-next.disabled {
          display: none; }
  .left-content-product .content-product-right .title-product h1 {
    font-size: 24px;
    margin: 0 0 10px;
    font-weight: 300; }
  .left-content-product .content-product-right .box-review {
    margin: 30px 0; }
    .left-content-product .content-product-right .box-review .ratings {
      display: inline-block;
      margin-left: 20px; }
      .left-content-product .content-product-right .box-review .ratings i {
        color: #222222; }
      .left-content-product .content-product-right .box-review .ratings .gray {
        color: #cccccc; }
    .left-content-product .content-product-right .box-review a {
      color: #444; }
      .left-content-product .content-product-right .box-review a:hover {
        color: #ffaa00; }
  .left-content-product .content-product-right .product-box-desc {
    padding-right: 15px;
    margin-bottom: 30px; }
    .left-content-product .content-product-right .product-box-desc ul {
      padding: 0; }
    .left-content-product .content-product-right .product-box-desc .inner-box-desc {
      position: relative; }
      .left-content-product .content-product-right .product-box-desc .inner-box-desc:before {
        content: "";
        width: 4px;
        background: #ffaa00;
        height: 100%;
        position: absolute;
        right: -20px;
        top: 0; }
    .left-content-product .content-product-right .product-box-desc span {
      font-weight: bold; }
    .left-content-product .content-product-right .product-box-desc .brand a {
      color: #666; }
      .left-content-product .content-product-right .product-box-desc .brand a:hover {
        color: #ffaa00; }
  .left-content-product .content-product-right .product-label {
    overflow: hidden; }
    .left-content-product .content-product-right .product-label .price .price-new {
      font-size: 30px;
      color: #ff5555;
      font-weight: 700; }
    .left-content-product .content-product-right .product-label .price .price-old {
      font-size: 18px;
      font-weight: 300;
      color: #888888;
      text-decoration: line-through; }
    .left-content-product .content-product-right .product-label .stock span {
      font-weight: 700; }
    .left-content-product .content-product-right .product-label .stock .instock {
      color: #3eb94f; }
    .left-content-product .content-product-right .product-label .stock p {
      margin: 25px 0;
      font-weight: 700; }
    .left-content-product .content-product-right .product-label .stock .status-stock {
      color: #00abf0; }
      .left-content-product .content-product-right .product-label .stock .status-stock:before {
        content: "\f046";
        font-family: FontAwesome;
        display: inline-block;
        color: #00abf0;
        margin-left: 5px;
        margin-right: 10px; }
  .left-content-product .content-product-right #product {
    float: right;
    width: 100%;
    margin-top: 10px; }
    .left-content-product .content-product-right #product h3 {
      margin-top: 0; }
    .left-content-product .content-product-right #product .image_option_type label.control-label {
      margin-left: 10px;
      margin-top: 3px; }
    .left-content-product .content-product-right #product .product-options .img-thumbnail {
      width: 22px;
      height: 22px;
      border-radius: 0;
      padding: 1px; }
    .left-content-product .content-product-right #product .box-checkbox label {
      width: 100%; }
    .left-content-product .content-product-right #product .box-date {
      padding-right: 0; }
      .left-content-product .content-product-right #product .box-date label {
        margin-left: 10px;
        width: 80px; }
      .left-content-product .content-product-right #product .box-date input {
        width: 200px; }
      .left-content-product .content-product-right #product .box-date input, .left-content-product .content-product-right #product .box-date button {
        border-radius: 0;
        position: relative;
        z-index: 0;
        margin-right: 0; }
      .left-content-product .content-product-right #product .box-date .input-group-btn {
        float: right; }
      .left-content-product .content-product-right #product .box-date button:hover {
        background: #ffaa00;
        color: #fff; }
  .left-content-product .content-product-right .share {
    display: inline-block;
    overflow: hidden;
    width: 100%;
    padding-top: 35px;
    border-top: 1px solid #f0f0f0; }
    .left-content-product .content-product-right .share ul li {
      list-style: none;
      display: inline-block;
      background: #1d9ffa;
      text-align: center;
      border-radius: 3px;
      margin-right: 5px; }
      .left-content-product .content-product-right .share ul li a {
        display: block;
        height: 27px;
        width: 27px;
        line-height: 27px; }
        .left-content-product .content-product-right .share ul li a i {
          color: #fff; }
    .left-content-product .content-product-right .share ul .twitter {
      background: #456bbe; }
      .left-content-product .content-product-right .share ul .twitter:hover {
        background: #8e9dbd; }
    .left-content-product .content-product-right .share ul .facebook {
      background: #1d9ffa; }
      .left-content-product .content-product-right .share ul .facebook:hover {
        background: #b9def9; }
    .left-content-product .content-product-right .share ul .google {
      background: #e04d3f; }
      .left-content-product .content-product-right .share ul .google:hover {
        background: #e2aba6; }
    .left-content-product .content-product-right .share ul .skype {
      background: #4899d2; }
      .left-content-product .content-product-right .share ul .skype:hover {
        background: #abc4d6; }
    .left-content-product .content-product-right .share p {
      float: right;
      font-size: 14px; }
    .left-content-product .content-product-right .share .share-icon {
      float: left; }
  .left-content-product .content-product-right .box-info-product {
    float: right;
    width: 100%;
    margin-bottom: 35px; }
    .left-content-product .content-product-right .box-info-product .quantity .quantity-control {
      float: right;
      margin: 0;
      position: relative; }
      .left-content-product .content-product-right .box-info-product .quantity .quantity-control label {
        float: right;
        font-weight: 700;
        font-size: 14px;
        margin-top: 8px;
        padding-left: 5px; }
      .left-content-product .content-product-right .box-info-product .quantity .quantity-control input.form-control {
        width: 80px;
        border: 1px solid #dddddd;
        border-radius: 5px;
        z-index: 0;
        float: right;
        height: 40px;
        line-height: 40px;
        box-shadow: none; }
      .left-content-product .content-product-right .box-info-product .quantity .quantity-control span {
        border-radius: 0;
        cursor: pointer;
        line-height: 20px;
        border: 0 none;
        color: #555555;
        background: none;
        padding: 0;
        font-size: 14px;
        border-right: 1px solid #dddddd; }
        .left-content-product .content-product-right .box-info-product .quantity .quantity-control span.product_quantity_up {
          position: absolute;
          left: 0;
          top: 0;
          width: 40px;
          height: 20px; }
          .left-content-product .content-product-right .box-info-product .quantity .quantity-control span.product_quantity_up:after {
            content: "";
            width: 23px;
            height: 1px;
            background: #dddddd;
            margin-right: 7px;
            position: absolute;
            top: 20px;
            left: 8px; }
        .left-content-product .content-product-right .box-info-product .quantity .quantity-control span.product_quantity_down {
          position: absolute;
          left: 0;
          top: 20px;
          width: 40px;
          height: 20px; }
        .left-content-product .content-product-right .box-info-product .quantity .quantity-control span:hover {
          color: #ffaa00 !important; }
    .left-content-product .content-product-right .box-info-product .info-product-right {
      float: left; }
      .left-content-product .content-product-right .box-info-product .info-product-right .cart {
        float: right;
        margin-left: 10px; }
        .left-content-product .content-product-right .box-info-product .info-product-right .cart a {
          font-size: 12px;
          font-weight: bold;
          text-transform: uppercase; }
          .left-content-product .content-product-right .box-info-product .info-product-right .cart a i {
            margin-left: 5px; }
        .left-content-product .content-product-right .box-info-product .info-product-right .cart input {
          background: #ffaa00;
          border-radius: 0;
          color: #fff;
          text-transform: uppercase;
          font-size: 13px;
          border-radius: 4px;
          padding: 12px 16px; }
          .left-content-product .content-product-right .box-info-product .info-product-right .cart input:hover {
            background: #444; }
    .left-content-product .content-product-right .box-info-product .add-to-links {
      display: inline-block;
      overflow: hidden; }
      .left-content-product .content-product-right .box-info-product .add-to-links ul li {
        float: right; }
        .left-content-product .content-product-right .box-info-product .add-to-links ul li a {
          display: inline-block;
          padding: 12px 15px;
          font-size: 14px;
          color: #666;
          border: 1px solid #e6e6e6;
          cursor: pointer;
          border-radius: 4px; }
          .left-content-product .content-product-right .box-info-product .add-to-links ul li a.text {
            display: none; }
          .left-content-product .content-product-right .box-info-product .add-to-links ul li a:hover {
            border-color: #ffaa00;
            color: #ffaa00; }

.content-product-left {
  padding-bottom: 25px; }

.thumb-vertical-outer {
  width: 100px;
  position: relative;
  float: right;
  margin-left: 15px; }
  .thumb-vertical-outer .lSAction {
    display: none !important; }
  .thumb-vertical-outer .thumbnail {
    border-color: #e6e6e6; }
  .thumb-vertical-outer .btn-more {
    display: block;
    height: 40px;
    width: 40px;
    text-align: center;
    position: absolute;
    font-size: 36px;
    cursor: pointer;
    margin-right: -20px;
    font-size: 4em;
    color: #444; }
    .thumb-vertical-outer .btn-more:hover {
      color: #ffaa00; }
    .thumb-vertical-outer .btn-more.prev-thumb {
      top: -40px;
      right: 50%; }
    .thumb-vertical-outer .btn-more.next-thumb {
      bottom: -30px;
      right: 50%; }
  .thumb-vertical-outer .prev {
    margin-bottom: 5px; }
  .thumb-vertical-outer .prev, .thumb-vertical-outer .next {
    cursor: pointer; }
    .thumb-vertical-outer .prev.disabled, .thumb-vertical-outer .next.disabled {
      visibility: hidden; }
    .thumb-vertical-outer .prev .fa, .thumb-vertical-outer .next .fa {
      font-size: 16px;
      display: block;
      text-align: center; }
  .thumb-vertical-outer ul.thumb-vertical {
    padding: 0;
    margin: 0;
    list-style: none; }
    .thumb-vertical-outer ul.thumb-vertical li a {
      padding: 5px;
      border-radius: 3px; }
  .thumb-vertical-outer ul li .thumbnail {
    border-radius: 0;
    padding: 0;
    margin: 0; }
    .thumb-vertical-outer ul li .thumbnail img {
      padding: 0px;
      transition: all 0.3s ease;
      position: relative; }
    .thumb-vertical-outer ul li .thumbnail:hover {
      border-color: #ffaa00; }
    .thumb-vertical-outer ul li .thumbnail.active {
      border-color: #ffaa00; }

/*----------------------PRODUCT TABS ---------------*/
.producttab .tabsslider {
  margin-bottom: 35px;
  padding: 70px 15px 0 15px;
  z-index: 1; }
  .producttab .tabsslider .nav-tabs li {
    margin-left: 10px;
    margin-bottom: 10px; }
    .producttab .tabsslider .nav-tabs li a {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      border-radius: 4px;
      margin: 0px;
      border: 1px solid #ddd;
      padding: 10px 10px;
      position: relative;
      color: #555555; }
    .producttab .tabsslider .nav-tabs li.active a, .producttab .tabsslider .nav-tabs li:hover a {
      background: #0083c1;
      border-color: #0083c1;
      color: #fff;
      transition: none; }
    .producttab .tabsslider .nav-tabs li.active a:after {
      content: "";
      width: 100%;
      height: 1px;
      background: #fff;
      right: 0;
      position: absolute;
      bottom: -1px;
      z-index: 9; }
  .producttab .tabsslider .tab-content {
    padding: 20px;
    display: block;
    margin: 0;
    border: solid 1px #e3e1e1;
    margin-top: -1px;
    border-radius: 4px; }

.producttab .tabsslider.vertical-tabs {
  border: 1px solid #e6e6e6;
  padding: 0;
  border-bottom: 1px solid #ddd; }
  .producttab .tabsslider.vertical-tabs ul.nav-tabs {
    border-bottom: medium none;
    margin: 0;
    min-height: 180px;
    padding: 0; }
    .producttab .tabsslider.vertical-tabs ul.nav-tabs li {
      border-bottom: 1px solid #ddd;
      clear: both;
      position: relative;
      width: 100%;
      display: block; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li a {
        border: 0;
        border-radius: 0;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 16px;
        margin: 0;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        color: #666; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li a:hover {
          background: transparent; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:before {
        content: "";
        width: 5px;
        height: 100%;
        right: 0;
        position: absolute;
        top: 0;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        z-index: 999; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover {
        border-left-color: #ffaa00; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a {
          color: #ffaa00; }
          .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover a:before {
            display: none; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li:hover:before {
          background-color: #ffaa00; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active {
        border-left-color: #ffaa00; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active:before {
          background-color: #ffaa00; }
        .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a {
          background: transparent;
          color: #ffaa00; }
          .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a:before, .producttab .tabsslider.vertical-tabs ul.nav-tabs li.active a:after {
            display: none; }
      .producttab .tabsslider.vertical-tabs ul.nav-tabs li:first-child {
        border-top: 0; }
  .producttab .tabsslider.vertical-tabs .tab-content {
    border: 0;
    border-right: 1px solid #e6e6e6;
    min-height: 180px; }

#product-accordion {
  float: right;
  width: 100%;
  margin-top: 30px;
  border: 1px solid #ddd;
  border-top: 4px solid #ffaa00; }
  #product-accordion .panel {
    padding: 10px 20px 0 20px;
    border-bottom: 0;
    box-shadow: none; }
    #product-accordion .panel .panel-heading {
      border-bottom: 1px dotted #ddd;
      padding: 0 0 10px 0; }
      #product-accordion .panel .panel-heading a {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 18px;
        margin: 0;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
        color: #666;
        width: 100%;
        display: inline-block;
        position: relative; }
        #product-accordion .panel .panel-heading a.title-head.collapsed {
          color: #666; }
          #product-accordion .panel .panel-heading a.title-head.collapsed span.arrow-up:before {
            content: "\f0d8"; }
        #product-accordion .panel .panel-heading a.title-head {
          color: #ffaa00; }
          #product-accordion .panel .panel-heading a.title-head span.arrow-up:before {
            content: "\f0d7"; }
        #product-accordion .panel .panel-heading a span.arrow-up {
          display: block;
          position: absolute;
          left: 0;
          top: -2px;
          cursor: pointer;
          z-index: 10;
          font-size: 0;
          text-align: center; }
          #product-accordion .panel .panel-heading a span.arrow-up:before {
            content: "\f0d8";
            font-family: "FontAwesome";
            display: block;
            vertical-align: middle;
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px; }
      #product-accordion .panel .panel-heading:hover {
        border-bottom-color: #ffaa00; }
        #product-accordion .panel .panel-heading:hover a {
          color: #ffaa00; }
    #product-accordion .panel:first-child .panel-heading {
      padding-top: 10px; }
    #product-accordion .panel:last-child .panel-heading {
      border-bottom: 0; }
  #product-accordion .panel-heading + .panel-collapse > .list-group, #product-accordion .panel-heading + .panel-collapse > .panel-body {
    border-top: 1px dotted #ffaa00;
    margin-top: -1px;
    padding: 0; }

.related-product {
  padding: 40px 0; }
  .related-product h3 {
    font-size: 22px;
    color: #222222; }
  .related-product hr {
    border-top: 1px dashed #dddddd;
    margin: 1px 0; }
  .related-product .related-product-owl {
    padding: 20px 0 0 0; }
    .related-product .related-product-owl .product-layout {
      padding-bottom: 1px;
      margin: 0 1px; }
      .related-product .related-product-owl .product-layout:hover .product-img {
        background: rgba(0, 0, 0, 0.3);
        display: block;
        overflow: hidden; }
      .related-product .related-product-owl .product-layout:hover .hover ul li {
        opacity: 1 !important; }
      .related-product .related-product-owl .product-layout:hover .hover-1 ul li {
        opacity: 1 !important;
        height: 40px !important; }
      .related-product .related-product-owl .product-layout:hover .right-block button {
        background: #ffaa00;
        border-color: #ffaa00; }
        .related-product .related-product-owl .product-layout:hover .right-block button span {
          color: #fff !important; }
      .related-product .related-product-owl .product-layout:hover .right-block .caption h4 a {
        color: #ffaa00; }
      .related-product .related-product-owl .product-layout .product-item-container {
        border: none; }
        .related-product .related-product-owl .product-layout .product-item-container .left-block {
          position: relative;
          border: 1px solid #e5e5e5;
          border-radius: 5px;
          padding: 5px; }
          .related-product .related-product-owl .product-layout .product-item-container .left-block .product-image-container .product-img {
            display: block;
            overflow: hidden; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .product-image-container .product-img img {
              width: 100%; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .product-image-container .product-img:before {
              background-color: inherit;
              position: absolute;
              top: 0;
              bottom: 0;
              right: 0;
              left: 0;
              content: "";
              width: 100%;
              height: 100%;
              transition: all 0.5s; }
          .related-product .related-product-owl .product-layout .product-item-container .left-block .new {
            position: absolute;
            width: 45px;
            height: 45px;
            border-radius: 100px;
            color: #fff;
            line-height: 45px;
            text-align: center;
            top: 10px;
            right: 10px;
            background: #0083c1;
            text-transform: uppercase; }
          .related-product .related-product-owl .product-layout .product-item-container .left-block .sale {
            position: absolute;
            width: 45px;
            height: 45px;
            border-radius: 100px;
            color: #fff;
            line-height: 45px;
            text-align: center;
            background: #ff5555;
            top: 10px;
            left: 10px; }
          .related-product .related-product-owl .product-layout .product-item-container .left-block .hover {
            position: absolute;
            bottom: 0;
            left: 5px; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .hover ul {
              padding: 0; }
              .related-product .related-product-owl .product-layout .product-item-container .left-block .hover ul li {
                list-style: none;
                display: block;
                width: 40px;
                height: 40px;
                background: #fff;
                line-height: 40px;
                text-align: center;
                border-radius: 3px;
                margin: 5px;
                transition-timing-function: ease;
                opacity: 0; }
                .related-product .related-product-owl .product-layout .product-item-container .left-block .hover ul li a {
                  font-size: 1.5em;
                  transition: none;
                  width: 40px;
                  height: 40px;
                  display: block; }
                .related-product .related-product-owl .product-layout .product-item-container .left-block .hover ul li:hover {
                  background: #ffaa00; }
                  .related-product .related-product-owl .product-layout .product-item-container .left-block .hover ul li:hover a {
                    color: #fff; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .hover .icon-heart {
              transition: opacity 2s; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .hover .icon-exchange {
              transition: opacity 1s; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .hover .icon-search {
              transition: opacity 0s; }
          .related-product .related-product-owl .product-layout .product-item-container .left-block .hover-1 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%; }
            .related-product .related-product-owl .product-layout .product-item-container .left-block .hover-1 ul {
              padding: 0; }
              .related-product .related-product-owl .product-layout .product-item-container .left-block .hover-1 ul li {
                list-style: none;
                display: inline-block;
                width: 25%;
                float: left;
                height: 0;
                transition: all .5s;
                background: rgba(0, 0, 0, 0.5);
                line-height: 40px;
                text-align: center;
                transition-timing-function: ease;
                opacity: 0; }
                .related-product .related-product-owl .product-layout .product-item-container .left-block .hover-1 ul li a {
                  font-size: 1.5em;
                  transition: none;
                  height: 40px;
                  display: block;
                  text-align: center;
                  width: 100%;
                  color: #fff; }
                .related-product .related-product-owl .product-layout .product-item-container .left-block .hover-1 ul li:hover a {
                  color: #ffaa00; }
        .related-product .related-product-owl .product-layout .product-item-container .right-block {
          padding-top: 5px; }
          .related-product .related-product-owl .product-layout .product-item-container .right-block h4 {
            margin-bottom: 10px;
            margin-top: 10px; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block h4 a {
              font-size: 14px;
              color: #444444; }
              .related-product .related-product-owl .product-layout .product-item-container .right-block h4 a:hover {
                color: #ffaa00; }
          .related-product .related-product-owl .product-layout .product-item-container .right-block .ratings {
            line-height: 30px; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .ratings span i {
              color: #222222; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .ratings .gray i {
              color: #cccccc; }
          .related-product .related-product-owl .product-layout .product-item-container .right-block .price {
            margin: 10px 0 15px; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .price span {
              font-size: 18px;
              color: #ff5555;
              font-weight: 500; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .price .price-old {
              font-size: 14px;
              text-decoration: line-through;
              color: #777777; }
          .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button {
            border-radius: 5px;
            text-transform: uppercase;
            width: 120px;
            height: 40px; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:hover span {
              color: #fff; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button span {
              color: #777777;
              font-size: 12px; }
            .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:active:focus, .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:active, .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:focus {
              background: #ffaa00;
              outline: none; }
              .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:active:focus span, .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:active span, .related-product .related-product-owl .product-layout .product-item-container .right-block .button-group button:focus span {
                color: #fff; }
      .related-product .related-product-owl .product-layout .right-block {
        text-align: center; }
    .related-product .related-product-owl .owl-nav {
      position: absolute;
      top: -65px;
      left: 0; }
      .related-product .related-product-owl .owl-nav div {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        background: #f2f2f2;
        text-align: center;
        border-radius: 3px; }
        .related-product .related-product-owl .owl-nav div:after {
          font-size: 1.5em; }
        .related-product .related-product-owl .owl-nav div:hover {
          background: #ffaa00; }
          .related-product .related-product-owl .owl-nav div:hover:after {
            color: #fff; }
      .related-product .related-product-owl .owl-nav .owl-prev:after {
        content: "\f105";
        font-family: FontAwesome; }
      .related-product .related-product-owl .owl-nav .owl-next {
        margin-right: 5px; }
        .related-product .related-product-owl .owl-nav .owl-next:after {
          content: "\f104";
          font-family: FontAwesome; }

.latest-product hr {
  border-top: 1px dashed #dddddd;
  margin: 1px 0; }
.latest-product h3 {
  font-weight: 400 !important;
  text-transform: none !important;
  font-size: 22px !important;
  color: #222222; }
.latest-product h4 {
  font-weight: 300;
  text-transform: none;
  color: #222222; }
.latest-product .price .price-new {
  font-size: 18px;
  color: #ff5555;
  font-weight: 500; }
.latest-product .price .price-old {
  font-size: 14px;
  color: #777777;
  font-weight: 500;
  text-decoration: line-through; }
.latest-product .modcontent {
  margin: 20px 0; }
  .latest-product .modcontent .media .media-left {
    padding: 5px;
    border-radius: 3px; }
  .latest-product .modcontent .media:hover .media-left {
    border-color: #ffaa00; }

.header-main.product-v2 {
  margin-bottom: 40px; }

#content.type-3 #column-left {
  padding-top: 0 !important; }

@media (max-width: 991px) {
  .type-2 .left-content-product .content-product-right .box-info-product .info-product-right, .type-3 .left-content-product .content-product-right .box-info-product .info-product-right {
    padding-top: 20px; } }
@media (max-width: 767px) {
  .left-content-product .content-product-right .box-info-product .info-product-right {
    width: 100%;
    padding-top: 20px; }

  .main-container #content {
    width: 100%; }

  .producttab .tabsslider {
    padding-top: 50px; }

  .content-product-left {
    padding-bottom: 30px; } }
#header .header-top .header-top-left .dropdown-toggle:hover {
  color: #ffaa00; }
#header .header-top .header-top-left .languages-block ul li a:hover, #header .header-top .header-top-left .currencies-block ul li a:hover, #header .header-top .header-top-left .currencies-block ul li a:hover {
  color: #ffaa00; }
#header .header-top .header-top-right #TabBlock-1 li a:hover {
  color: #ffaa00; }

/**************************************************************
	Style  Header 1
    **************************************************************/
.type_1#header .header-center .shopping_cart .header-text i {
  color: #ffaa00; }
.type_1#header .header-bottom {
  background: #ffaa00; }
  .type_1#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li.home .menu1 {
    color: #ffaa00; }
  .type_1#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li .sub-menu a:hover {
    color: #ffaa00; }
  .type_1#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu .active a.menu1 {
    color: #ffaa00; }
  .type_1#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li .menu1:hover {
    color: #ffaa00; }

/**************************************************************
	Style  Header 2 
    **************************************************************/
.type_2#header .header-center .shopping_cart .header-text i {
  color: #ffaa00; }
.type_2#header .header-bottom .sidebar-menu .megamenuToogle-wrapper .megamenuToogle-pattern {
  background: #ffaa00; }
.type_2#header .header-bottom .sidebar-menu .vertical-wrapper .megamenu-pattern .megamenu li:hover a.clearfix {
  color: #ffaa00; }
.type_2#header .header-bottom .sidebar-menu .vertical-wrapper .megamenu-pattern .megamenu li.loadmore:hover {
  color: #ffaa00; }
.type_2#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li .menu1:hover {
  background: #ffaa00; }
.type_2#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li .sub-menu .content a:hover {
  color: #ffaa00; }
.type_2#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li.home .menu1 {
  background: #ffaa00; }
.type_2#header .header-bottom .header-bottom-right .megamenu-wrapper .megamenu li.active a.menu1 {
  background: #ffaa00; }
@media (max-width: 991px) {
  .type_2#header .header-bottom {
    background: #ffaa00; } }

/**************************************************************
	Style  Header  3, 4
    **************************************************************/
.type_3 .header-center .megamenu-hori .megamenu li:hover .menu1, .type_4 .header-center .megamenu-hori .megamenu li:hover .menu1 {
  color: #ffaa00; }
.type_3 .header-center .megamenu-hori .megamenu li.home .menu1, .type_4 .header-center .megamenu-hori .megamenu li.home .menu1 {
  color: #ffaa00; }
.type_3 .header-center .megamenu-hori .megamenu li .menu1:after, .type_4 .header-center .megamenu-hori .megamenu li .menu1:after {
  background: #ffaa00; }

/**************************************************************
	Style  Header  5
    **************************************************************/
.type_5#header .header-center .megamenu-hori .so-megamenu li.home a.menu1, .type_5#header .header-center .megamenu-hori .so-megamenu li a:hover strong {
  color: #ffaa00; }

/**************************************************************
    Style  Header  6
    **************************************************************/
.type_6#header .header-center .megamenu-hori ul.megamenu li.home a.menu1 {
  color: #ffaa00; }
.type_6#header .header-center .megamenu-hori ul.megamenu li:hover a.menu1 strong {
  color: #ffaa00; }
.type_6#header .header-center .shopping_cart .btn-shopping-cart .top_cart {
  background: #ffaa00; }

/**************************************************************
    Style  Header  7
    **************************************************************/
.type_7#header .header-center .shopping_cart .btn-shopping-cart .price {
  color: #ffaa00; }
.type_7#header .header-center .shopping_cart .btn-shopping-cart .number-shopping-cart {
  background: #ffaa00; }
.type_7#header .header-bot .megamenu-hori .megamenu-wrapper ul.megamenu li.home a.menu1 {
  color: #ffaa00; }
.type_7#header .header-bot .megamenu-hori .megamenu-wrapper ul.megamenu li.active a.menu1 {
  color: #ffaa00; }
.type_7#header .header-bot .megamenu-hori .megamenu-wrapper ul.megamenu li a.menu1:hover {
  color: #ffaa00; }
.type_7#header .header-bot .megamenu-hori .megamenu-wrapper ul.megamenu li a.menu1:before {
  background: #ffaa00; }

/**************************************************************
    Style  Header  8
    **************************************************************/
.type_8#header .header-top .shopping_cart .btn-shopping-cart .top_cart .shopcart .number-shopping-cart {
  background: #ffaa00; }
.type_8#header .header-top .shopping_cart .btn-shopping-cart .top_cart:hover .my-cart {
  color: #ffaa00; }
.type_8#header .header-mid .megamenu-hori .so-megamenu .megamenu-wrapper ul.megamenu li a.menu1:before {
  background: #ffaa00; }
.type_8#header .header-mid .collapsed-block ul li a:hover {
  color: #ffaa00; }

/**************************************************************
    Style  Header  9
    **************************************************************/
.type_9#header .header-center #sosearchpro button {
  background: #ffaa00; }
.type_9#header .header-center .shopping_cart .btn-shopping-cart .number-shopping-cart {
  background: #ffaa00; }
.type_9#header .header-center .sign-in .link a:hover {
  color: #ffaa00; }
.type_9#header .header-bottom .header-bottom-right a:hover {
  color: #ffaa00; }

/**************************************************************
    Style  Header  10
    **************************************************************/
.type_10#header .header-center .search button {
  background: #ffaa00; }

/**************************************************************
    Style  Header  11
    **************************************************************/
.type_11#header .header-center .shopping_cart .btn-shopping-cart .number-shopping-cart {
  background: #ffaa00; }
.type_11#header .header-center .sign-in .link a:hover {
  color: #ffaa00; }
.type_11#header .header-bottom .header-bottom-left .so-megamenu {
  background: #ffaa00; }

/*******************************************
*	Theme Name: Market
*	Author: Magentech
*	Author URI: http://www.magentech.com
*	Version: 1.0.0
*	Description: This is html5 Sass template 
*******************************************/
.footer-bottom-block .text-footer-bot p a {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 1
	**************************************************************/
.type_footer1 .footer-top h3:after {
  background: #ffaa00; }
.type_footer1 .footer-mid .help .footer-mid-right .btn-sub button {
  background: #ffaa00;
  border-color: #ffaa00; }
.type_footer1 a:hover {
  color: #ffaa00 !important; }
.type_footer1 .footer-mid .help .footer-mid-left h3, .type_footer1 .footer-bottom-block .text-footer-bot p a {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 2 
	**************************************************************/
.type_footer2 a:hover {
  color: #ffaa00 !important; }
.type_footer2 .footer-top h3:after {
  background: #ffaa00; }
.type_footer2 .footer-mid .footer-mid-left h3 {
  color: #ffaa00; }
.type_footer2 .footer-mid .footer-mid-right .btn-sub button {
  background: #ffaa00;
  border-color: #ffaa00; }
.type_footer2 .footer-bottom-block .text-footer-bot p a {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 3
	**************************************************************/
.type_footer3 .footer-top a:hover {
  color: #ffaa00; }
.type_footer3 .footer-mid .newsletter .share-icon ul li a i:hover {
  color: #ffaa00; }
.type_footer3 .footer-mid .newsletter .news-letter .email .subcribe button:hover {
  background: #ffaa00; }

/**************************************************************
	Style  Footer 4
	**************************************************************/
.type_footer4 .footer-b .footer-mid ul li:hover a {
  background: #ffaa00; }
.type_footer4 .footer-b .footer-bot li a:hover {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 5
	**************************************************************/
.type_footer5 .footer-b .footer-bot li a:hover {
  color: #ffaa00; }
.type_footer5 .footer-b .footer-mid ul li:hover a {
  background: #ffaa00; }

/**************************************************************
	Style  Footer 6
	**************************************************************/
.type_footer6 .footer-mid .footer-mid-left .share-icon ul li a:hover {
  background: #ffaa00; }
.type_footer6 .footer-mid .footer-mid-right .block-help .block-help-left h3 {
  color: #ffaa00; }
.type_footer6 .footer-bot .footer-bot-right .copyright p a {
  color: #ffaa00; }
.type_footer6 .footer-mid .footer-mid-right .block-help .block-help-right .btn-sub button {
  background: #ffaa00;
  border-color: #ffaa00; }

/**************************************************************
	Style  Footer 7
	**************************************************************/
.type_footer7 .footer-top li a:hover {
  color: #ffaa00; }
.type_footer7 .footer-mid .social ul li a:hover {
  background: #ffaa00; }
.type_footer7 .footer-bot .text-footer-bot p a {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 8
	**************************************************************/
.type_footer8 .footer-top h3:after {
  background: #ffaa00; }
.type_footer8 .footer-top .collapsed-block .share-icon ul li:hover {
  background: #ffaa00; }
.type_footer8 .footer-mid .footer-mid-right .btn-sub button:hover {
  background: #ffaa00;
  border-color: #ffaa00; }
.type_footer8 .footer-top a:hover {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 9,10
	**************************************************************/
.type_footer9 .footer-top ul li a:hover,
.type_footer9 .footer-mid .footer-mid-link ul li a:hover, .type_footer10 .footer-top ul li a:hover,
.type_footer10 .footer-mid .footer-mid-link ul li a:hover {
  color: #ffaa00; }

/**************************************************************
	Style  Footer 11
	**************************************************************/
.type_footer11 .footer-top .policy-detail .banner-policy .policy:hover .title {
  color: #ffaa00; }
.type_footer11 .footer-mid .support ul li a:hover {
  color: #ffaa00; }
.type_footer11 .footer-mid .your-links ul li a:hover {
  color: #ffaa00; }
.type_footer11 .footer-mid .contact-info .social ul li a:hover {
  background: #ffaa00; }
.type_footer11 .footer-mid .newsletter .box-input button {
  background: #ffaa00; }

.titleh3 {
  padding-bottom: 10px;
  margin-bottom: 30px;
  border-bottom: 1px solid #eaeaea;
  position: relative;
  display: block;
  overflow: hidden;
  margin-top: 0; }
  .titleh3:before {
    content: "";
    display: block;
    position: absolute;
    width: 100px;
    height: 2px;
    background: #ffaa00;
    bottom: -1px;
    right: 0; }
  .titleh3 .h3module {
    font-weight: 700;
    font-size: 18px;
    text-transform: uppercase;
    color: #222222;
    margin: 0;
    display: inline-block;
    float: right; }

.conten-top {
  position: relative;
  padding-bottom: 420px; }
  .conten-top .so-spotlight1 .container-fluid {
    padding: 0; }
    .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots {
      position: absolute;
      bottom: 100px;
      right: 105px; }
      .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots .owl-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #fff;
        margin: 0 5px; }
        .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots .owl-dot.active {
          background: #ffaa00; }
  .conten-top .so-spotlight2 {
    position: absolute;
    bottom: 60px;
    right: 50%;
    transform: translateX(50%);
    z-index: 2; }
    .conten-top .so-spotlight2 h3 {
      color: #222222;
      text-transform: uppercase;
      font-size: 16px;
      font-weight: 700; }
    .conten-top .so-spotlight2 ul {
      padding-right: 20px;
      margin-bottom: 20px; }
      .conten-top .so-spotlight2 ul li {
        list-style: url(../img/theme/icon/list-style.png);
        padding: 5px 0; }
        .conten-top .so-spotlight2 ul li a {
          color: #464646;
          font-size: 14px; }
          .conten-top .so-spotlight2 ul li a:hover {
            color: #ffaa00; }
    .conten-top .so-spotlight2 button {
      background: #ffaa00;
      text-transform: uppercase;
      color: #fff; }

.so-spotlight4 {
  padding: 60px 0; }
  .so-spotlight4 .product-latest .box-product {
    border-top: 1px solid #eaeaea;
    border-right: 1px solid #eaeaea;
    display: block;
    overflow: hidden; }
    .so-spotlight4 .product-latest .box-product .product {
      width: 25%;
      float: right;
      border-left: 1px solid #eaeaea;
      border-bottom: 1px solid #eaeaea; }
      .so-spotlight4 .product-latest .box-product .product.last {
        border-left: none; }
      .so-spotlight4 .product-latest .box-product .product:hover .hover-1 ul li {
        opacity: 1 !important;
        height: 40px !important; }
      .so-spotlight4 .product-latest .box-product .product:hover .top-block h4 a {
        color: #ffaa00; }
      .so-spotlight4 .product-latest .box-product .product .top-block {
        padding: 0 20px 56px;
        position: relative; }
        .so-spotlight4 .product-latest .box-product .product .top-block .ratings {
          padding: 10px 0; }
          .so-spotlight4 .product-latest .box-product .product .top-block .ratings span i {
            color: #f7bc3d; }
          .so-spotlight4 .product-latest .box-product .product .top-block .ratings span.gray i {
            color: #ccc; }
        .so-spotlight4 .product-latest .box-product .product .top-block h4 {
          margin: 0; }
        .so-spotlight4 .product-latest .box-product .product .top-block .price {
          padding-bottom: 14px;
          padding-top: 15px; }
          .so-spotlight4 .product-latest .box-product .product .top-block .price .price-new {
            color: #000;
            font-size: 18px;
            font-weight: 600; }
          .so-spotlight4 .product-latest .box-product .product .top-block .price .price-old {
            font-size: 14px;
            color: #b3b3b3;
            text-decoration: line-through; }
        .so-spotlight4 .product-latest .box-product .product .top-block .new {
          position: absolute;
          width: 45px;
          height: 45px;
          border-radius: 100px;
          color: #fff;
          line-height: 45px;
          text-align: center;
          top: 56px;
          left: 10px;
          background: #8cc34b;
          text-transform: uppercase; }
        .so-spotlight4 .product-latest .box-product .product .top-block .sale {
          position: absolute;
          width: 45px;
          height: 45px;
          border-radius: 100px;
          color: #fff;
          line-height: 45px;
          text-align: center;
          top: 10px;
          left: 10px;
          background: #ff5555; }
      .so-spotlight4 .product-latest .box-product .product .bot-block {
        position: relative;
        padding: 0 15px;
        padding-bottom: 12px; }
        .so-spotlight4 .product-latest .box-product .product .bot-block .product-image-container .product-img img {
          width: 100%;
          padding: 0 15px; }
        .so-spotlight4 .product-latest .box-product .product .bot-block .sale {
          position: absolute;
          width: 45px;
          height: 45px;
          border-radius: 100px;
          color: #fff;
          line-height: 45px;
          text-align: center;
          background: #ff5555;
          top: 10px;
          left: 10px; }
        .so-spotlight4 .product-latest .box-product .product .bot-block .hover-1 {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%; }
          .so-spotlight4 .product-latest .box-product .product .bot-block .hover-1 ul {
            padding: 0; }
            .so-spotlight4 .product-latest .box-product .product .bot-block .hover-1 ul li {
              list-style: none;
              display: inline-block;
              width: 25%;
              float: left;
              height: 0;
              transition: all .5s;
              background: rgba(0, 0, 0, 0.5);
              line-height: 40px;
              text-align: center;
              transition-timing-function: ease;
              opacity: 0; }
              .so-spotlight4 .product-latest .box-product .product .bot-block .hover-1 ul li a {
                font-size: 1.5em;
                transition: none;
                height: 40px;
                display: block;
                text-align: center;
                width: 100%;
                color: #fff; }
              .so-spotlight4 .product-latest .box-product .product .bot-block .hover-1 ul li:hover a {
                color: #ffaa00; }
  .so-spotlight4 .best-sellers .box-product-seller {
    border: 1px solid #ffaa00; }
    .so-spotlight4 .best-sellers .box-product-seller .product-seller {
      border-bottom: 1px solid #eaeaea;
      display: block;
      overflow: hidden;
      padding: 20px; }
      .so-spotlight4 .best-sellers .box-product-seller .product-seller:last-child {
        border: none; }
      .so-spotlight4 .best-sellers .box-product-seller .product-seller:hover .top-block h4 a {
        color: #ffaa00; }
      .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block {
        width: 60%;
        float: right; }
        .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block h4 a {
          font-size: 13px;
          color: #464646; }
        .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block .ratings span {
          color: #ffaa00; }
          .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block .ratings span.gray {
            color: #ccc; }
        .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block .price {
          font-size: 14px; }
          .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block .price .price-new {
            color: #000;
            font-weight: 700; }
          .so-spotlight4 .best-sellers .box-product-seller .product-seller .top-block .price .price-old {
            color: #b3b3b3;
            text-decoration: line-through; }
      .so-spotlight4 .best-sellers .box-product-seller .product-seller .bot-block {
        width: 40%;
        float: left; }

.so-spotlight5 .container-fluid {
  padding: 0; }

.so-spotlight6 {
  padding-top: 30px; }

.so-spotlight7 {
  padding: 50px 0; }
  .so-spotlight7 .title-suggest ul {
    border: none;
    border-bottom: 1px solid #eaeaea;
    position: relative;
    margin-bottom: 30px; }
    .so-spotlight7 .title-suggest ul:before {
      content: "";
      display: block;
      width: 100px;
      height: 2px;
      background: #ffaa00;
      position: absolute;
      bottom: -1px;
      right: 0; }
    .so-spotlight7 .title-suggest ul li {
      margin: 0;
      padding: 10px 0; }
      .so-spotlight7 .title-suggest ul li a {
        border: none;
        font-size: 18px;
        font-weight: 700;
        color: #222222;
        padding: 0 15px;
        border-left: 1px solid #b3b3b3;
        margin: 0;
        border-radius: 0;
        background: none;
        text-transform: uppercase; }
        .so-spotlight7 .title-suggest ul li a:hover {
          color: #ffaa00; }
      .so-spotlight7 .title-suggest ul li.active a {
        border: none;
        border-left: 1px solid #b3b3b3;
        color: #ffaa00; }
      .so-spotlight7 .title-suggest ul li:first-child a {
        padding-right: 0; }
      .so-spotlight7 .title-suggest ul li:last-child a {
        border: none; }
  .so-spotlight7 .product-suggest .tab-content {
    padding: 0;
    margin: 0;
    border: none; }
    .so-spotlight7 .product-suggest .tab-content .box-product {
      border-top: 1px solid #eaeaea;
      border-right: 1px solid #eaeaea;
      display: block;
      overflow: hidden; }
      .so-spotlight7 .product-suggest .tab-content .box-product .product {
        width: 16.66666%;
        float: right;
        border-left: 1px solid #eaeaea;
        border-bottom: 1px solid #eaeaea; }
        .so-spotlight7 .product-suggest .tab-content .box-product .product.last {
          border-left: none; }
        .so-spotlight7 .product-suggest .tab-content .box-product .product:hover .hover-1 ul li {
          opacity: 1 !important;
          height: 40px !important; }
        .so-spotlight7 .product-suggest .tab-content .box-product .product:hover .top-block h4 a {
          color: #ffaa00; }
        .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block {
          padding: 0 20px;
          position: relative; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .ratings {
            padding: 10px 0; }
            .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .ratings span i {
              color: #f7bc3d; }
            .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .ratings span.gray i {
              color: #ccc; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block h4 {
            margin: 0; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .price {
            padding-bottom: 14px;
            padding-top: 15px; }
            .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .price .price-new {
              color: #000;
              font-size: 18px;
              font-weight: 600; }
            .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .price .price-old {
              font-size: 14px;
              color: #b3b3b3;
              text-decoration: line-through; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .new {
            position: absolute;
            width: 45px;
            height: 45px;
            border-radius: 100px;
            color: #fff;
            line-height: 45px;
            text-align: center;
            top: 56px;
            left: 10px;
            background: #8cc34b;
            text-transform: uppercase; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .sale {
            position: absolute;
            width: 45px;
            height: 45px;
            border-radius: 100px;
            color: #fff;
            line-height: 45px;
            text-align: center;
            top: 56px;
            left: 10px;
            background: #ff5555; }
        .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block {
          position: relative;
          padding: 0 15px;
          padding-bottom: 12px; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .product-image-container .product-img img {
            width: 100%;
            padding: 0 15px; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .sale {
            position: absolute;
            width: 45px;
            height: 45px;
            border-radius: 100px;
            color: #fff;
            line-height: 45px;
            text-align: center;
            background: #ff5555;
            top: 10px;
            left: 10px; }
          .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .hover-1 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%; }
            .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .hover-1 ul {
              padding: 0; }
              .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .hover-1 ul li {
                list-style: none;
                display: inline-block;
                width: 25%;
                float: left;
                height: 0;
                transition: all .5s;
                background: rgba(0, 0, 0, 0.5);
                line-height: 40px;
                text-align: center;
                transition-timing-function: ease;
                opacity: 0; }
                .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .hover-1 ul li a {
                  font-size: 1.5em;
                  transition: none;
                  height: 40px;
                  display: block;
                  text-align: center;
                  width: 100%;
                  color: #fff; }
                .so-spotlight7 .product-suggest .tab-content .box-product .product .bot-block .hover-1 ul li:hover a {
                  color: #ffaa00; }

.so-spotlight8 .brand {
  padding: 30px 60px;
  border-top: 1px solid #eaeaea;
  margin-top: 30px; }
  .so-spotlight8 .brand .owl-brand .owl-nav div {
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: block;
    background: #f2f2f2;
    position: absolute;
    text-align: center;
    border-radius: 0; }
    .so-spotlight8 .brand .owl-brand .owl-nav div:after {
      font-size: 1.5em; }
    .so-spotlight8 .brand .owl-brand .owl-nav div:hover {
      background: #ffaa00; }
      .so-spotlight8 .brand .owl-brand .owl-nav div:hover:after {
        color: #fff; }
  .so-spotlight8 .brand .owl-brand .owl-nav .owl-prev:after {
    content: "\f105";
    font-family: FontAwesome; }
  .so-spotlight8 .brand .owl-brand .owl-nav .owl-next:after {
    content: "\f104";
    font-family: FontAwesome; }
  .so-spotlight8 .brand .owl-brand .owl-nav .owl-prev {
    top: 50%;
    right: -60px;
    transform: translateY(-50%); }
  .so-spotlight8 .brand .owl-brand .owl-nav .owl-next {
    top: 50%;
    left: -60px;
    transform: translateY(-50%); }

@media (max-width: 1199px) {
  .product .bot-block .hover-1 ul li {
    width: 33.333% !important; }
    .product .bot-block .hover-1 ul li.icon-search {
      display: none !important; }

  .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots {
    bottom: 60px; }
  .conten-top .so-spotlight2 {
    bottom: 80px; }

  .so-spotlight4 .best-sellers .box-product-seller .product-seller {
    padding: 14px 20px; }

  .so-spotlight7 .product-suggest .tab-content .box-product .product .top-block .price .price-new {
    font-size: 16px; } }
@media (max-width: 991px) {
  .conten-top {
    padding-bottom: 30px; }
    .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots {
      bottom: 30px; }
    .conten-top .so-spotlight2 {
      position: static;
      transform: none; }
      .conten-top .so-spotlight2 .category {
        padding-top: 30px; }
        .conten-top .so-spotlight2 .category .banners {
          display: block; }

  .so-spotlight4 {
    padding-bottom: 0; }
    .so-spotlight4 .best-sellers {
      padding-top: 40px; }
      .so-spotlight4 .best-sellers .box-product-seller {
        overflow: hidden; }
        .so-spotlight4 .best-sellers .box-product-seller .product-seller {
          width: 50%;
          float: right; }

  .so-spotlight5 {
    padding-top: 30px; }
    .so-spotlight5 .banners {
      display: block; }

  .so-spotlight6 .banners {
    display: block; }
    .so-spotlight6 .banners .last {
      padding-top: 30px; }

  .so-spotlight7 .product-suggest .tab-content .box-product .product {
    width: 33.3333%; } }
@media (max-width: 767px) {
  .conten-top .so-spotlight1 .container-fluid .owl-carousel .owl-dots {
    bottom: 0;
    right: 50%;
    transform: translateX(50%); }

  .conten-top .so-spotlight2 h3 {
    font-size: 14px; }
  .conten-top .so-spotlight2 .category {
    width: 50%; }
    .conten-top .so-spotlight2 .category .banners img {
      width: 100%; }

  .so-spotlight4 .product-latest .box-product .product {
    width: 50%; }
  .so-spotlight4 .best-sellers .box-product-seller .product-seller {
    width: 50%; }

  .so-spotlight5 {
    padding-top: 0; }
    .so-spotlight5 .banners {
      display: none; }

  .so-spotlight6 img {
    width: 100%; }
  .so-spotlight6 .watch {
    padding-top: 30px; }

  .so-spotlight7 .title-suggest ul li {
    width: 100%; }
    .so-spotlight7 .title-suggest ul li a {
      border: none;
      padding: 0; }
    .so-spotlight7 .title-suggest ul li.active a {
      border: none; }
  .so-spotlight7 .product-suggest .tab-content .box-product .product {
    width: 50%; } }
@media (max-width: 478px) {
  .conten-top .so-spotlight2 .category {
    width: 100%; }

  .so-spotlight4 .product-latest .box-product .product {
    width: 100%; }
  .so-spotlight4 .best-sellers .box-product-seller .product-seller {
    width: 100%; }

  .so-spotlight7 .product-suggest .tab-content .box-product .product {
    width: 100%; } }

/*# sourceMappingURL=home11.css.map */
					</textarea>
				</div> 


			</div>
		</div>
	</div>
<!-- End Color Scheme
	============================================ -->



<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>

<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>	
	<script type="text/javascript" src="js/themejs/pathLoader.js"></script>	
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
	
	
</body>
</html>