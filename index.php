<?php include ("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_ hp</title>
</head>
<body>

    <form action="store.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"><br>
    
    <!--<label for="email">Email:</label>
    <input type="text" name="email"></br>-->

    <input type="submit" value="Enviar"><br>
    </form>


    <?php
        $result = $conn->query("SELECT * FROM datos");
        echo "<h1>DATOS REGISTRADOS</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['nombre']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

    
</body>
</html>