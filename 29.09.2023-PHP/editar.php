<?php
include("conexion.php");
$idRecibido = $_GET["idEnviado"];
$consulta ="SELECT * FROM marcas WHERE id='.$idRecibido.'";
$respuesta = mysqli_query($conexion, $consulta);


while($row = mysqli_fetch){}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerciciosphp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<div class="container p-5">
    <div class="row">
        <div class="col">
            <form action="guardar.php" method = "POST">
                <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre</span>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre aquí" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <label class="input-group-text" for="inputGroupSelect01">Origen</label>
                        <select class="form-select" id="inputGroupSelect01" name="origen">
                            <option selected>Presione para ver el listado...</option>
                            <option value="japon"<?php echo $origen == "japon"?"selected": null ?>>Japon</option>
                            <option value="china"<?php echo $origen == "china"?"selected": null ?>>China</option>
                            <option value="francia"<?php echo $origen == "francia"?"selected": null ?>>Francia</option>
                        </select>
                        </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Imagen</span>
                        <input type="text" name="logo" class="form-control" placeholder="Ingrese link logo aquí" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <button type="submit" class="btn btn-secondary m-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>