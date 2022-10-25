<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <?php
    $usuario = "root";
    $contraseña = "notSecureChangeMe";
    $servidor = "db";
    $database = "mysql";

    #Creamos conexion

    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $database);

    if (!$conexion) {
        die('conexion fallida ' . mysqli_connect_error());
    } else echo "conexion realizada correctamente" . "<br>";
    ?>
</body>

</html>