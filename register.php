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
<body>


<header>
  
  <nav class="navbar sticky-top navbar-dark bg-dark">
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
  <div class="bg-dark p-4">
    <h5 class="text-white h4">
        <a href="support.php">Contact Us</a>
    </h5>
  </div>
</div>

</header>

	
  <form method="post" action="register.php">
        <?php include('errors.php'); ?>

           <div class="card border-primary rounded-0">

                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Sign Up to use </h3>
                                </div>
                            </div>

            <div class="card-body p-3">
    <div class="form-group">
     <div class="input-group mb-2">
  	  <label class="input-group-text" >Username</label>
  	  <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
  	</div></div>
        <div class="form-group">
     <div class="input-group mb-2">
  	  <label class="input-group-text">Email</label>
  	  <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
  	</div></div>
    <div class="form-group">
     <div class="input-group mb-2">
  	  <label class="input-group-text">Password</label>
  	  <input class="form-control" type="password" name="password_1">
  	</div></div>
    <div class="form-group">
     <div class="input-group mb-2">
  	  <label class="input-group-text">Confirm password</label>
  	  <input class="form-control" type="password" name="password_2">
  	</div></div>

    <div class="form-group">
     <div class="input-group mb-2">
  	  <button type="submit" class="btn btn-info btn-block rounded-0 py-2" name="reg_user">Register</button>
  	</div></div>



  	<p>
  		Already a member? <a style="color: blue" href="login.php">Sign in</a>
  	</p>
  </div>
  </form>

</body>
  <!-- Bootstrap core JavaScript -->
 
  <script src="jquery/jquery.slim.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</html>