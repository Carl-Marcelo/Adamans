<head>
<!-- Title Bar Icon -->
<link rel="icon" href="../Logo/woo-logo.png" />
<!-- Font Awesome -->
<link href="../Font-Awesome/all.min.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="../Framework/Css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="../Framework/Css/mdb.min.css" rel="stylesheet">
<style> * {font-style: 'Poppins', sans-serif; letter-spacing: 2px;}</style>
</head>
<?php
  if (isset($_POST['Sender_Send'])) {
      include '../config/connect.php';

      $errors = array();
      if (empty($_POST['Sender_Name'])) {
          $errors[] = 'You forgot to enter your name.';
      } else {
          $Sn = trim($_POST['Sender_Name']);
      }
      if (empty($_POST['Sender_Email'])) {
          $errors[] = 'You forgot to enter your email.';
      } else {
          $Se = trim($_POST['Sender_Email']);
      }
      if (empty($_POST['Sender_Subject'])) {
          $errors[] = 'You forgot to enter subject.';
      } else {
          $Ss = trim($_POST['Sender_Subject']);
      }
      if (empty($_POST['Sender_Message'])) {
          $errors[] = 'You forgot to enter your message.';
      } else {
          $Sm = trim($_POST['Sender_Message']);
      }

      if (empty($errors)) {
          require_once '../config/connect.php';
          date_default_timezone_set('Asia/Manila');
          $date = date('Y-m-d H:i:s');
          $query = "INSERT INTO user (sender_name, sender_email, sender_subject, date_time, sender_message) 
                    VALUES ('$Sn', '$Se', '$Ss', '$date', '$Sm');";
          $run = @mysqli_query($database_connect, $query);
          if ($run) {
              header('Location: mailSuccess.html?mail=success');
          } else {
              echo '
                <div class="container text-white">
                    <div class="row bg-danger p-3 mt-2 mx-auto w-50">
                        <h1 class="h1-responsive">System Error</h1> 
                        <p class="error">
                            You could not be registered due to a system error. We apologize for any inconvenience.
                        </p>';
              echo '<p>'.mysqli_error($database_connect).'<br /><br />Query: '.$query.'</p>
                    </div>
                </div>';
          }
          mysqli_close($database_connect);
          exit();
      } else {
          echo '
                <div class="container"> 
                    <div class="row d-block mx-auto mt-5 w-50">
                        <h1 class="h1-responsive text-danger">Error!</h1> 
                        <p class="error">The following error(s) occurred: </p>';
          foreach ($errors as $msg) {
              echo '<p class="alert alert-danger"> '.$msg.'</p>';
          }
          echo '        
                        <a class="btn btn-primary btn-md" href="mail.php">Try again</a>
                    </div>
                </div>';
      }
  }
