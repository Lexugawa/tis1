<?php
include("../paginas/conexion.php");

$nombre_recibido = $_POST["nombre"];
$origen_recibido = $_POST["origen"];
$logo_recibido = $_POST["logo"];
$idRecibido = $_POST["id"];

$insert = "UPDATE marcas 
 SET nombre = '$nombre_recibido', origen= '$origen_recibido' , logo= '$logo_recibido'
 id='$idRecibido'";
$resultado = mysqli_query($conexion, $insert);

header("Location: ../index.php?p=marcas");

?>