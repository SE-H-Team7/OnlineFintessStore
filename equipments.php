<!--A Design by W3l+ayouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Equipments Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shape Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});

			if(sessionStorage["uname"]!=undefined){
				$("#username").html("<b>"+sessionStorage["uname"]+"</b>");
			}




		});
		</script>
</head>
<body>
  <div class="header">
	<div class="container">
		<div class="header-top">
      		 <div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
				<li><a href=""> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
				<li><a href=""><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href=""><i class="instagram"> </i> </a></li>
			 </ul>
		    <div class="lang_list">
			  <select tabindex="4" class="dropdown">
				<option value="" class="label" value="">En</option>
				<option value="1">English</option>
				<option value="2">French</option>
				<option value="3">German</option>
			  </select>
   			</div>
			<div class="clearfix"></div>
          </div>

					<div id="username" class="header_left">
				<b>HI</b>
				<div class="clearfix"></div>
					</div>


          <div class="clearfix"></div>
		 </div>
		 <div class="apparel_box">
			<ul class="login">
				<li class="login_text"><a href="login.php">Login</a></li>
				<li class="wish"><a href="checkout.php">Wish List</a></li>
				<div class='clearfix'></div>
		    </ul>
		    <div class="cart_bg">
	   		 	  <ul class="cart">
	   		 		 <a href="checkout.php">
					    <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
					 </a>
				     <h5 class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></h5>
				     <div class="clearfix"> </div>
                  </ul>
	   		 	</div>
			 <ul class="quick_access">
				<li class="view_cart"><a href="checkout.php">View Cart</a></li>
				<li class="check"><a href="checkout.php">Checkout</a></li>
				<div class='clearfix'></div>
		     </ul>
			<div class="search">
			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			   <input type="submit" value="">
			</div>
		  </div>
		</div>
    </div>
	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Menu</h3>
				   	     <ul class="nav">
					   	  	<li><a href="apparel.php">About</a></li>
					   	  	<li><a href="equipments.php">Equipments</a></li>
					   	  	<li><a href="supplements.php">Nutrition Supplements</a></li>
					   	  	<li><a href="contact.php">Contact</a></li>
					   	 </ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Category Options</h3>
			   	    	<ul class="category_nav">
									<?php


									include "db.php";


										$sql = "select * from equipments_categories";
										$run_query = mysqli_query($con,$sql);
										$count = mysqli_num_rows($run_query);
										if($count > 0){
												while ($row = mysqli_fetch_array($run_query)) {
														$eqcat = $row['eqcategory'];
														echo "<li><a href='equipmentscat.php?category=$eqcat'>$eqcat</a></li>";


												}
										}


									?>
					   	</ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Brand Options</h3>
			   	    	<ul class="category_nav">
									<?php


									include "db.php";


										$sql = "select * from equipments_brands";
										$run_query = mysqli_query($con,$sql);
										$count = mysqli_num_rows($run_query);
										if($count > 0){
												while ($row = mysqli_fetch_array($run_query)) {
														$eqbrand = $row['eqbrandname'];
														echo "<li><a href='equipmentsbrands.php?brand=$eqbrand'>$eqbrand</a></li>";


												}
										}


									?>
					   	</ul>
			   	    </div>
			   	    <div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsiv</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
						<a href="#" class="link1">View all tags</a>
				     </div>
				     <div class="side_banner">
					   <div class="banner_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				     </div>
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Apparel&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                        Women / Men
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                   </div>
    		     </div>
    	         <ul class="women_pagenation dc_paginationA dc_paginationA06">
			       <li><a href="#" class="previous">Page:</a></li>
			       <li class="active"><a href="#">1</a></li>
			       <li><a href="#">2</a></li>
		  	     </ul>
                <div class="clearfix"></div>
		        </div>
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page
               </div>
       	   </div>
					<div class="clearfix"></div>
					<ul>




				<!--	  <li class='simpleCart_shelfItem'>
							<a class='cbp-vm-image' href='single.php'>
							<div class='inner_content clearfix'>
								<div class='product_image'>
									<img src='images/pic12.jpg'  class='img-responsive' alt=''/>
									<div class='product_container'>
									   <div class='cart-left'>
										 <p class='title'>Lorem Ipsum 2015</p>
									   </div>
									   <div class='mount item_price price'>$99.00</div>
									   <div class='clearfix'></div>
								     </div>
								  </div>
			                     </div>
		                    </a>
							<div class='cbp-vm-details'>
								Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
							</div>
							<a class='button item_add cbp-vm-icon cbp-vm-add' href='#'>Add to cart</a>
						</li>

