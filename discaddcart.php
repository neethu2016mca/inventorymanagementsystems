<?php
include 'shopheader.php';
//session_start();
$id=$_SESSION['loginid'];
//$gt=$_SESSION['grandtotal'];
if (isset($_POST["submit"])) {
$productid=$_POST["productid"];

 $quantity=$_POST["quantity"];
$price=$_POST["price"];
$qty=$_POST["qty"];
//$quantity=$_GET["quantity"];

   $pt=$price*20/100;
   $po=$price-$pt;
  $ptt=$po*$qty;

$grandtotal=0;
 $grandtotal = $grandtotal + $ptt;
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
$sql="INSERT INTO `tbl_cart`(`loginid` ,`productid`,`ptypeid`, `qty`,`totalprice`,`status`,`porder`) values('$id','$productid',2,'$qty','$ptt',1,1)";
$res=mysqli_query($con,$sql);
//return;
 $dq=$quantity-$qty;
 $b="UPDATE tbl_damageproducts SET quantity=$dq WHERE `productid`='$productid'";
 $res3 = mysqli_query($con, $b);
 
?>
<script>
alert(' Product Added To Your Cart');
window.location="products11.php";

</script>
<?php
}
}
?>

