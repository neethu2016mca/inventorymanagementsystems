<?php
include 'shopheader.php' ;
 $id=$_SESSION['loginid'];
if (isset($_POST["Submit"])) {
//$id=$_GET["loginid"];
$bankname=$_POST["bankname"];
$cardno=$_POST["cardno"];
$cvv=$_POST["cardCVV"];
$month=$_POST["month"];
$year=$_POST["year"];
$cardname=$_POST["cardname"];
$cardtype=$_POST["cardtype"];
$amount=$_POST["amount"];



$sql="insert into tbl_debitcard (loginid,bankname,cardno,cvv,month,year,cardname,cardtype,amount) values ('$id','$bankname','$cardno','$cvv','$month','$year','$cardname','$cardtype','$amount')";
$res=mysqli_query($con,$sql);
}
?>
<!--<script>   
alert(' Debit Card Added');
window.location="debitcarddetails.php";    
</script>-->
<!DOCTYPE html>
<html lang="zxx">
   <head>
   
      <title>Trendy World</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">
               <ul>
                  <!-- <li>
                     <span class="fas fa-phone-volume"></span>
                     <p>+(000)123 4565 32</p>
                  </li>
                  <li>
                     <span class="fas fa-envelope"></span>
                     <p><a href="mailto:info@example.com">info@example1.com</a></p>
                  </li> -->
                  <li>
                  </li>
               </ul>
            </div>
         </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                   
            </div>
         </nav>
      </div>
	  </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
	 
     <section class="banner-bottom py-lg-5 py-3">
        
				     <div class="tab4">
                                 <div class="row pay_info">
                                    <div class="col-md-6 tab-grid"><br>
									
                                        <img src="staffh/staff/imgs/debitcards.jpg" height="450" width="450"> 
                                    </div>
                                    <div class="col-md-6">
                                        
									
									<form action="#" method="post" name="form_add" id="form1" class="cc-form" style="width:600px;" >
                                      
                                        
                                          <div class="clearfix">
										  <div class="form-group form-group-cc-number">
                                                <label>Select Bank</label>
                                                <select class="form-control" name="bankname" required>
                                      <option value="Federal Bank Credit Card">Federal Bank Credit Card</option>
                                      <option value="Federal Bank Debit Card">Federal Bank Debit Card</option>
<!--                                      <option value="OCC">Other Bank Credit Card</option>-->
                                      <option value="Other Bank Debit Card">Other Bank Debit Card</option>
                                    </select><span class="cc-card-icon"></span>
                                             </div>
                                              <div class="form-group form-group-cc-number">
                                                <label>Select Card Type</label>
                                                <select class="form-control" name="cardtype" required>
                                      <option value="Master Card">Master Card</option>
                                      <option value="Visa Card">Visa Card</option>
                                      <option value="Rupay Card">Rupay Card</option>
                                     
                                    </select><span class="cc-card-icon"></span>
                                             </div>
                                              <div class="form-group form-group-cc-name">
                                                <label>Card Holder Name</label>
                                                <input class="form-control"  placeholder="Enter Holder Name" type="text" name="cardname" onKeyUp="this.value = this.value.toUpperCase();" required>
                                             </div>
                                             <div class="form-group form-group-cc-number">
                                                <label>Card Number</label>
                                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" name="cardno" type="text" required><span class="cc-card-icon"></span>
												<input class="form-control" value="<?php echo $id;?>" type="hidden" name="id">
                                             </div>
                                             <div class="form-group form-group-cc-cvc">
                                                <label>CVV</label>
                                                <input class="form-control" placeholder="xxx" type="password" name="cardCVV" required>
                                             </div>
                                          </div>
                                          <div class="clearfix">
                                             <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group" >
<!--                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>-->
                                    <div class="col-xs-6 col-md-6">
                                        <select name="month" class="form-control" style="width:200px;">
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
                                    </select>
                                  </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <div class="col-xs-6 col-md-6" style="margin-right:-700px;" >
                                  <?php
                                    $earliest_year = 2040;
                                    ?>
                                    <select name="year" class="form-control">
                                    <?Php
                                     foreach (range(date('Y'), $earliest_year) as $x)
                                      { ?>
                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                  <?php } ?>
                                    </select>
                                  </div>
                                           <div class="form-group form-group-cc-date" style="width:600px;">
                                                <label>Amount</label>
                                                
                                 
												 <input class="form-control" type="text" name="amount" required placeholder="Enter Balance">
                                             </div>
                                          </div>
					                      <input class="btn btn-primary submit" name="Submit" type="submit" onClick="return valid()" value="Add">
                                          </div>
                            </div>
                                  
                                       </form>
                                        <br>
<!--									   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-two">
               Debit Card Info
               </button>-->
			     <div class="modal fade" id="exampleModal-two" tabindex="-1" role="dialog" aria-labelledby="exampleModal-twoLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModal-twoLabel" style="color:#0000FF">Debit Card Details</h5>
						   <?php
						   $insert="select * from tbl_debitcard where loginid=$id";
						   $res=mysqli_query($con,$insert);
						  
						   ?>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                           </button>
                        </div>
						<?php
						$no=mysqli_num_rows($res);
						if($no==0)
						{
						?>
						<b style="color:#FF0000"> &nbsp; No Debit Card Information</b>
						<?php
						}
						else
						{
						 while($roww=mysqli_fetch_array($res))
						   {
						   ?>
                        <div class="modal-body">
                          Bank: <b style="color:#00CC33"><?php echo $roww[1];?></b><br>
						   Card Number: <b style="color:#00CC33"><?php echo $roww[2];?></b><br>
						    Cvv Number: <b style="color:#00CC33"><?php echo $roww[3];?></b><br>
							 Holder Number: <b style="color:#00CC33"><?php echo $roww[4];?></b><br>
							  Balance: <b style="color:#00CC33"><?php echo $roww[6];?></b><br>
							  <a href="deletedebit.php?id=<?php echo $roww[0];?>"><b style="color:#FF0000">Delete</b></a><br>
                        </div>
						<?php
						}}
						?>
                        <div class="modal-footer">
                        </div>
                     </div>
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

                                    </div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </div>
              
                        </div>
                     </div>
                   
                  </div>
                  <div class="clearfix"> </div>
                  <!--/tabs-->
                  <div class="responsive_tabs">
                     <div id="horizontalTab">
                       
                      
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <br> <br> <br> <br> <br> <br> <br> <br>
      <div class="copy-right">
		<div class="container">
			<p>© 2019 Trendy World. All rights reserved | Design by
				<a href="http://w3layouts.com"> TrendyWorld.</a>
			</p>
		</div>
	</div>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--jQuery-->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="js/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="js/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="js/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>

