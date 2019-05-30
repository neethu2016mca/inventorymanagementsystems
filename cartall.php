<?php
session_start();
include 'dbconnection.php';
if (isset($_POST['submits'])) {
    //$productid=$_GET['uid'];
    
$id=$_SESSION['loginid'];
$query1="SELECT * FROM tbl_cart where loginid=$id";
$ex1= mysqli_query($con,$query1);
while ($row= mysqli_fetch_assoc($ex1))
        {
    $productid=$row['productid'];
    $cartid=$row['cartid'] ;
    $ab=select * from 
    $name = $row[''];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city= $_POST['city'];
    $landmark= $_POST['landmark'];
    $email= $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $addtype = $_POST['addtype'];
   
   
   $sql = "INSERT INTO `tbl_deliveryadd`(`loginid`,`cartid`,`name`,`address`,`stateid`,`districtid`,`city`,`landmark`,`email`,`mobileno`,`addtype`) VALUES('$id','$cartid','$name','$address','$state','$district','$city','$landmark','$email','$mobileno','$addtype')";
      $result = mysqli_query($con, $sql);  
}
}
                                                    ?>  

