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
                      $showTableQuery = "select * from products where id = '$userid'";
                      $productFetch = mysqli_query($db, $showTableQuery);     
                        //  $products_data = mysqli_fetch_assoc($productFetch);
                        //echo $products_data;

                        if(mysqli_num_rows($productFetch) > 0){
                            echo "<table class='table'>";
                                echo "<tr>";
                                    echo "<th class='table-dark'>Product Name</th>";
                                    echo "<th class='table-dark'>Product Quantity</th>";
                                    echo "<th class='table-dark'>Product ID</th>";
                                echo "</tr>";
                            while($row = mysqli_fetch_array($productFetch)){
                              $prodid = $row['productId'];

                                echo "<tr>";
                                    echo "<td>" . $row['productname'] . "</td>";
                                    echo "<td>" . $row['CurrentQuantity'] . "</td>";
                                    echo "<td>" . $row['productId'] . "</td>";
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
		
