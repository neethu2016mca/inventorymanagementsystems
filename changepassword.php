
<?php
include 'shopheader.php';
?>
<?php
if(isset($_POST['submit']))
{
//$id=$_POST["id"];
    //$ps=$_POST["password"];
$password = md5($_POST["password"]);
$newpassword = md5($_POST["newpassword"]);
$cpassword=md5($_POST["cpassword"]);
$sql="select * from tbl_login where  password='$password' and loginid=$id";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$sql1="update  tbl_login set password='$newpassword'  where loginid=$id";
	$result=mysqli_query($con,$sql1);
	if($result==1)
 {
         echo"<script> alert('Password Changed Successfully')</script>";
         
       
 }
}}
	?>
 <div class="checkout-left">
				<div class="address_form_agile" style="width:700px;margin-left:205px;">
				<h4>Change Password</h4>
<!--                                       <p style="color:blue;">Before click, be sure correct address is entered </p>-->
                                        <br>
                                        	<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input  type="password" name="password" placeholder="Current Password" required="">
                                                                                
							 
									</div>
                                                                    <div class="controls">
										<input type="password" name="newpassword" placeholder="New Password" id="password11"  onchange="CheckPassword11();" required="">
                                                                               <label style="display:none ; color:red"  id="pswrd_l11"></label> 
							 
									</div>
                                                                    <div class="controls">
										<input type="password" name="cpassword" placeholder="Confirm Password" id="cnpwd11" onchange="pwdChek11();" required="">
                                                                                
									</div>
                                                                    
                                                                    
                                                                                                                                
<!--                                                                            <input type="text" name="aid" hidden="hidden" value="<?>-->
<!--                                                                            <button type="submit" name="submit"  class="submit check_out">Delivery to this Address</button>-->
                                                                            <td>&nbsp;&nbsp;&nbsp;<button type="submit" name="submit"  class="submit check_out" style="position: relative;width:100;">Submit</button></td></tr>
       
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
                                            <br>
 <br> <br> <br> <br> <br> <br> <br> <br> <br>
 <div class="copy-right" style="width:1500px;margin-left:-505px;">
		<div class="container">
			<p>© 2019 Trendy World. All rights reserved | Design by
				<a href="http://w3layouts.com"> TrendyWorld.</a>
			</p>
		</div>
	</div>

<script>

function CheckPassword11()
        {


            var p = document.getElementById('password11').value;
            var passw = /^[A-Za-z]\w{7,14}$/;
            var error = "";
            var illegalChars = /[\W_]/; // allow only letters and numbers

            if (p == "") {
                $("#pswrd_l11").html('Please provide a password').fadeIn().delay(3000).fadeOut();
                password1.focus();

                return false;
            } else if ((p.length < 7) || (p.value.length > 15) && (p.search(/[a-zA-Z]+/) == -1) || (p.search(/[0-9]+/) == -1)) {
                $("#pswrd_l11").html('Please provide a password with atleast 8 characters and digits').fadeIn().delay(3000).fadeOut();


                password11.value = "";
                password11.focus();
                return false;

            } else if ((p.search(/[a-zA-Z]+/) == -1) || (p.search(/[0-9]+/) == -1)) {
                $("#pswrd_l1").html('Please provide a password with atleast 1 numeric digit').fadeIn().delay(3000).fadeOut();
                password11.value = "";
                password11.focus();

                return false;

            } else {
                p.style.background = 'White';
            }
            return true;
        }

                
		
	
	
		function pwdChek11() 
		{														
			if(document.getElementById("password11").value == document.getElementById("cnpwd11").value)
			{	
				return true;										
			}
			else
			{
				alert("***Password Mismatch***");
                                cnpwd11.value="";
                                cnpwd11.focus();
			  
					return false;
			}
		}
		
    </script>
