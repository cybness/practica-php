<?php

include("connect.php");

if (!empty($_POST['nombre'])) {

    echo "Recibe el nombre: " . $_POST['nombre'] . "<br>";

    $name = $_POST['nombre'];

    $sql = "INSERT INTO datos (nombre)
            VALUES(?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $name);

    mysqli_stmt_execute($stmt);

    }

    header('Location: index.php');
?>