-->


						<?php


						include "db.php";
						
							$sql = "select e.eqname as name, ec.eqcategory as category, eb.eqbrandname as brand, e.eqcost as cost from equipments e, equipments_categories ec, equipments_brands eb where e.eqcatid=ec.eqcatid and e.eqbrandid=eb.eqbrandid";
							$run_query = mysqli_query($con,$sql);
							$count = mysqli_num_rows($run_query);
							if($count > 0){
									while ($row = mysqli_fetch_array($run_query)) {
											extract($row);
											$name=strtolower($name);
											$category=strtolower($category);
											$brand=strtolower($brand);
											$f = fopen("SE_final/equipments/$category/$name/$brand/Description.txt", "r");
$txt=fgets($f);
											echo "<li class='simpleCart_shelfItem'>
												<a class='cbp-vm-image' href='equipmentsprod.php?name=$name&brand=$brand&category=$category&cost=$cost'>
												<div class='inner_content clearfix'>
													<div class='product_image'>
														<img src='SE_final/equipments/$category/$name/$brand/images/1.jpg'  style='width:210px;height:250px;' class='img-responsive' alt=''/>
														<div class='product_container'>
														   <div class='cart-left'>
															 <p class='title'>$name</p>
															 <p class='title' style='font-size: small;'>$brand</p>

														   </div>
														   <div class='mount item_price price'>₹$cost</div>
														   <div class='clearfix'></div>
													     </div>
													  </div>
								                     </div>
							                    </a>
												<div class='cbp-vm-details'>
													$txt
												</div>
												<a class='button item_add cbp-vm-icon cbp-vm-add' href='#'>Add to cart</a>
											</li>";
fclose($f);

									}
							}


						?>



					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
			</div>
		 </div>
		</div>
	    </div>
		<div class="container">
		  <div class="brands">
			 <ul class="brand_icons">
				<li><img src='images/icon1.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon2.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon3.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon4.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon5.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon6.jpg' class="img-responsive" alt=""/></li>
				<li class="last"><img src='images/icon7.jpg' class="img-responsive" alt=""/></li>
			 </ul>
		   </div>
	    </div>
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3><i class="insta_icon"> </i> Instagram feed:&nbsp;<span class="small">#Surfhouse</span></h3>
			</div>
	        <ul class="instagram_grid">
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i1.jpg" class="img-responsive"alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i2.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i3.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i4.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i5.jpg" class="img-responsive" alt=""/></a></li>
			  <li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i6.jpg" class="img-responsive" alt=""/></a></li>
			  <div class="clearfix"></div>
			  <div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h4>A Sample Photo Stream</h4>
					<img src="images/i_zoom.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			</ul>
		  </div>
	      <ul class="footer_social">
			<li><a href="#"> <i class="fb"> </i> </a></li>
			<li><a href="#"><i class="tw"> </i> </a></li>
			<li><a href="#"><i class="pin"> </i> </a></li>
			<div class="clearfix"></div>
		   </ul>
	    </div>
	    </div>
        <div class="footer">
			<div class="container">
				<div class="footer-grid">
					<h3>Category</h3>
					<ul class="list1">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">About us</a></li>
					  <li><a href="#">Eshop</a></li>
					  <li><a href="#">Features</a></li>
					  <li><a href="#">New Collections</a></li>
					  <li><a href="#">Blog</a></li>
					  <li><a href="#">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="#">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
				  <div class="footer-grid">
					<h3>Newsletter</h3>
					<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					<div class="search_footer">
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
			          <input type="submit" value="Submit">
			        </div>
			        <img src="images/payment.png" class="img-responsive" alt=""/>
				 </div>
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,.</p>
                    <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<a href="#">info(at)Shape.com</a></p>
                 </div>
				 <div class="clearfix"> </div>
			</div>
		</div>
        <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>Copyright &copy; 2015 Shape. All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			    </div>
        	</div>
        </div>
</body>
</html>
