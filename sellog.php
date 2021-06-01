<?php 
include 'header.php';

?>

<div class="content">



 

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : 
              $username = $_SESSION['username']; 
            //get userID from username
             getuserid();

            
                      ?>

                      <?php
                      
                      $userid = $_SESSION['user_id'];
                      $showTableQuery = "select * from sales where userid = '$userid'";
                      $productFetch = mysqli_query($db, $showTableQuery);     
                        //  $products_data = mysqli_fetch_assoc($productFetch);
                        //echo $products_data;

                        if(mysqli_num_rows($productFetch) > 0){
   

                            echo "<table class='table'>";
                                echo "<tr>";
                                    echo "<th class='table-dark'>Product Name</th>";
                                    echo "<th class='table-dark'>Product Quantity</th>";
                                    echo "<th class='table-dark'>Sale time</th>";
                                echo "</tr>";
                            while($row = mysqli_fetch_array($productFetch)){
                              $prodid = $row['productId'];

                                  $prodnameQuery = "select * from products where productId = '$prodid'";
                                  $productFetch2 = mysqli_query($db, $prodnameQuery);
                                  $product_data = mysqli_fetch_assoc($productFetch2);
                                  $prodname = $product_data['productname'];


                                echo "<tr>";
                                    echo "<td>" . $prodname . "</td>";
                                    echo "<td>" . $row['quantity'] . "</td>";
                                    echo "<td>" . $row['saletime'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($productFetch);
                      }
                       else{
                        
                            echo "No records matching your query were found.";
                          }

                      echo "";

            endif 
            // If logged in user end condition
  ?>

</div>


<?php 
 include 'footer.php';
?>
		
