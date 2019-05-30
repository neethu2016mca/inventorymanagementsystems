<?php
include 'shopheader.php';


$id=$_SESSION['loginid'];
//echo $query1="SELECT * FROM tbl_cart as c,tbl_addproduct as ap,tbl_damageproducts as d ,tbl_image as i,tbl_ptype where d.productid=c.productid and c.productid=ap.productid and ap.imageid=i.imageid and c.ptypeid=tbl_ptype.ptype.id and c.loginid=$id and c.status=1 and c.porder=1";
//$ex1= mysqli_query($con,$query1);
//return;
if (isset($_POST["delete"])) {
    $productid = $_POST['pid'];
    $qty = $_POST['qty'];
    $cid = $_POST['ctid'];
     $u="select quantity from tbl_addproduct where `productid`='$productid'";
 $r1=mysqli_query($con,$u);
 $row=mysqli_fetch_array($r1);
  $quantity=$row['quantity'];
 $dq=$quantity+$qty;
  $b="UPDATE tbl_addproduct  SET quantity='$dq' WHERE `productid`='$productid'";
 $res3 = mysqli_query($con, $b);
    
    $q = "update tbl_cart set status='0' where cartid='$cid'";
    mysqli_query($con, $q) or die(mysqli_error($con));
    if (mysqli_affected_rows($con) > 0) {
        
   ?>
<?php
if (isset($_POST["submits"])) {
    $cid = $_POST['ctid'];
    $aq = "update tbl_cart set porder='0' where cartid='$cid'";
    mysqli_query($con, $aq) or die(mysqli_error($con));
    if (mysqli_fetch_rows($con) > 0) {
   
?>
    <script>
         alert("rejected")
         window.location.href = "cart.php";
     </script>
     <?php
              }
               }
    }
}
         
?>
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="Products11.php">Products</a>
						<i>|</i>
					</li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Cart
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Your shopping cart </h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
                                                                <th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
                                                                <th>Total Price</th>
                                                                <th>Remove</th>
                                                                
                                                                <th>Buy Now</th>
                                                                
							</tr>
                                                        
						</thead>
                                                
						<tbody>
							<tr class="rem1">
                                                            <?php 
                                                            $g=0;
                                                            
                                                             $sql1="select * from tbl_cart where porder=1 and status=1";
$esql1=mysqli_query($con,$sql1);
while($efet1=mysqli_fetch_array($esql1))
{
 $pid=$efet1['ptypeid'];
$proid=$efet1['productid'];
if($pid==1)
{
$sql2="SELECT * FROM tbl_addproduct as ap join tbl_image as i on ap.imageid=i.imageid  where ap.productid='$proid'";
$exe=mysqli_query($con,$sql2);
}
else
{
 $sql2="SELECT * FROM tbl_damageproducts as d  join tbl_image as i on d.imageid=i.imageid  where d.productid='$proid'";
$exe=mysqli_query($con,$sql2);
}

                                                            $row= mysqli_fetch_assoc($exe);
                                                                $proid=$row['productid'];
                                                                $sql3="select * from tbl_cart where productid='$proid' and loginid='$id'";
                                                                
                                                          $esql3= mysqli_query($con, $sql3);
                                                          while($rows= mysqli_fetch_array($esql3)){
                                                    ?>  
                                                            
                                                <form action="#" method="post">
								<tr class="rem1">
								
								<td class="invert-image">
									<a href="">
										<img src="staffh/staff/imgs/<?php echo $row["image1"]; ?>" alt=" " class="img-responsive">
									</a>
								</td>
                                                                <td class="invert"><?php echo $row["productname"]; ?></td>
                                                                <td class="invert"><?php echo $rows["qty"]; ?></td>
								<td class="invert"><?php echo $row["price"]; ?></td>	
								<td class="invert"><?php echo $rows["totalprice"]; ?></td>
                                                                <input  type="text" hidden="hidden" name="qty" value="<?php echo $rows['qty'];?>">
								<input  type="text" hidden="hidden" name="ctid" value="<?php echo $rows['cartid'];?>">
                                                                <input  type="text" hidden="hidden" name="pid" value="<?php echo $row['productid'];?>">
                                                               <td><input type="submit" name="delete" onclick="return checkDelete()" class="submit" style="color:black;background-color:magenta;padding:14px 20px;" value="Delete"></td>
                                                               <td><a href="deliveryadd.php?uid=<?php echo $row['cartid']?>" style="color:black;background-color:magenta;padding:14px 20px;" value="Place Order" name="submit">Place Order</a></td></tr>
                                                        </form>

                                               
							<?php
                                                         $g=$g+$rows["totalprice"]; 
                                                            }
                                                            }  
                                                            ?> 
                                            
						</tbody>
                                                
					</table>
                                    <br>
                                   <table>
                                      
                                       <tr><br><td><h4 style="color:Green;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>Grand Total:&nbsp;<?php echo $g ?></h4></td>
                                       <input  type="text" hidden="hidden" name="ctid" value="<?php echo $row['cartid'];?>">
                                       <td>&nbsp;&nbsp;&nbsp;<a href="deliveryadds.php?g=<?php echo $g?>" style="color:black;background-color:magenta;padding:14px 20px;height:30px;width:10px; " value="Buy Now" name="submits">Place Order</a></td></tr>
                                       
                                                </table>
                                      
				</div>
                                
                                   
                                                               
			</div>
			
		</div>
	</div>
        <script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>

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
<!--	<script>
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
	</script>-->
	<!-- //cart-js -->

	<!--quantity-->
	
	<!--//quantity-->

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
	<?php
        include 'component/footer.php';
        ?>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Do you want to delete this product?');
}
</script>