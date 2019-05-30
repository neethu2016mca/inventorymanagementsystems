<?php
session_start();
include 'dbconnection.php';
  $gtotal = $_GET['gt'];

$id=$_SESSION['loginid'];
//echo $cardno=$_GET["cardno"];
//$cvv=$_GET["cardCVV"];

	
 //echo $productid=$_GET["productid"];

if(isset($_POST['submit'])){
 $select4="select cardno,cvv,month,year from tbl_debitcard where loginid='$id'";
$res4=mysqli_query($con,$select4);
$row4=mysqli_fetch_array($res4);
 $cardno=$_POST['cardno'];
  $cvv=$_POST['cvv'];
//$month=$_POST['month'];
//$year=$_POST['year'];

$select="select * from tbl_debitcard where cardno='$cardno' and cvv='$cvv' and loginid='$id' and amount >$gtotal ";
$res7=mysqli_query($con,$select);
$no=mysqli_num_rows($res7);
 $no;
//return;
if($no=="0")
{
?>

<script>
   
    
alert(' Invalid Card Number Or Low Balance');
//window.location="payment.php";
    
</script>
<?php
}
else
{
$row7=mysqli_fetch_array($res7);
$b=$row7['amount'];
$new=$b-$gtotal;


$abc="update tbl_debitcard set amount=$new where cardno='$cardno'";
$resu=mysqli_query($con,$abc);

?>
<script>
   
    
alert(' Payment Successfull');
window.location="products11.php";
    
</script>
<?php
}
}
?>
<!--<script>
alert("Payment successfully inserted");
//window.location="products11.php";
</script>-->
        
        
			


<html lang="zxx">

<head>
	<title>Trendy World</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Offer Zone Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>T</span>rendy
						<span>W</span>orld
						<img src="images/logo2.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 9032459867
					</li>
                                        <li>
						<span class="fa fa-phone" aria-hidden="true"></span> 9043138906
					</li>
                                        <li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
					</li>
                                        <li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 222 221
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="search.php" method="post">
						<input name="category" type="search" placeholder="How can we help you today?" required="">
                                                <input type="submit" name="submit" value="search" class="btn btn-default" aria-label="Left Align">
                                                <span class="fa fa-search" aria-hidden="true"> </span>
<!--						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>-->
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                            <form action="cart.php" method="post" class="last">
<!--							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">-->
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
		<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>Please Select Your Location</h3>
			<select class="list_of_cities">
				
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
                            <form action="search.php" method="post">
					<select id="agileinfo-nav_search" name="search" required="">
						<option value="">All Categories</option>
						<option value="Men">Men</option>
						<option value="Women">Women</option>
                                                <option value="Kids">Kids</option>
						
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">About Us</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="viewshopprofile.php">View Profile</a>
								</li>
                                                                <li class="">
									<a class="nav-stylehead" href="products11.php">View Products</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.html">Contact</a>
								</li>
                                                                <li class="">
									<a class="nav-stylehead" href="logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
        <br>
        <br>
        
        
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Payment</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Payment
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right" >
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab" >
					<ul class="resp-tabs-list hor_1" >
                                            <li>Credit/Debit</li>
<!--						<li>Credit/Debit</li>
						<li>Net Banking</li>
						<li>Paypal Account</li>-->
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
<!--								<h5>COD</h5>
								<div class="checkbox">
									<div class="check_box_one cashon_delivery">
										<label class="anim">
											<input type="checkbox" class="checkbox">
											<span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
										</label>
									</div>

								</div>
							</div>-->
						</div>
						<div>
							<form action="#" method="post" class="creditly-card-form agileinfo_form">
								<div class="creditly-wrapper wthree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Name on Card</label>
                                                                                                <input class="billing-address-name form-control" type="text" name="cardname" placeholder="Card Name" onKeyUp="this.value = this.value.toUpperCase();" required="">
											</div>
											<div class="w3_agileits_card_number_grids">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Card Number</label>
														<input class="number credit-card-number form-control" type="text" name="cardno" inputmode="numeric" autocomplete="cc-number"
                                                                                                                       autocompletetype="cc-number" x-autocompletetype="cc-number" required="">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<div class="controls">
														<label class="control-label">CVV</label>
                                                                                                                <input class="security-code form-control"  inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;" required="">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Card Type</label>
                                                                                                <select name="cardtype" required="" style="color:black;">
											<option value="Master Card">Master Card</option>
                                      <option value="Visa Card">Visa Card</option>
                                      <option value="Rupay Card">Rupay Card</option>
