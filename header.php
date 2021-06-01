<?php 

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
 include("functions.php");
 include ("server.php");

// connect to the database

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>

	<title> SWIM APP </title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
      .navbar-custom { 
          background-color: #f13030; 
      }

      .bg-custom { 
          background-color: #f6E8EA !important; 
      }

      .whitetext {
        color: green; 

      }

      a {
        color: white;
      }

      .darktext {
        color: #f22181 !important;
      }

      .table-dark {
          background-color: #f45669  !important;
          color: black !important;
        }

        .btn {
         background-color: #f45669  !important;
          color: black !important;
         border-radius: 12px !important;
        }
        .bg-info {
          background-color: #f45669  !important;
          color: black !important;
        }
        .pink-bg {
                    background-color: #f6e8ea  !important;
                  }



  </style>
</head>
<body class="pink-bg">


<header>
  
  <nav class="navbar sticky-top navbar-dark navbar-custom">
  <div class="container-fluid">
              <!-- Just an image -->

              <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="60" height="60">
              </a>


    <div class="d-flex" style="align-content: right">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  </nav>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="navbar-custom p-4">
        <a class="nav-link" href="support.php">Contact Us</a> </br> 
        <a class="nav-link" href="editproduct.php">Edit a Product</a>  </br>
        <a class="nav-link" href="sellog.php"> Sale Log </a> </br> 
        <a class="nav-link" href="index.php?logout='1'">logout</a>
  </div>
</div>

</header>

  <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>