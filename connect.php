<?php
    $dbhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usuarios";

    $conn = mysqli_connect($dbhost, $username, $password, $dbname);

    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    }
?>