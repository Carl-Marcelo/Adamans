<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Woo | Dashboard</title>
  <!-- Title Bar Icon -->
  <link rel="icon" href="../Logo/woo-logo.png">
  <!-- Font Awesome -->
  <link href="../Font-Awesome/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../Framework/Css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../Framework/Css/mdb.min.css" rel="stylesheet">
  <!-- DataTable -->
  <link href="../Framework/Css/jquery.dataTables.css" rel="stylesheet">
  <!-- Custom Style Css  -->
  <link href="../Css/Admin-Style.css" rel="stylesheet">
</head>
<body class="bg-light">
 <header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar wow fadeInDown">
    <div class="container-fluid">
      <a class="navbar-brand waves-effect" href="#!">
        <span>Dashboard</span>
      </a>
      <div class="ml-auto">Welcome, Admin</div>
    </div> 
  </nav>  

  <div class="sidebar-fixed position-fixed wow fadeInLeft">
    <a class="logo-wrapper">
      <img src="../Logo/woo-logo.png" alt="">
    </a>
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action waves-effect" data-toggle="collapse" data-target="#CollapseElement">
        <i class="fa fa-user fa-fw mr-3"></i>
        Profile
        <i class="fa fa-caret-down fa-fw ml-5"></i>
      </a>
      <div class="collapse" id="CollapseElement">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-action waves-effect">
            <a id="Edit-Profile" href="#">
              <i class="fas fa-user-edit fa-fw ml-3 mr-3"></i> 
              Edit Profile
            </a>
          </li>
        </ul>
      </div>
      <a class="list-group-item list-group-item-action waves-effect" id="Dashboard" href="#">
        <i class="fa fa-chart-pie fa-fw mr-2"></i>
        <span class="ml-2">Dashboard</span>
      </a>
      <a class="list-group-item list-group-item-action waves-effect" data-toggle="collapse" data-target="#CollapsePages">
        <i class="fa fa-file fa-fw mr-3"></i>
          Pages
        <i class="fa fa-caret-down fa-fw ml-5"></i>
      </a>
      <div class="collapse" id="CollapsePages">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-action waves-effect">
            <a id="Edit-Profile" href="../Main/index.php" target="_blank">
              <i class="fas fa-home fa-fw ml-3 mr-3"></i> 
              Home
            </a>
          </li>
          <li class="list-group-item list-group-item-action waves-effect">
            <a id="Edit-Profile" href="../Main/about.php" target="_blank">
              <i class="fas fa-info fa-fw ml-3 mr-3"></i> 
              About
            </a>
          </li>
          <li class="list-group-item list-group-item-action waves-effect">
            <a id="Edit-Profile" href="../Main/projects.php" target="_blank">
              <i class="fas fa-laptop-code fa-fw ml-3 mr-3"></i> 
              Projects
            </a>
          </li>
          <li class="list-group-item list-group-item-action waves-effect">
            <a id="Edit-Profile" href="../Main/mail.php" target="_blank">
              <i class="fas fa-envelope fa-fw ml-3 mr-3"></i> 
              Mail
            </a>
          </li>
        </ul>
      </div>
      <!-- <a class="list-group-item list-group-item-action waves-effect" href="#">
        <i class="fa fa-users fa-fw mr-3"></i>
        Users
      </a> -->
      <?php 
        session_start();
        if (!isset($_SESSION['login_admin'])) {
            header('Location: admin-login.php');
        } else {
            echo '
            <a class="list-group-item list-group-item-action waves-effect" id="Lock" href="logout.php">
              <i class="fa fa-lock fa-fw mr-3"></i>
              Lock
            </a>';
        }
      ?>
    </div>
  </div> 
</header>

