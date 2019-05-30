<?php
include 'shopheader.php';
$id=$_SESSION['loginid'];
//$productid=$_SESSION['uid'];
//if (isset($_GET['submit'])) {
//    //echo $productid=$_GET['uid'];
//}
echo  $gtotal = $_GET['g'];
if (isset($_POST['submit'])) {
    $gtotal = $_GET['g'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city= $_POST['city'];
    $landmark= $_POST['landmark'];
    $email= $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $addtype = $_POST['addtype'];
    
  
   

 $query1="SELECT * FROM tbl_cart where loginid=$id and status=1";
$ex1= mysqli_query($con,$query1);
if(mysqli_num_rows($ex1)>0)
{
while($row= mysqli_fetch_array($ex1))
{
   
        
        
    //print_r($row);
    $cartid=$row['cartid'];
   // return;

      $sql = "INSERT INTO `tbl_order`(`loginid`,`cartid`,`name`,`address`,`stateid`,`districtid`,`city`,`landmark`,`email`,`mobileno`,`addtype`,`grandtotal`) VALUES('$id','$cartid','$name','$address','$state','$district','$city','$landmark','$email','$mobileno','$addtype','$gtotal')";
    
      $result = mysqli_query($con, $sql);
   
   if ($result) {
     echo"<script> alert(' Delivery Address is added Successful'); window.location.href='payment.php?gt=$gtotal';</script>";
      $aq = "update tbl_cart set porder='0' where loginid='$id'";
    mysqli_query($con, $aq) or die(mysqli_error($con));
   }
//       
 }  
}
}

  ?>  
                                  <div class="checkout-left">
				<div class="address_form_agile" style="width:700px;margin-left:205px;">
					<h4>Add a Delivery Address</h4>
                                        <p style="color:blue;">Before click, be sure correct address is entered </p>
                                        <br>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Full Name" id="name" onchange="nm(); "required="">
                                                                                
							 <label style="display:none ; color:red"  id="name_l"></label>
									</div>
                                                                    <div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="address" id="address11"  onchange="validateAddress11();" placeholder="Address" required="">
									</div>
                                                                        <div class="first-row">
									<div class="controls">
                                                                            <select  name="state" id="state" required="">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "ims");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                           echo $sql = "Select stateid, statename from tbl_state where status=1";
                                            $result = mysqli_query($con, $sql);
                                            echo "<option value =><------Select State------></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $statename = $row['statename'];
                                                $stateid = $row['stateid'];
                                                ?>
                                                <script>alert($stateid);</script>
                                                <?php
                                                echo "<option value='$stateid'>$statename</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
									</div>
                                                                            <div class="first-row">
									<div class="controls">
										<select  name="district" id="district" required/> 
                                    <option value=""><-----Select district-----></option>
                                </select>
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Town/City" name="city"  id="address11"  onchange="validateAddress11();" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Landmark" name="landmark"  id="address11"  onchange="validateAddress11();" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Email" name="email" id="email" onchange="emil(); "required="">
									</div><label style="display:none ; color:red"  id="email_l"></label>

                                                                                <div class="controls">
									
                                                                                    <input type="text" placeholder="Mobile No" name="mobileno" id="mobiles" onchange="mob(); "required="">
									<label style="display:none ; color:red"  id="mobiles_l"></label>

 
                                                                                </div>
									<div class="controls">
                                                                            <select name="addtype" required="">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										
										</select>
									</div>
									</div>
								</div>
                                                                        <?php $grandtotal = $_GET['g']; ?>
                                                                            <input type="text" name="uid" hidden="hidden" value="<?php echo $productid;?>">
                                                                           
<!--                                                                            <input type="text" name="aid" hidden="hidden" value="<?php echo $grandtotal;?>">-->
<!--                                                                            <button type="submit" name="submit"  class="submit check_out">Delivery to this Address</button>-->
                                                                            <td>&nbsp;&nbsp;&nbsp;<button type="submit" name="submit"  class="submit check_out" style="position: relative;width:100;">Delivery to this Address</button></td></tr>
       
							</div>
						</div>
					</form>
<!--					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>-->
				</div>
				<div class="clearfix"> </div>
			</div>
                                            
                                            
                                             <script>
                                                  function validateAddress11(){
    var TCode = document.getElementById('address11').value;

    if( /[^a-zA-Z0-9\-\/]/.test( TCode ) ) {
        alert('Input is not alphanumeric');
        return false;
    }

    return true;     
}
function emil()
        {

            var email = document.getElementById('email');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                email.value = "";

                $("#email_l").html('Please provide a valid email address').fadeIn().delay(3000).fadeOut();
                email.focus();
                // document.getElementById("email").addEventListener("focusin",checkemail());
                return false;
            }
        }
        function mob()
        {
            var val = document.getElementById('mobiles').value;
            if (!val.match(/^[6-9][0-9]{9,9}$/))
            {
                $("#mobiles_l").html('Only Numbers are allowed and must contain 10 number..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('mobiles').value = "";
                mobiles.focus();
                return false;
            }
            return true;
        }
        function lic()
        {
            var val = document.getElementById('license').value;
            if (!val.match(/^[0-9][0-9]{6,6}$/))
            {
                $("#license_l").html('Only Numbers are allowed and must contain 7 number..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('license').value = "";
                license.focus();
                return false;
            }
            return true;
        }
//        function username()
//        {
//            var val = document.getElementById('usr').value;
//            if (!val.match(/^[A-Za-z][A-Za-z" "]{3,}$/))
//            {
//                $("#uname_l").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
//                document.getElementById('usr').value = "";
//                usr.focus();
//
//                return true;
//            }
//        }

        function nm()
        {
            var val = document.getElementById('name').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
            {
                $("#name_l").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('name').value = "";
                name.focus();

                return true;
            }
        }
                   </script>

        <script>
            $("#state").on("change", function () {
                $("#district").html("");
                $state = $("#state").val();
                $.ajax({
                    url: 'data/data.php',
                    method: 'POST',
                    data: {'state': $state, "status": "1"},
                    success: function (data)
                    {
                
                        $("#district").html(data);
                    }
                });
            });
        



        </script>
        <br>
 <br> <br> <br> <br> <br> <br> <br> <br> <br>
 <div class="copy-right" style="width:1500px;margin-left:-505px;">
		<div class="container">
			<p>© 2019 Trendy World. All rights reserved | Design by
				<a href="http://w3layouts.com"> TrendyWorld.</a>
			</p>
		</div>
	</div>
                                               
