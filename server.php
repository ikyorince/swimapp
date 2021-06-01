<?php
//include 'functions.php';
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'swim_db', '3306');
$db = mysqli_connect('localhost', 'shafee', 'IloveBlu3b3rry', 'swim_db', '3306');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    $user_data = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;


      $_SESSION['user_id'] = $user_data['id'];
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}



//add product
if (isset($_POST['addproduct'])) {
  $productname = mysqli_real_escape_string($db, $_POST['productname']);
  $productquantity = mysqli_real_escape_string($db, $_POST['productquantity']);
  if (empty($productname)) {
    array_push($errors, "productname is required");
  }
  if (empty($productquantity)) {
    array_push($errors, "product quant is required");
  }

  if (!empty($productname && is_numeric($productquantity))) {

    $userid = $_SESSION['user_id'];
    $errors = 0;
    $prodcheck = "SELECT * FROM products WHERE productname='$productname' LIMIT 1";

    $result = mysqli_query($db, $prodcheck);
    $prodcheckresult = mysqli_fetch_assoc($result);

    if (empty($prodcheckresult['productname'])) {
      $query = "INSERT INTO products (id, productname, CurrentQuantity) VALUES('$userid', '$productname', '$productquantity')";


      
      mysqli_query($db, $query);

      $_SESSION['success'] = "You added a new product";
      header('location: index.php');    


    }
    else {
            array_push($errors, "product already exists");

      }
  }

}


//Edit a product 





?>