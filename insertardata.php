<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

// pasamos los datos a index.php a variables

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$email = $_REQUEST['email'];

// incluimos la conexion
include "conexion.php";

//creamos el insert (consulta SQL)

$ls_sql = "INSERT INTO clientes VALUES(0, '$nombre', '$apellido','$email')";


$consulta = mysqli_query($conexion, $ls_sql) or die ("Error al insertar registro");

if ($consulta == false){
    echo "No se insertaron los datos";

} else{
    header("location: index.php");
}


?> 
</body>
</html>