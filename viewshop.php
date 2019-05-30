<?php
include 'adminhdr.php';
include 'dbconnection.php';
// select address
//session_start();
$id = $_SESSION['loginid'];

      $qry5="SELECT spr.loginid,spr.shopid,spr.shopname,spr.licenseno,ad.address,ad.email,ad.contactno,st.statename,ds.districtname FROM tbl_state as st ,tbl_district as ds,tbl_address as ad,tbl_shopreg as spr where spr.stateid=st.stateid and spr.districtid=ds.districtid and spr.addressid=ad.addressid  and spr.status='pending'";
     $ab4 = mysqli_query($con, $qry5);
  if (isset($_POST["approve"])) {
                                
                                $sid = $_POST['stid'];
                                $lid=$_POST['lid'];
                              echo  $q = "update tbl_shopreg set status='approved' where shopid='$sid'";
                               echo $s = "update tbl_login set status='approved' where loginid='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("approved")
                                        window.location.href = "viewshop.php";
                                    </script>
                                    <?php
                                }
                            }
                            if (isset($_POST["delete"])) {
                                
                                
                                $sid = $_POST['stid'];
                                $lid=$_POST['lid'];
                                $q = "update tbl_shopreg set status='rejected' where shopid='$sid'";
                                 echo $s = "update tbl_login set status='rejected' where loginid='$lid'";
                                mysqli_query($con, $q) or die(mysqli_error($con));
                                 mysqli_query($con, $s) or die(mysqli_error($con));
                               // $data = mysqli_query($con, $q) or die(mysqli_error($con));
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <script>
                                        alert("rejected")
                                        window.location.href = "viewshop.php";
                                    </script>
                                    <?php
                                }
                            }
         
?>
<html>
    <head>
        
    </head>
    <body>
        <br>
        <center><h2>SHOPS</h2></center>
        <br>
        
  <center>
   
        <table border="1">
  
    <td >
      <tr>
       
          <th>SHOPNAME</th>
        <th>ADDRESS</th>
         <th>STATE</th>
         <th>DISTRICT</th>
        <th>EMAIL</th>
        <th>CONTACTNO</th>
         <th>LICENSENO</th>
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
        
          <td><center><?php echo $rest1['shopname'];?></center></td>
       <td><center><?php echo $rest1['address'];?></center></td>
        <td><center><?php echo $rest1['statename'];?></center></td>
         <td><center><?php echo $rest1['districtname'];?></center></td>
         <td><center><?php echo $rest1['email'];?></center></td>
        <td><center><?php echo $rest1['contactno'];?></center></td>
         <td><center><?php echo $rest1['licenseno'];?></center></td>
        
        
 <td><input  type="text" hidden="hidden" name="stid" value="<?php echo $rest1['shopid'];?>"></td>
 <td><input  type="text" hidden="hidden" name="lid" value="<?php echo $rest1['loginid'];?>"></td>
 <td><input type="submit" name="approve" class="submit" value="APPROVAL" style="color:green;"></td>
        <td><input type="submit" name="delete" class="submit1" value="REJECT" style="color:red;"></td>
       
      
      
        
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

