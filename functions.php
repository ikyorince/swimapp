<?php 
  
  $db = mysqli_connect('localhost', 'root', '', 'swim_db', '3306');

 $db = mysqli_connect('localhost', 'shafee', 'IloveBlu3b3rry', 'swim_db', '3306');


function getUserID() {

 if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
    $db = mysqli_connect('localhost', 'root', '', 'swim_db', '3306');
  $db = mysqli_connect('localhost', 'shafee', 'IloveBlu3b3rry', 'swim_db', '3306');

   	$query = "SELECT * FROM users WHERE username='$username'";

    $results = mysqli_query($db, $query);
    $user_data = mysqli_fetch_assoc($results);
    $_SESSION['user_id'] = $user_data['id'];
    $user_id = $_SESSION['user_id'];
	}
return $user_id;
}


function showalldata($userid){




}


//data

if (isset($_POST['select_product'])) {

		  	$productname = mysqli_real_escape_string($db, $_POST['selprod']);

	        $selprod = $_POST['selprod'];
            $_SESSION['edpd'] = "$selprod";

}

if (isset($_POST['edit_product'])) {

		  	$productname = mysqli_real_escape_string($db, $_POST['productname']);
 			$productquantity = mysqli_real_escape_string($db, $_POST['productQuantity']);
 			$productId = $_SESSION['edpd'];

 			 $query = "UPDATE products SET productname = '$productname', CurrentQuantity = '$productquantity' where productId = $productId  LIMIT 1";
  			$result = mysqli_query($db, $query);



            $_SESSION['edpd'] = "";

            header('location: index.php');    


}


//Selling a product

if (isset($_POST['select_productsell'])) {

        $productname = mysqli_real_escape_string($db, $_POST['selprod']);

          $selprod = $_POST['selprod'];
            $_SESSION['edpd'] = "$selprod";

}

if (isset($_POST['sell_product'])) {

  $productId = $_SESSION['edpd'];
  $query = "SELECT * FROM products where productId = $productId  LIMIT 1";
  $result = mysqli_query($db, $query);
  $formdata = mysqli_fetch_assoc($result);
  $productname = $formdata['productname'];
  $productQuantity = $formdata['CurrentQuantity'];
  $id = $_SESSION['user_id'];





      $productname = mysqli_real_escape_string($db, $_POST['productname']);
      $sellproductquantity = mysqli_real_escape_string($db, $_POST['productQuantity']);
      $productId = $_SESSION['edpd'];
      $newQuantity = $productQuantity - $sellproductquantity;


       $query = "UPDATE products SET productname = '$productname', CurrentQuantity = '$newQuantity' where productId = $productId  LIMIT 1";
        $result = mysqli_query($db, $query);

       $query = "INSERT INTO sales (userid, productId, quantity) values ('$id', '$productId' , '$sellproductquantity')";
        $result = mysqli_query($db, $query);

            $_SESSION['edpd'] = "";

          //  header('location: index.php');    


}





 ?>