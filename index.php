<?php
    $servidor = "db";
    $usuario = "root";
    $clave = "localhost";
    $baseDeDatos = "Informacion";

    $enlace = mysqli_connect ($servidor,$usuario,$clave,$baseDeDatos);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Hola mundo</title>
</head>
<body>
    <section class="form-register">
        <h4>Formulario Registro</h4>
            <form action="#" name="Datos" method="post">
            <input class="controls" type="text" name="nombre" placeholder="Nombre">
            <input class="controls" type="text" name="apellido" placeholder="Apellido">
            <input class="controls" type="number" name="edad" placeholder="Edad" required>
            <input class="botons" type="submit" name="Enviar">
    </section>
</body>


<?php

if(isset($_POST['Enviar'])){

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = $_POST['edad'];

    $insertarDatos = "INSERT INTO datos (nombre, apellidos, edad) VALUES ('$nombre','$apellidos','$edad')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

}

?>

</html>
