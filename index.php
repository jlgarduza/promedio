<?php

    include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa Veracruz SA de CV</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <td>Año</td>
                <td>Categoría</td>
                <td>Mes</td>
                <td>Semana</td>
                <td>Dias</td>
                <td>#Semana</td>
                <td>Fecha</td>
                <td>Establecimiento</td>
                <td>Producto</td>
                <td>Importe</td>
                <td>Cant.</td>
                <td>Total</td>
            </thead>
            <?php
                $consultarbase = $conexion->query("SELECT * FROM base LIMIT 50");
                while($verbase = $consultarbase->fetch_object()){
            ?>
            <tbody style="font-size:10px;">
                <tr>
                    <td><?php echo $verbase->anio; ?></td>
                    <td><?php echo $verbase->categoria; ?></td>
                    <td><?php echo $verbase->mes; ?></td>
                    <td><?php echo $verbase->semanas; ?></td>
                    <td><?php echo $verbase->dias; ?></td>
                    <td><?php echo $verbase->numsemana; ?></td>
                    <td><?php echo $verbase->fechas; ?></td>
                    <td><?php echo $verbase->establecimientos; ?></td>
                    <td><?php echo $verbase->producto; ?></td>
                    <td><?php echo $verbase->precio_venta; ?></td>
                    <td><?php echo $verbase->total; ?></td>
                    <td><?php echo $verbase->ventas; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

    <script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
