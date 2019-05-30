<?php
//session_start();
include 'dbconnection.php';
//$id=$_SESSION['loginid'];

$bankname=$_POST["bankname"];
$cardno=$_POST["cardno"];
$cvv=$_POST["cardCVV"];
$month=$_POST["month"];
$year=$_POST["year"];
$cardname=$_POST["cardname"];
$cardtype=$_POST["cardtype"];
$balance=$_POST["balance"];
//$id=$_POST["loginid"];


$sql="insert into tbl_debitcard (bankname,cardno,cvv,month,year,cardname,cardtype,balance) values ('$bankname','$cardno',$cvv,'$month','$year',$cardname','$cardtype',$balance)";
$res=mysqli_query($con,$sql);

?>
<script>
   
    
alert(' Debit Card Added');
window.location="debitcarddetails.php";
    
</script>
