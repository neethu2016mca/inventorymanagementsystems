<?php
include 'dbconnection.php';
$cid=$_GET['id'];
$sql="delete from tbl_cart where cartid='$cid'";
$res1=mysqli_query($con,$sql);
$sql1="update tbl_cart set status=0 where cartid='$cid'";
$res2=mysqli_query($con,$sql1);
?>
<script>
alert(' Deleted ');
window.location="cart.php";
</script>