<main class="pt-5 mx-lg-4">
  <div class="container-fluid mt-5">
    <div class="row wow fadeIn">
      <div class="col-md-4">
        <div class="info-box">
          <div class="content">
            <div class="icon">
              <i class="fa fa-tasks fa-fw fa-4x mt-2"></i>
            </div>
            <div class="content-text">
              <h3>New tasks</h3>
              <div class="count">
               0
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box">
          <div class="content">
            <div class="icon">
              <i class="fa fa-user-friends fa-fw fa-4x mt-2"></i>
            </div>
            <div class="content-text">
              <h3>New visitors</h3>
              <div class="count">
                0
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box">
          <div class="content">
            <div class="icon">
              <i class="fa fa-comments fa-fw fa-4x mt-2"></i>
            </div>
            <div class="content-text">
              <h3>New messages</h3>
              <div class="count">
                0
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="table-container text-center bg-white wow fadeIn">
      <table id="senderTable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th class="th-xs">
              #
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">
              Name
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">
              Email
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">
              Subject
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">
              Message
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">
              Date & Time
              <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-lg">Action</th>
          </tr>
        </thead>
        <?php 
        include '../config/connect.php';
        $query = 'SELECT * FROM user';
        $result = mysqli_query($database_connect, $query);

        $count = 1;
        while ($row = mysqli_fetch_array($result)) {
            $sender_id = $row['sender_id'];
            $sender_name = $row['sender_name'];
            $sender_email = $row['sender_email'];
            $sender_subject = $row['sender_subject'];
            $date = $row['date_time'];
            $sender_message = $row['sender_message']; ?>
          <tr> 
            <td><?= $count; ?></td>
            <td><?= $sender_name; ?></td> 
            <td><?= $sender_email; ?></td> 
            <td><?= $sender_subject; ?></td> 
            <td class="text-truncate" style="max-width: 150px;"><?= $sender_message; ?></td> 
            <td><?= $date; ?></td>
            <td>
              
              <button class="delete btn btn-danger btn-sm m-1" name="delete" id="">Delete</button>
              <a class="view btn btn-info btn-sm" href="#myModal"  id="custId" data-toggle="modal" data-id="<?= $row['sender_id']; ?>">View</a>
            </td>
          </tr>
        <?php
        ++$count;
        }
        ?> 
      </table>
    </div>
  </div>
</main>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <td><span class="mr-2">Name: </span> <?= $sender_name; ?></td> <br/>
        <td><span class="mr-2">Email: </span> <?= $sender_email; ?></td> <br/><br/>
        <td><span class="mr-2">Subject: </span> <?= $sender_subject; ?></td> <br/><br/>
        <td>Message: <br/> <?= $sender_message; ?></td> <br/><br/>
        <td><span class="mr-2">Date/Time: </span> <?= $date; ?> </td>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer text-center font-small mt-4 wow fadeIn">
  <div class="footer-copyright py-5">
    © 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> 
      MDBootstrap.com 
    </a>
  </div>
</footer>
  
  <!-- JQuery -->
  <script type="text/javascript" src="../Framework/Js/jquery-3.3.1.min.js"></script>
  <!-- DataTables -->
  <script type="text/javascript" src="../Framework/Js/jquery.dataTables.min.js"></script>
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
  
  <script>
    $(document).ready( function () {
      $('#senderTable').DataTable();
    });

    // Count
    $(document).ready(function() {

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
      var localStart = start;
      setInterval(function() {
        if (localStart < value) {
          localStart++;
          counters[id].innerHTML = localStart;
        }
      }, 90);
    }

    for (j = 0; j < countersQuantity; j++) {
      count(0, counter[j], j);
    }
    });
    
  </script>
 <!--  /* 
<nav class="navbar navbar-expand-lg navbar-dark rgba-blue-strong mb-4">
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline ml-auto">
            <input class="form-control" type="text" placeholder="Search..">
            <button href="#!" class="btn btn-outline-white btn-sm my-0 " type="submit" name="search"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </nav>
      <script>
        $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
        });
      </script> */ -->
</body>
</html>
