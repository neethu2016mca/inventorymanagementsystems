<?php
include 'shopheader.php';
//session_start();
$id=$_SESSION['loginid'];
//$gt=$_SESSION['grandtotal'];
if (isset($_POST["submit"])) {
$productid=$_POST["uid"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$qty=$_POST["qty"];
//$quantity=$_GET["quantity"];
$pt=$qty*$price;
$grandtotal=0;
 $grandtotal = $grandtotal + $pt;
// $discount=0.2;
// $disc=$price-($price*$discount);
if($quantity<$qty)
{
    ?>
<script>
alert(' Quantity is Greater Than Available Quantity');
window.location="product1.php?productid=<?php echo $productid ?>";

</script>
<?php
}
if($quantity>=$qty)
{ 
$sql="INSERT INTO `tbl_cart`(`loginid` ,`productid`, `ptypeid`,`qty`,`totalprice`,`status`,`porder`) values('$id','$productid',1,'$qty','$pt',1,1)";
$res=mysqli_query($con,$sql);

 $dq=$quantity-$qty;
 $b="UPDATE tbl_addproduct  SET quantity=$dq WHERE `productid`='$productid'";
 $res3 = mysqli_query($con, $b);
 if($dq==0)
 {
     $b="UPDATE tbl_addproduct  SET quantity=out of stock WHERE `productid`='$productid'";
 }
?>
<script>
alert(' Product Added To Your Cart');
window.location="products11.php";

</script>
<?php
}
}
?>
