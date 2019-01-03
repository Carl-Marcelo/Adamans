<?php

include '../config/connect.php';

$user_id = $_POST['sender_id'];
$sql = "DELETE FROM user WHERE sender_id = '$user_id'";
$result = mysqli_query($database_connect, $sql);
if ($result) {
    echo 'Deleted Successfully';
    echo '<BR>';
    echo "<a href='admin-dashboard.php'>Back to main page</a>";
} else {
    echo 'ERROR';
}
?> 