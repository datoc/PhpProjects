<?php
$hostname = "localhost";
$username = "root";
$pass = "";
$database = "coin";

$connection = @mysqli_connect($hostname, $username, $pass, $database) or die(mysqli_connection_error() . "Database not connected");
    $us = $_GET["id"];

    $del = @mysqli_query($connection, "DELETE FROM user WHERE ID = $us");
    if($del) header("Location: index.php");
?>