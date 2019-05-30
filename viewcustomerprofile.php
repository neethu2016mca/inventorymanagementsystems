<?php
include 'customerheader.php';
include 'dbconnection.php';
$id = $_SESSION['loginid'];
$qry="select * from tbl_address where loginid=$id";
     $a = mysqli_query($con, $qry);
     
     $rest=mysqli_fetch_array($a);
     $address=$rest['address'];
      $contactno=$rest['contactno'];
      $email=$rest['email'];
    //select custreg  
$qry1="select * from tbl_custreg where loginid=$id";
     $ab = mysqli_query($con, $qry1);
     $rest1=mysqli_fetch_array($ab);
     $name=$rest1['name'];
      $stateid=$rest1['stateid'];
      $districtid=$rest1['districtid'];
      
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
    
?>
<html>
    <head>
        <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
    </head>
    <body>
        <center><h2>PROFILE</h2></center>
        <br>
  <center>
   <form action="#" method="post">
       
 
           <table id="customers" width="400" height="500" style="margin-left:200px;">
       <tr>
       <td>Name</td>
      <td><?php echo $name;?></td>
  </tr>
  
  <tr>
           
      <td>Address</td>
      <td><?php echo $address;?></td>
  </tr>
    <tr>
        
       <td>State</td>
      <td><?php echo $statename;?></td>
  </tr>   
  <tr>
       <td>District</td>
      <td><?php echo $districtname;?></td>
  </tr>
      <td>Email</td>
      <td><?php echo $email;?></td>
  </tr>
  <tr>
           
      <td>Contactno</td>
      <td><?php echo $contactno;?></td>
  </tr>

  
        </table>
       <td><a href="customereditprofile.php?id=<?php echo $rest[1]?>" style="color:#0000FF">Edit</a></td>
 </form>

        </body>
        </html>
        <br>
        <br>
        <?php
        include 'component/footer.php';
        ?>






