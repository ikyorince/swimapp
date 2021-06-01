<?php 
  include 'header.php';
?>


<form method="POST" action="sellproduct.php">

           <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Select Product to edit</h3>
                                </div>
                            </div>

            <div class="card-body p-3">



            </div>

<?Php
  $userid = $_SESSION['user_id'];
  $query = "SELECT * FROM products where id = '$userid'";
  $result = mysqli_query($db, $query);

  ?>
    <div class="form-group">
    <div class="input-group mb-2">
          
          <label class="input-group-text">Product Name </label>
           <select class="form-control" name='selprod' id='selprod'>

            <option value=""> </option>
          <?php

        while($row = mysqli_fetch_array($result)){
                          $id = $row['productId'];
                          $name = $row['productname']; 
                          echo '<option value="'.$id.'">'.$name.'</option>';
                      
                     
                      }


            ?>
              </select>

    </div>
   </div>

        <div class="form-group">
              <div class="input-group mb-2">
                <button type="submit" class="btn btn-info btn-block rounded-0 py-2" name="select_productsell">Edit this product</button>
              </div>
            </div>
  <?php

 if (!empty($_SESSION['edpd'])) {
      # code...
    
  ?>



</form>

<?php
  $productId = $_SESSION['edpd'];
  $query = "SELECT * FROM products where productId = $productId  LIMIT 1";
  $result = mysqli_query($db, $query);
  $formdata = mysqli_fetch_assoc($result);
  $productname = $formdata['productname'];
  $productQuantity = $formdata['CurrentQuantity'];
?>

<form method="POST" action="sellproduct.php">
             <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <p><i class="fa fa-envelope"></i> now editing <?php echo $productname; ?></p>
                                </div>
                            </div>

            <div class="card-body p-3">
              
                <?php
                echo "<label  class='input-group-text' for='productname'>Product name:</label>";
                echo "  <input type='text' readonly class='form-control-plaintext'  id='productname' name='productname' value='" . $productname . "'><br><br> ";
                echo "  <label class='input-group-text' for='productQuantity'> How many are we selling </label>";
                echo "<input class='form-control' type='text' id='productQuantity' name='productQuantity'><br><br>";
                  ?>

                  <div class="form-group">
                        <div class="input-group mb-2">
                          <button type="submit" class="btn btn-info btn-block rounded-0 py-2" name="sell_product">Edit this product</button>
                        </div>
                      </div>



            </div>



</form> 


<?php 
}
?>


<?php 
 include 'footer.php';
?>
    