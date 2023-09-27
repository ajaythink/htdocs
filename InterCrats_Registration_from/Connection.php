<?php
$Server = "localhost";
$user = "root";
$password = "";
$db = "appliedapplication";

$con = mysqli_connect($Server, $user, $password, $db);

if ($con) {
    echo "Connection Successful";
} else {
    echo "Connection Failed";
}
?>