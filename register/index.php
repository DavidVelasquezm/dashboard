<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="img/ico" href="img/favicon.png">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>EcosplashApp</title>

  <!-- Bootstrap core CSS -->
  <link href="login/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="login/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="login/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <a class="navbar-brand" href="#page-top"><img id="carimage" src="img/retina-ecosplash.png"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register/login.php">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html/#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html/#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <!--Form-->

        <form action="" method="post" id="fileForm" role="form">

          <fieldset>
            <legend class="text-center">Sign Up to EsocoSplashApp <span class="req"><small> required *</small></span></legend>
            <form method="post" action="">
              <div class="form-group">   
                <label for="realname"><span class="req">* </span> First name: </label>
                <input class="form-control" type="text" name="realname" id = "txt" onkeyup = "Validate(this)" required /> 
                <div id="errFirst"></div>    
              </div>

              <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label> 
                <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
                <div id="errLast"></div>
              </div>

              <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                <input class="form-control" required type="text" name="mail" id = "email"  onchange="email_validate(this.value);" />   
                <div class="status" id="status"></div>
              </div>

              <div class="form-group">
                <label for="username"><span class="req">* </span> User name:  <small>This will be your login user name</small> </label> 
                <input class="form-control" type="text" name="nick" id = "txt" onkeyup = "Validate(this)" placeholder="minimum 6 letters" required />  
                <div id="errLast"></div>
              </div>

              <div class="form-group">
             <label for="password"><span class="req">* </span> Password:</label> 
                <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
              </div>
              <div class="form-group">
                <label for="username"><span class="req">* </span> Check password:</label> 
                <input type="password" name="rpass" class="form-control" required placeholder="Check Password" />
              </div>



              </form>

              <!--Form-->



              <div class="form-group">

                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>

                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
              </div>

              <div class="form-group">
                <input class="btn btn-danger" type="submit" name="submit" value="Registrarse">
              </div>



            </fieldset>
          </form><!-- ends register form -->

          <?php
          if(isset($_POST['submit'])){
            require("registro.php");
          }
          ?>


          <!-- Bootstrap core JavaScript -->
          <script src="login/jquery/jquery.min.js"></script>
          <script src="login/popper/popper.min.js"></script>
          <script src="login/bootstrap/js/bootstrap.min.js"></script>

          <!-- Plugin JavaScript -->
          <script src="login/jquery-easing/jquery.easing.min.js"></script>

          <!-- Custom scripts for this template -->
          <script src="js/new-age.min.js"></script>


          <script type="text/javascript">
            document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
          </script>
        </div><!-- ends col-6 -->

        <div class="col-md-6">
          <h1 class="page-header">Video promotional </h1>
          <p>About the sunday washing day. <a href="https://github.com/tradesouthwest/tsw-login-register" title="github" target="_blank">youtube.com</a></a></p>

        </div>

      </div>
    </div>



    <footer>
      <div class="container">
        <p>&copy; EcosplashApp 2017</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="login/jquery/jquery.min.js"></script>
    <script src="login/popper/popper.min.js"></script>
    <script src="login/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="login/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

  </html>
