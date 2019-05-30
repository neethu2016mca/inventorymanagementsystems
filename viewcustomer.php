<?php
include 'adminhdr.php';
include 'dbconnection.php';
// select address
//session_start();
$id = $_SESSION['loginid'];

      $qry5="SELECT cr.loginid,cr.customerid,cr.name,ad.address,ad.email,ad.contactno,st.statename,ds.districtname FROM tbl_state as st ,tbl_district as ds,tbl_address as ad,tbl_custreg as cr where cr.stateid=st.stateid and cr.districtid=ds.districtid and cr.addressid=ad.addressid  and cr.status='pending'";
     $ab4 = mysqli_query($con, $qry5);
  if (isset($_POST["approve"])) {
                                
                                $sid = $_POST['stid'];
                                $lid=$_POST['lid'];
                              echo  $q = "update tbl_custreg set status='approved' where customerid='$sid'";
                               echo $s = "update tbl_login set status='approved' where loginid='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("approved")
                                        window.location.href = "viewcustomer.php";
                                    </script>
                                    <?php
                                }
                            }
                            if (isset($_POST["delete"])) {
                                
                                
                                $sid = $_POST['stid'];
                                $lid=$_POST['lid'];
                                $q = "update tbl_custreg set status='rejected' where customerid='$sid'";
                                 echo $s = "update tbl_login set status='rejected' where loginid='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                               // $data = mysqli_query($con, $q) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("rejected")
                                        window.location.href = "viewcustomer.php";
                                    </script>
                                    <?php
                                }
                            }
         
?>
<html>
    <head>
        <style>
.submit {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.submit1 {
  background-color:red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    </head>
    <body>
        <br>
        <center><h2>CUSTOMERS</h2></center>
        <br>
        
  <center>
   
        <table border="1">
  
    <td >
      <tr>
       
          <th>NAME</th>
        <th>ADDRESS</th>
         <th>STATE</th>
         <th>DISTRICT</th>
        <th>EMAIL</th>
        <th>CONTACTNO</th>
        
          <th></th>
          <th></th>
          <th>APPROVE</th>
          <th>REJECT</th>
        </tr>
        <?php
        
        while ($rest1=mysqli_fetch_array($ab4)  )
	 {
         
        
          ?>
 <form action="#" method="post">
      <tr>
        
          <td><center><?php echo $rest1['name'];?></center></td>
       <td><center><?php echo $rest1['address'];?></center></td>
        <td><center><?php echo $rest1['statename'];?></center></td>
         <td><center><?php echo $rest1['districtname'];?></center></td>
         <td><center><?php echo $rest1['email'];?></center></td>
        <td><center><?php echo $rest1['contactno'];?></center></td>
        
        
 <td><input  type="text" hidden="hidden" name="stid" value="<?php echo $rest1['customerid'];?>"></td>
 <td><input  type="text" hidden="hidden" name="lid" value="<?php echo $rest1['loginid'];?>"></td>
        <td><input type="submit" name="approve" class="submit" value="APPROVAL"></td>
        <td><input type="submit" name="delete" class="submit1" value="REJECT"></td>
       
      
      
        
      </tr></form>
  <?php
                            
}
                                                 ?> 

      
      
</table>
        

          
          <script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


 <?php
        include 'component/footer.php';
        ?>

