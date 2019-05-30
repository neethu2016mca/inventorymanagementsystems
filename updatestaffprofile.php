<?php
	include 'dbconnection.php';
        include 'staffhome.php';
	//session_start();
	if(!(isset($_SESSION['loginid'])))
	{
		header('location:index.php');
	}
	$loginid=$_SESSION['loginid'];
	?>
 <<?php
if(isset($_POST["submit"]))
{
    $q="update staff_registration set name='".$_POST["name"]."',gender='".$_POST["gender"]."',dob='".$_POST["dob"]."',address='".$_POST["address"]."',state='".$_POST["state"]."',district='".$_POST["district"]."',email='".$_POST["email"]."',contactno='".$_POST["contactno"]."',qualification='".$_POST["qualification"]."',designation='".$_POST["designation"]."', where loginid='$loginid' ";
    
//    $data=mysqli_query($con,$q) or die( mysqli_error($con));
	if(mysqli_affected_rows($con)>0)
	{
		?>
		<script>
			alert("UPDATED");
				window.location.href="viewstaffprofile.php";
			</script>
		<?php
	}
}
?>
                        <html>
                            <head></head>
                            <body>
                                
                                
                                <center><h2>PROFILE</h2></center>
    
 <table class="tg" width="500" border="1">
  
  
      
		
		

							    
        <?php
        $query=mysqli_query($con,"SELECT name,gender,dob,address,state,district,email,contactno,qualification,designation FROM tbl_staffreg where loginid='$loginid'");
		
        while($row=mysqli_fetch_array($query))
	 {
          ?>
		  
	<form action="#" method="post">	

	<tr>
           
      <th>Name</th>
      <th><input value="<?php echo $row['name']; ?>"id="fname" name="name" onchange="nm();" required</th>
  </tr>
  
  
  <tr>
           
      <th>Gender</th>
      <th><input
              value="<?php echo $row['gender'];?>"id="gender" name="gender" required</th>
      <input type="radio" name="gender" value="male"id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                                
                                <input type="radio" name="gender" value="female"id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
  </tr>
  <tr>
           
      <th>DOB</th>
      <th><input value="<?php echo $row['dob'];?>"id="dob" name="dob" value="01/01/1890" required</th>
  </tr>
  <tr>
           
      <th>Address</th>
      <th><input value="<?php echo $row['address'];?>"name="address" id="address" onChange="add();" </th>
  </tr>
 
  <tr>
           
      <th>State</th>
      <th><input value="<?php echo $row['state'];?>" name="state" required=""</th>
  </tr>
  <tr>
           
      <th>District</th>
      <th><input value="<?php echo $row['district'];?>"name="district" id="district" onChange="district();"</th>
  </tr>
  
  <tr>
           
      <th>Email</th>
      <th><input value="<?php echo $row['email'];?>" name="email" id="email" onchange="emil();" required=""</th>
  </tr>
  <tr>
           
      <th>Contact No</th>
      <th><input value="<?php echo $row['contactno'];?>" name="contactnono" required=""</th>
  </tr>
  <tr>
           
      <th>Qualification</th>
      <th><input value="<?php echo $row['qualification'];?>" name="qualification" required=""</th>
  </tr>
  <tr>
           
      <th>Designation</th>
      <th><input value="<?php echo $row['designation'];?>" name="designation" required=""</th>
  </tr>

  <br>
  
  <center>
      <tr>
      <button type="submit" name="submit">Update now</button>
      </center>
        
 </form>
  		
		<?php
        }
        ?>

</table>
		</div>


                            </body>
 </html>
                   

