<?php
include 'staffhome.php';
include 'dbconnection.php';
$id = $_SESSION['loginid'];
$qry="select * from tbl_address where loginid=$id";
     $a = mysqli_query($con, $qry);
     $rest=mysqli_fetch_array($a);
     $address=$rest['address'];
      $contactno=$rest['contactno'];
      $email=$rest['email'];
    //select staffreg  
$qry1="select * from tbl_staffreg where loginid=$id";
     $ab = mysqli_query($con, $qry1);
     $rest1=mysqli_fetch_array($ab);
     $name=$rest1['name'];
      $gender=$rest1['gender'];
      $dob=$rest1['dob'];
       $stateid=$rest1['stateid'];
      $districtid=$rest1['districtid'];
      $qualificationid=$rest1['qualificationid'];
      $designationid=$rest1['designationid'];
      // select state
      $qry2="select * from tbl_state where stateid=$stateid";
     $ab1 = mysqli_query($con, $qry2);
     $rest2=mysqli_fetch_array($ab1);
     $statename=$rest2['statename'];
     // select district
      $qry3="select * from tbl_district where districtid=$districtid";
     $ab2 = mysqli_query($con, $qry3);
     $rest3=mysqli_fetch_array($ab2);
     $districtname=$rest3['districtname'];
     // select qualification
      $qry4="select * from tbl_qualification where qualificationid=$qualificationid";
     $ab3 = mysqli_query($con, $qry4);
     $rest4=mysqli_fetch_array($ab3);
     $qualification=$rest4['qualification'];
     // select designation
      $qry5="select * from tbl_designation where designationid=$designationid";
     $ab4 = mysqli_query($con, $qry5);
     $rest5=mysqli_fetch_array($ab4);
     $designation=$rest5['designation'];
?>
<html>
    <head></head>
   <body >
       
        <br>
  <center>
<!-- <div style="background-image:url(bg8.jpg);size: cover;">-->
   <form action="#" method="post" >
       
       <img src="image/profile1.jpg" width="100">
  <div style="background-image:url(bg8.jpg); width: 600px;">
           <table  width="400" height="500" style="margin-left:200px;">
      <tr>
          <th>Name</th>
      <th><?php echo $name;?></th>
  </tr>
  <tr>
       <th>Gender</th>
      <th><?php echo $gender;?></th>
  </tr>
  <tr>
       <th>DOB</th>
      <th><?php echo $dob;?></th>
  </tr>
  <tr>
           
      <th>Address</th>
      <th><?php echo $address;?></th>
  </tr>
    <tr>
        <tr>
       <th>State</th>
      <th><?php echo $statename;?></th>
  </tr>   
  <tr>
       <th>District</th>
      <th><?php echo $districtname;?></th>
  </tr>
      <th>Email</th>
      <th><?php echo $email;?></th>
  </tr>
  <tr>
           
      <th>Contactno</th>
      <th><?php echo $contactno;?></th>
  </tr>

  <tr>
           
      <th>Qualification</th>
      <th><?php echo $qualification;?></th>

        
        </tr>
        <tr>
       <th>Designation</th>
      <th><?php echo $designation;?></th>
  </tr>
  <br>
  
  <center>
<!--      <tr>
      <a href="updatestaffprofile.php">UPDATE</a></tr>-->
      </center>
        </table>
 </form>
      </div>
      </div>
        </body>
        </html>
        <?php
        include 'component/footer.php';
        ?>



