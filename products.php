/*Dalee Kumawat
  RegNo : 2017IS17
*/
<?php
$username = "root";
$password = "";
$dbname = "shoesdb";
$dbhost = "localhost";
$connection = mysqli_connect( $dbhost, $username, $password, $dbname );
if (mysqli_connect_errno()) {
	die("Database connection failed: " . mysqli_connect_error() . mysqli_connect_errno());
}


if (! isset($_POST["submit"]))  {
	header("Location: register.html");
}
$loginUser =  $_POST["usernameLogin"];
$loginPass = $_POST["passwordLogin"];
$query = "SELECT * FROM register WHERE (username = '" . $loginUser . "' AND password = '" . $loginPass . "')";
$results = mysqli_query( $connection, $query );
if (! mysqli_fetch_assoc($results)) {
	header("Location: register.html");
}
?>









<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Product</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	    <style type="text/css">
<!--
.style1 {font-size: 24px}
-->
        </style>
</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
			  <div class="span4"><strong><a href="index.html" class="logo pull-left style1 style1 style1">Online Shoes Shopping</a></strong></div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
				  <nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
								    <li><a href="./products.html">Heels</a></li>									
									<li><a href="./products.html">Sports</a></li>
									<li><a href="./products.html">flats</a></li>										
							  </ul>
						  </li>															
						  <li><a href="./products.html">Men</a>
						        <ul>
									<li><a href="./products.html">Dress Shoes</a></li>									
									<li><a href="./products.html">Sports</a></li>
									<li><a href="./products.html">flats</a></li>									
								</ul>
						  </li>			
						  <li><a href="./products.html">kids</a>
							 <ul>									
									<li><a href="./products.html">School shoes</a></li>
									<li><a href="./products.html">Casual Shoes</a></li>
									<li><a href="./products.html">flats</a></li>
							 </ul>
						  </li>							
							
						</ul>
				  </nav>
			  </div>
			</section>	
			<section class="header_text sub">
			  <h4><span>New products</span></h4>
		  </section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/9.jpg"></a><br/>
									<a href="product_detail.html" class="title">Metro</a><br/>
									<a href="#" class="category">Dress Shoes</a>
									<p class="price">5999 Rs</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
									<a href="product_detail.html" class="title">Adidas</a><br/>
									<a href="#" class="category">Casual Shoes</a>
									<p class="price">3999 Rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
									<a href="product_detail.html" class="title">Bata</a><br/>
									<a href="#" class="category">Casual Shoes</a>
									<p class="price">4999 Rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
									<a href="product_detail.html" class="title">Liberty</a><br/>
									<a href="#" class="category">Casual Shoes</a>
									<p class="price">999 Rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
									<a href="product_detail.html" class="title">Woodland</a><br/>
									<a href="#" class="category">Sport Shoes</a>
									<p class="price">2999 Rs</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
									<a href="product_detail.html" class="title">Mochi</a><br/>
									<a href="#" class="category">Dress Shoes</a>
									<p class="price">4999 Rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
									<a href="product_detail.html" class="title">Liberty</a><br/>
									<a href="#" class="category">Casual Shoes</a>
									<p class="price">1999 Rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
									<a href="product_detail.html" class="title">Bata</a><br/>
									<a href="#" class="category">Boots</a>
									<p class="price">1899 rs</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
									<a href="product_detail.html" class="title">Puma</a><br/>
									<a href="#" class="category">Sport shoes</a>
									<p class="price">1799 Rs</p>
								</div>
							</li>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Casual Shoes </a></li>
								<li class="active"><a href="products.html">Dress Shoes </a></li>
								<li><a href="products.html">School Shoes </a></li>
								<li><a href="products.html">Sports Shoes </a></li>
								<li><a href="products.html">Boots</a><a href="products.html">Sneakers</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Puma</a></li>
								<li><a href="products.html">Reebok</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Advertisement</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="https://teja2690.github.io/hometutor/index.html"><img alt="" src="themes/images/ladies/10.png"></a><br/>
													<a href="https://teja2690.github.io/hometutor/index.html" class="title">LEARN & ACHIEVE</a><br/>
													<a href="#" class="category">WE HELP STUDENTS AND TUTORS</a>
													<p class="price">TO FIND EACH OTHER</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="https://shop.adidas.co.in/#c/men-shoes/Pag-60/No-0/0"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="https://shop.adidas.co.in/#c/men-shoes/Pag-60/No-0/0" class="title">Adidas</a><br/>
													<a href="#" class="category">Casual Shoes</a>
													<p class="price">3999 Rs</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Liberty</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Bata</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Puma</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Help</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<h2 class="animation animated-item-1" style="font-size:30px; line-height:1.0;"><span>Online Shoes Shopping</span></h2>
						<p> We stand for top quality products. </p>
						<p class="logo"><br/>
						  <span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						  </span>				  </p>
				  </div>					
				</div>	
			</section>
			<section id="copyright"></section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>