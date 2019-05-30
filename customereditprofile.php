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
    //select shopreg  
$qry1="select * from tbl_custreg where loginid=$id";
     $ab = mysqli_query($con, $qry1);
     $rest1=mysqli_fetch_array($ab);
     $name=$rest1['name'];
       $stateid=$rest1['stateid'];
      $districtid=$rest1['districtid'];
     // $licenseno=$rest1['licenseno'];
      // select state
//      $qry2="select * from tbl_state where stateid=$stateid";
//     $ab1 = mysqli_query($con, $qry2);
//     $rest2=mysqli_fetch_array($ab1);
//     $statename=$rest2['statename'];
     // select district
//      $qry3="select * from tbl_district where districtid=$districtid";
//     $ab2 = mysqli_query($con, $qry3);
//     $rest3=mysqli_fetch_array($ab2);
//     $districtname=$rest3['districtname'];
 if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $address=$_POST['address'];
   //$statename = $_POST['statename'];
   //$districtname = $_POST['districtname'];
   $email= $_POST['email'];
   $contactno = $_POST['contactno'];
   
   $sql="UPDATE `tbl_custreg` SET `name`='$name' WHERE loginid='$id'";
     mysqli_query($con,$sql);
     $sql1="UPDATE `tbl_address` SET `address`='$address',`email`='$email',`contactno`='$contactno' WHERE loginid='$id'";
     mysqli_query($con,$sql1);
 }   
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
       <td>Shopname</td>
      <td><input type="text" name="name" id="name1" onchange="nm1();"  value="<?php echo $name;?>"</td>
      <label style="display:none ; color:red"  id="name_l1"></label>
  </tr>
 
  <tr>
           
      <td>Address</td>
      <td><input type="text" name="address" id="address1" onchange="validateAddress1();"  value="<?php echo $address;?>"</td>
  </tr>
    
<!--        <tr>
       <td>State</t>
      <td><input type="text" name="statename" value=""</td>
  </tr>   
  <tr>
       <td>District</td>
      <td><input type="text" name="districtname" value="</td>
  </tr>-->
      <td>Email</td>
      <td><input type="text" name="email" id="email1" onchange="em();"  value="<?php echo $email;?>"</td>
      <label style="display:none ; color:red"  id="email_2"></label>
  </tr>
  <tr>
           
      <td>Contactno</td>
      <td><input type="text" name="contactno" id="mobiles1" onchange="mob1();" value="<?php echo $contactno;?>"</td>
      <label style="display:none ; color:red"  id="mobiles_l1"></label>
  </tr>

  
       
        </table>
       <input type="submit" name="submit" value="update">
 </form>

        

<script>
    function validateAddress1(){
    var TCode = document.getElementById('address1').value;

    if( /[^a-zA-Z0-9\-\/]/.test( TCode ) ) {
        alert('Input is not alphanumeric');
        return false;
    }

    return true;     
}
function em()
        {

            var email = document.getElementById('email1');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email1.value)) {
                email1.value = "";

                $("#email_2").html('Please provide a valid email address').fadeIn().delay(3000).fadeOut();
                email1.focus();
                // document.getElementById("email").addEventListener("focusin",checkemail());
                return false;
            }
        }
        function mob1()
        {
            var val = document.getElementById('mobiles1').value;
            if (!val.match(/^[6-9][0-9]{9,9}$/))
            {
                $("#mobiles_l1").html('Only Numbers are allowed and must contain 10 number..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('mobiles1').value = "";
                mobiles1.focus();
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
        function username1()
        {
            var val = document.getElementById('usr1').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{3,}$/))
            {
                $("#uname_l1").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('usr1').value = "";
                usr1.focus();

                return true;
            }
        }

        function nm1()
        {
            var val = document.getElementById('name1').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
            {
                $("#name_l1").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('name1').value = "";
                name1.focus();

                return true;
            }
        }
                function add1()
        {

            var x = document.getElementById('address1').value;
            if ((x === null) || (x.length <= 1))
            {

                $("#address_l1").html('Enter Valid address..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('address1').value = "";
                address1.focus();

                return true;
            }
        }

        function userName()
        {
            var x = document.getElementById('uname').value;
            if ((uname == "") || (uname.length <= 1))
            {

                alert("Invalid Name");
                uname.value = "";
                uname.focus();
                return false;
            }
            var fnam = /^[a-zA-Z ]{4,25}$/;
            if (document.myform.uname.value.search(uname) == -1)
            {
                alert("Invalid Character Entered");
                uname.value = "";
                uname.focus();

                return false;
            }
            if ((x > 25))
            {

                alert("Name Must Not Exceed 24 Characters");
                uname.value = "";
                uname.focus();

                return false;
            }
        }
</script>
</body>
        </html>
        <br>
        <br>
        <?php
        include 'component/footer.php';
        ?>