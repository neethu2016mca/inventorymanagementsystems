<?php
include 'shopheader.php';
include "dbconnection.php";
if (isset($_POST['submit'])) {
$category = $_POST['category'];

//$query = "SELECT * FROM tbl_addproduct where category='$category'";
//echo $query="SELECT * FROM tbl_addproduct as ap,tbl_image as i where ap.imageid=i.imageid and ap.category='$category' or ap.productname='$category' ";
$query = "SELECT * FROM tbl_addproduct as ap JOIN tbl_image as i ON ap.imageid=i.imageid WHERE ap.category='$category' OR ap.productname='$category'";

$query1 = mysqli_query($con, $query);

?>

       <html>
    <head></head>
    <body>
                  <div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">CLOTHES</h3>
                                                
                                                <?php while ($row= mysqli_fetch_assoc($query1)){
                                                    ?>  
                                                <form method="post" action="product1.php" >
                                                <div class="col-md-3 product-men" style="margin-top:80px;">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
                                                                    <img src="staffh/staff/imgs/<?php echo $row["image1"]; ?>" alt="" height="130" width="130">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
                                                                                    <input type="hidden" value="<?php echo $row["productid"]; ?>" name="productid">
<!--                                                                                    <input type="submit" value="Quick View" class="link-product-add-cart"  name="submits" >-->
<!--                                                                                    <a href="product1.php" class="link-product-add-cart">Quick View</a>-->
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href=""><?php echo $row["productname"]; ?></a>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $row["price"]; ?></span>
<!--										<del>850.00</del>-->
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                                            <form action="" method="post">
											
												<fieldset>
												
                                                                                             
<!--                                                                                               <input type="submit" name="submit" value="Add to cart"  class="button" />-->
                                                                                                <input type="hidden" value="<?php echo $row["productid"]; ?>" name="productid">
                                                                                                <input type="submit" value="Quick View" class="link-product-add-cart"  name="submits" >
											</fieldset>
                                                                                    
										
                                                                                    
										</form>
									</div>	

								</div>
							</div>
					
                                                  
						<div class="clearfix"></div>
					</div>
                                                   
                                             </form>  
                                       
<?php }} ?>	
                                                
        </div> 
            </div>
                                          
                                </div>                                       
    </body>
</html>   
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'component/footer.php';
?>