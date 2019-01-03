<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Login</title>
  <!-- Title Bar Icon -->
  <link rel="icon" href="../Logo/woo-logo.png" />
  <!-- Font Awesome -->
  <link href="../Font-Awesome/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../Framework/Css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Framework/Css/mdb.min.css" rel="stylesheet">
  <!-- Custom Style Css  -->
  <link href="../Css/Login.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-5 col-lg-3 col-lg-3">
        <form method="POST" action="">
          <div class="form-group mt-5 pt-5">
            <label for="admin_username">Username</label>
            <input class="form-control" type="text" name="admin_user" id="admin_username" required autocomplete="off"> 
          </div>
          <div class="form-group">
            <label for="admin_password">Password</label>
            <input class="form-control" type="password" name="admin_pass" id="admin_password" required>
          </div>
          <div class="form-group">
            <button class="btn" type="submit" name="login_submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php 
  include 'login.php';
  ?>

  <!-- JQuery -->
  <script type="text/javascript" src="../Framework/Js/jquery-3.3.1.min.js"></script>
  <!-- Popper Js -->
  <script type="text/javascript" src="../Framework/Js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../Framework/Js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../Framework/Js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>