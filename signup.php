<!DOCTYPE html>
<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: profile.php');
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php include "title.php"?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- this is the sample comment -->
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php include "navigation.php" ?>
<!-- this is the corosoul -->


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Sign Up to the Tech Teach</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">SignUp</li>
      </ol>

      <div class="row justify-content-center">
          <div class="col-md-6 col-offset-3" align="center">

              <img src="images/icon.png"><br><br>

              <form >
                <input type="text" placeholder="Email..." name="email" class="form-control" required><br>
                  <input type="email" placeholder="Email..." name="email" class="form-control" required><br>
                  <input type="password" placeholder="Password..." name="password" class="form-control" required><br>
                    <input type="password" placeholder="confirm Password..." name="passwordcheck" class="form-control" required><br>
                      <input type="number" placeholder="enter mobile number..." name="mobile" class="form-control" required><br>
                      <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control" placeholder="enter the date of birth" required/>


                </div>
                  <input type="submit" value="Log In" class="btn btn-primary">
                  <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
              </form>

          </div>
      </div>



    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
