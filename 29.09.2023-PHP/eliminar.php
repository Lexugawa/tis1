<?php
include("conexion.php");

$idRecibido = $_GET['idEnviado'];

$delete = "DELETE FROM marcas WHERE id = ".$idRecibido.";";
$resultado = mysqli_query($conexion,$delete);

header("Location: index.php");
?>