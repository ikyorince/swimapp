<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title> SWIM APP </title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <style type="text/css">
      .navbar-custom { 
          background-color: #f13030 !important; 
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



<header>
  
  <nav class="navbar sticky-top navbar-custom">
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
    <h5 class="text-white h4">
        <a href="support.php">Contact Us</a>
    </h5>
  </div>
</div>

</header>




  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>

           <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Sign In</h3>
                                </div>
                            </div>

            <div class="card-body p-3">


     <div class="input-group mb-2">
  	<div class="input-group">
  		<label class="input-group-text">Username</label>
  		<input class="form-control" type="text" name="username" >
  	</div></div>
     <div class="input-group mb-2">
  	<div class="input-group">
  		<label class="input-group-text">Password</label>
  		<input class="form-control" type="password" name="password">
  	</div></div>
     <div class="input-group mb-2">
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-block rounded-0 py-2" name="login_user">Login</button>
  	</div></div>


  	<p>
  		Not yet a member? <a style="color: blue" href="register.php">Sign up</a>
  	</p>
  </div>
  </form>
</body>
  <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="jquery/jquery.slim.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</html>