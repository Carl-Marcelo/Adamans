<?php

if (isset($_POST['login_submit'])) {
    include '../config/connect.php';
    session_start();
    $admin_username = $_POST['admin_user'];
    $admin_password = $_POST['admin_pass'];
    $_SESSION['login_admin'] = $admin_username;

    $sql = "SELECT admin_user 
            FROM admin 
            WHERE admin_user = '$admin_username' and admin_pass = '$admin_password';";
    $query = mysqli_query($database_connect, $sql);
    $queryCheck = mysqli_num_rows($query);

    if ($queryCheck > 0) {
        header('Location: admin-dashboard.php');
    } else {
        echo '
        <div class="col-md-3 alert alert-danger text-center mx-auto mt-5 wow fadeOut" style="animation-duration: 13s;">
        Invalid Username or Password!
        </div>';
    }
}