<!--											<option>Commercial</option>-->

										
										</select>				</div>
                                                  
                                                                                    
                                                                                    <div class="controls" style="margin-left:300px;margin-top:-35px;">
												<label class="control-label">Expiry Date</label>
                                                                                                <select name="month" required="" style="color:black;">
                                                                                                    <option value="Jan" >Jan</option>
                                      <option value="Feb" >Feb</option>
                                      <option value="Mar" >Mar</option>
                                      <option value="Apr" >Apr</option>
                                      <option value="May" >May</option>
                                      <option value="Jun" >Jun</option>
                                      <option value="Jul" >Jul</option>
                                      <option value="Aug" >Aug</option>
                                      <option value="Sept" >Sept</option>
                                      <option value="Oct" >Oct</option>
                                      <option value="Nov" >Nov</option>
											                                      <option value="Dec" >Dec</option>


										
										</select>				</div>
                                                                                    <div class="controls" style="margin-left:470px;margin-top:-30px;">
                                                                                        
                                                                                        <?php
                                    $earliest_year = 2040;
                                    ?>
                                     <select name="year" required="" style="color:black;">
                                    <?Php
                                     foreach (range(date('Y'), $earliest_year) as $x)
                                      { ?>
                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                  <?php } ?>
                                    </select>
                                                                                    </div>
                                                                                <div class="controls" style="margin-left:600px;margin-top:-15px;">
												<label class="control-label">Bank name</label>
                                                                                                <select name="bankname" required="" style="color:black;">
											option value="Federal Bank Credit Card">Federal Bank Credit Card</option>
                                      <option value="Federal Bank Debit Card">Federal Bank Debit Card</option>
                                      <option value="Other Bank Credit Card">Other Bank Credit Card</option>
                                      <option value="Other Bank Debit Card">Other Bank Debit Card</option>
<!--											<option>Commercial</option>-->

										
										</select>	
                                                                                </div>
                                                                                 <?php $gtotal = $_GET['gt'];?>
                                                                                    <div class="controls">
												<label class="control-label">Amount</label>
                                                                                                <input class="billing-address-name form-control" type="text" name="amount" value=" <?php echo $gtotal ?>" readonly="" placeholder="">
											</div>
                                                                               
										</div>
                                                                            <input type="text" name="uid" hidden="hidden" value="<?php echo $productid;?>">
										<input type="submit" value="SUBMIT" name="submit" onClick="return valid()">
										
											<span>Make a payment </span>
										</button>
									</div>
								</div>
							</form>

						</div>
						
						

					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->

	<!-- newsletter -->
	<div class="footer-top">
		
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	
	<!-- //footer -->
	<!-- copyright -->
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
	<div class="copy-right">
		<div class="container">
			<p>© 2019 Trendy World. All rights reserved | Design by
				<a href="http://w3layouts.com"> TrendyWorld.</a>
			</p>
		</div>
	</div>
        <script type="text/javascript">
function valid()
{
if(document.form_add.banktype.value=="0")//textbox name=name
{
alert("Select Bank Type");
document.form_add.banktype.focus();
return false;
    }
	if(document.form_add.cardnumber.value=="")//textbox name=name
{
alert("Enter Card Number");
document.form_add.cardnumber.focus();
return false;
    }
	if((isNaN(document.form_add.cardnumber.value)))
{
alert("Only numbers are allowed");
document.form_add.cardnumber.focus();
return false;
}
var phone=document.form_add.cardnumber.value.length;
var max=16;
if((phone<max) || (phone>max))
{
alert("Please Enter  16 digit card Number");

document.form_add.cardnumber.focus();
return false;
}

	if(document.form_add.cardCVV.value=="")//textbox name=name
{
alert("Enter Card CVV");
document.form_add.cardCVV.focus();
return false;
    }
	if((isNaN(document.form_add.cardCVV.value)))
{
alert("Only numbers are allowed");
document.form_add.cardCVV.focus();
return false;
}
var vv=document.form_add.cardCVV.value.length;
var max=3;
if((vv<max) || (vv>max))
{
alert("Please Enter  3 digit cvv Number");

document.form_add.cardCVV.focus();
return false;
}
if(document.form_add.holdername.value=="")//textbox name=name
{
alert("Enter holdername");
document.form_add.holdername.focus();
return false;
    }
	if(!(isNaN(document.form_add.holdername.value)))
{
alert("Only albhabets are allowed");
document.form_add.holdername.focus();
return false;
}
if(document.form_add.balance.value=="")//textbox name=name
{
alert("Enter balance");
document.form_add.balance.focus();
return false;
    }
	if((isNaN(document.form_add.balance.value)))
{
alert("Only numbers are allowed");
document.form_add.balance.focus();
return false;
}

}
</script>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
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

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- easy-responsive-tabs -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<script src="js/easyResponsiveTabs.js"></script>

	<script>
		$(document).ready(function () {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- //easy-responsive-tabs -->

	<!-- credit-card -->
	<script src="js/creditly.js"></script>
	<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />

	<script>
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>