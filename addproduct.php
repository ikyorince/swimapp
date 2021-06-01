<?php 
 include 'header.php';
?>


    <!-- logged in user information -->
             <?php $username = $_SESSION['username']; 

            //get userID from username
             getuserid();

            
        ?>





        <form method="post" action="addproduct.php">
           <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Add a new Product</h3>
                                </div>
                            </div>

            <div class="card-body p-3">
               <div class="form-group">

      		  	<div class="input-group mb-2">
      		  	  <label class="input-group-text">Product Name</label>
      		  	  <input class="form-control" type="text" name="productname"?>
      		  	</div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
      		  	  <label class="input-group-text">Product Quantity</label>
      		  	  <input class="form-control" type="text" name="productquantity"?>
      		  	</div>
            </div>
            <div class="form-group">
              <div class="input-group mb-2">
      		  	  <button type="submit" class="btn btn-info btn-block rounded-0 py-2" name="addproduct">Add Product</button>
      		  	</div>
            </div>

		        </div>
        </div>
      </form>
  


<?php 
 include 'footer.php';
?>
    