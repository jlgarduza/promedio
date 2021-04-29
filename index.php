<?php

    include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa Veracruz SA de CV</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        thead{
            background-color: #085;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="container">

        <div class="row col-md-12">

            <form class="row g-3" method="POST" >
                <div class="col-auto">
                    <select name="dia" class="form-control-plaintext">
                        <option value="#">Selecciona día</option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sábado">Sábado</option>
                        <option value="Domingo">Domingo</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Mes</label>
                    <select name="mes" class="form-control-plaintext">
                        <option value="#">Selecciona Mes</option>
                        <option value="Enero">Enero</option>
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="Julio">Julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>
                        <option value="Todos">Todos</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label for="staticEmail2" class="visually-hidden">Año</label>
                    <select name="anio" class="form-control-plaintext">
                        <option value="#">Selecciona Año</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
                <div class="col-auto">
                    <input type="submit" name="buscar" value="Mostrar" class="btn btn-primary">
                </div>
            </form>

            <?php
                if(empty($_POST['buscar'])){
                    $consultarbase = $conexion->query("SELECT dias, SUM(carne_arabe) arabe, SUM(carne_pastor) pastor, SUM(arrachera_marinada) arrachera, SUM(queso_gouda) gouda,
                        SUM(cebollas_a_las_Brasas) cebollaBrasas, SUM(tortilla_taquera) tortilla_taquera, SUM(tortilla_de_harina) tortilla_de_harina,
                        SUM(pan_arabe) pan_arabe, SUM(pan_hamburguesa) pan_hamburguesa, SUM(jitomate) jitomate, SUM(pepino) pepino, SUM(frijoles_charros) frijoles_charros,
                        SUM(guacamole) guacamole, SUM(cebolla) cebolla, SUM(pimiento_morron) pimiento, SUM(tocino) tocino, SUM(tortilla_totopos) tortilla_totopos,
                        SUM(pinia) pinia, SUM(cilantro) cilantro, SUM(aguacate) aguacate, SUM(jocoque) jocoque, SUM(champinion) champinion 
                        FROM base WHERE dias IN ('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo') AND fechas BETWEEN '2020-06-01' AND '2021-12-31'");
                        while($verbase = $consultarbase->fetch_object()){
                            $arabe = ($verbase->arabe/325);
                            $pastor = ($verbase->pastor/30);
                            $arrachera = ($verbase->arrachera/30);
                            $gouda = ($verbase->gouda/30);
                            $cebollaBrasas = ($verbase->cebollaBrasas/30);
                            $tortilla_taquera = ($verbase->tortilla_taquera/30);
                            $tortilla_de_harina = ($verbase->tortilla_de_harina/30);
                            $pan_arabe = ($verbase->pan_arabe/30);
                            $pan_hamburguesa = ($verbase->pan_hamburguesa/30);
                            $jitomate = ($verbase->jitomate/30);
                            $pepino = ($verbase->pepino/30);
                            $frijoles_charros = ($verbase->frijoles_charros/30);
                            $guacamole = ($verbase->guacamole/30);
                            $cebolla = ($verbase->cebolla/30);
                            $pimiento = ($verbase->pimiento/30);
                            $tocino = ($verbase->tocino/30);
                            $tortilla_totopos = ($verbase->tortilla_totopos/30);
                            $pinia = ($verbase->pinia/30);
                            $cilantro = ($verbase->cilantro/30);
                            $aguacate = ($verbase->aguacate/30);
                            $jocoque = ($verbase->jocoque/30);
                            $champinion = ($verbase->champinion/30);
                            
                    echo '<table class="table table-bordered">
                    <thead>
                        <td>Concepto</td>
                        <td>Total</td>
                        <td>Promedio</td>
                        <td>Mínimo</td>
                        <td>Pedir</td>
                    </thead>
                    <tbody style="font-size:12px;">
                        <tr>
                            <td>Carne Árabe</td><td>'.number_format($verbase->arabe,2). '</td>
                            <td>'.number_format($arabe,2). '</td>
                        </tr>
                        <tr>
                            <td>Carne Pastor</td><td>'.number_format($verbase->pastor,2).'</td>
                            <td>'. number_format($pastor,2).'</td>
                        </tr>
                        <tr>
                            <td>Arrachera marinada (g)</td><td>'. number_format($verbase->arrachera,2).'</td>
                            <td>'.number_format($arrachera,2).'</td>
                        </tr>
                        <tr>
                            <td>Queso gouda (g)</td><td>'.number_format($verbase->gouda,2).'</td>
                            <td>'.number_format($gouda,2).'</td>
                        </tr>
                        <tr>
                            <td>Cebolla a las brasas (g)</td><td>'.number_format($verbase->cebollaBrasas,2).'</td>
                            <td>'.number_format($cebollaBrasas,2).'</td>
                        </tr>
                        <tr>
                            <td>Tortilla Taquera (pz)</td><td>'.number_format($verbase->tortilla_taquera,2).'</td>
                            <td>'.number_format($tortilla_taquera,2).'</td>
                        </tr>
                        <tr>
                            <td>Tortilla de harina (pz)</td><td>'.number_format($verbase->tortilla_de_harina,2).'</td>
                            <td>'.number_format($tortilla_de_harina,2).'</td>
                        </tr>
                        <tr>
                            <td>Pan Árabe (pz)</td><td>'.number_format($verbase->pan_arabe,2).'</td>
                            <td>'.number_format($pan_arabe,2).'</td>
                        </tr>
                        <tr>
                            <td>Pan Hamburguesa (pz)</td><td>'.number_format($verbase->pan_hamburguesa,2).'</td>
                            <td>'.number_format($pan_hamburguesa,2).'</td>
                        </tr>
                        <tr>
                            <td>Jitomate (g)</td><td>'.number_format($verbase->jitomate,2).'</td>
                            <td>'.number_format($jitomate,2).'</td>
                        </tr>
                        <tr>
                            <td>Pepino (g)</td><td>'.number_format($verbase->pepino,2).'</td>
                            <td>'.number_format($pepino,2).'</td>
                        </tr>
                        <tr>
                            <td>Frijoles Charros (ml)</td><td>'.number_format($verbase->frijoles_charros,2).'</td>
                            <td>'.number_format($frijoles_charros,2).'</td>
                        </tr>
                        <tr>
                            <td>Guacamole (g)</td><td>'.number_format($verbase->guacamole,2).'</td>
                            <td>'.number_format($guacamole,2).'</td>
                        </tr>
                        <tr>
                            <td>Cebolla (g)</td><td>'.number_format($verbase->cebolla,2).'</td>
                            <td>'.number_format($cebolla,2).'</td>
                        </tr>
                        <tr>
                            <td>Pimiento (g)</td><td>'.number_format($verbase->pimiento,2).'</td>
                            <td>'.number_format($pimiento,2).'</td>
                        </tr>
                        <tr>
                            <td>Tocino (g)</td><td>'.number_format($verbase->tocino,2).'</td>
                            <td>'.number_format($tocino,2).'</td>
                        </tr>
                        <tr>
                            <td>Tortilla totopo (g)</td><td>'.number_format($verbase->tortilla_totopos,2).'</td>
                            <td>'.number_format($tortilla_totopos,2).'</td>
                        </tr>
                        <tr>
                            <td>Piña (g)</td><td>'.number_format($verbase->pinia,2).'</td>
                            <td>'.number_format($pinia,2).'</td>
                        </tr>
                        <tr>
                            <td>Cilantro (g)</td><td>'.number_format($verbase->cilantro,2).'</td>
                            <td>'.number_format($cilantro,2).'</td>
                        </tr>
                        <tr>
                            <td>Aguacate (g)</td><td>'.number_format($verbase->aguacate,2).'</td>
                            <td>'.number_format($aguacate,2).'</td>
                        </tr>
                        <tr>
                            <td>Jocoque (g)</td><td>'.number_format($verbase->jocoque,2).'</td>
                            <td>'.number_format($jocoque,2).'</td>
                        </tr>
                        <tr>
                            <td>Champiñon (g)</td><td>'.number_format($verbase->champinion,2).'</td>
                            <td>'.number_format($champinion,2).'</td>
                        </tr>
                    </tbody>
                    ';}
                    '</table>';
                }else{
                    $dia = trim($_POST['dia']);
                    $mes = trim($_POST['mes']);
                    $anio = trim($_POST['anio']);

                    //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
                    $sql = $conexion->query("SELECT dias, fechas, SUM(carne_arabe) arabe, SUM(carne_pastor) pastor, SUM(arrachera_marinada) arrachera, SUM(queso_gouda) gouda,
                        SUM(cebollas_a_las_Brasas) cebollaBrasas, SUM(tortilla_taquera) tortilla_taquera, SUM(tortilla_de_harina) tortilla_de_harina,
                        SUM(pan_arabe) pan_arabe, SUM(pan_hamburguesa) pan_hamburguesa, SUM(jitomate) jitomate, SUM(pepino) pepino, SUM(frijoles_charros) frijoles_charros,
                        SUM(guacamole) guacamole, SUM(cebolla) cebolla, SUM(pimiento_morron) pimiento, SUM(tocino) tocino, SUM(tortilla_totopos) tortilla_totopos,
                        SUM(pinia) pinia, SUM(cilantro) cilantro, SUM(aguacate) aguacate, SUM(jocoque) jocoque, SUM(champinion) champinion 
                        FROM base 
                        WHERE dias LIKE '%" .$dia. "%' 
                        AND mes LIKE '%".$mes."%' 
                        AND anio LIKE '%".$anio."%'
                        AND categoria IN('CALDOS','COMPLEMENTOS','EMPAQUES','ENTRADAS','ESPECIALIDADES','EXTRAS','KILO','PROMO','TACOS')
                        ");

                        while($fila = mysqli_fetch_assoc($sql)){
                            $arabe = ($fila['arabe']/5);
                            $pastor = ($fila['pastor']/5);
                            $arrachera = ($fila['arrachera']/30);
                            $gouda = ($fila['gouda']/30);
                            $cebollaBrasas = ($fila['cebollaBrasas']/30);
                            $tortilla_taquera = ($fila['tortilla_taquera']/30);
                            $tortilla_de_harina = ($fila['tortilla_de_harina']/30);
                            $pan_arabe = ($fila['pan_arabe']/30);
                            $pan_hamburguesa = ($fila['pan_hamburguesa']/30);
                            $jitomate = ($fila['jitomate']/30);
                            $pepino = ($fila['pepino']/30);
                            $frijoles_charros = ($fila['frijoles_charros']/30);
                            $guacamole = ($fila['guacamole']/30);
                            $cebolla = ($fila['cebolla']/30);
                            $pimiento = ($fila['pimiento']/30);
                            $tocino = ($fila['tocino']/30);
                            $tortilla_totopos = ($fila['tortilla_totopos']/30);
                            $pinia = ($fila['pinia']/30);
                            $cilantro = ($fila['cilantro']/30);
                            $aguacate = ($fila['aguacate']/30);
                            $jocoque = ($fila['jocoque']/30);
                            $champinion = ($fila['champinion']/30);

                            echo '<b>Seleccionado: Fecha:'.$fila['fechas'].' Día:'.$dia.' Mes:'.$mes.' Año:'.$anio.'</b>';
                            echo'
                                <div class="table-responsive">
                                <table style="width:25%" class="table table-hover">
                                <thead>
                                <tr>

                                <td>Concepto</td>
                                <td>Total</td>
                                <td>Promedio</td>

                                </tr>
                                </thead>
                                <tbody style="font-size:10px;">

                                <tr>
                                <td>Carne Árabe</td>
                                <td>'. number_format($fila['arabe'],2) .'</td>
                                <td>'. number_format($arabe,2) .'</td>
                                </tr>

                                <tr>
                                <td>Carne Pastor</td>
                                <td>'. number_format($fila['pastor'],2) .'</td>
                                <td>'. number_format($pastor,2) .'</td>
                                </tr>

                                <tr>
                                <td>Arrachera marinada (g)</td>
                                <td>'. number_format($fila['arrachera'],2).'</td>
                                <td>'.number_format($arrachera,2).'</td>
                                </tr>
                                <tr>
                                    <td>Queso gouda (g)</td>
                                    <td>'.number_format($fila['gouda'],2).'</td>
                                    <td>'.number_format($gouda,2).'</td>
                                </tr>
                                <tr>
                                    <td>Cebolla a las brasas (g)</td>
                                    <td>'.number_format($fila['cebollaBrasas'],2).'</td>
                                    <td>'.number_format($cebollaBrasas,2).'</td>
                                </tr>
                                <tr>
                                    <td>Tortilla Taquera (pz)</td>
                                    <td>'.number_format($fila['tortilla_taquera'],2).'</td>
                                    <td>'.number_format($tortilla_taquera,2).'</td>
                                </tr>
                                <tr>
                                    <td>Tortilla de harina (pz)</td>
                                    <td>'.number_format($fila['tortilla_de_harina'],2).'</td>
                                    <td>'.number_format($tortilla_de_harina,2).'</td>
                                </tr>
                                <tr>
                                    <td>Pan Árabe (pz)</td>
                                    <td>'.number_format($fila['pan_arabe'],2).'</td>
                                    <td>'.number_format($pan_arabe,2).'</td>
                                </tr>
                                <tr>
                                    <td>Pan Hamburguesa (pz)</td>
                                    <td>'.number_format($fila['pan_hamburguesa'],2).'</td>
                                    <td>'.number_format($pan_hamburguesa,2).'</td>
                                </tr>
                                <tr>
                                    <td>Jitomate (g)</td>
                                    <td>'.number_format($fila['jitomate'],2).'</td>
                                    <td>'.number_format($jitomate,2).'</td>
                                </tr>
                                <tr>
                                    <td>Pepino (g)</td>
                                    <td>'.number_format($fila['pepino'],2).'</td>
                                    <td>'.number_format($pepino,2).'</td>
                                </tr>
                                <tr>
                                    <td>Frijoles Charros (ml)</td>
                                    <td>'.number_format($fila['frijoles_charros'],2).'</td>
                                    <td>'.number_format($frijoles_charros,2).'</td>
                                </tr>
                                <tr>
                                    <td>Guacamole (g)</td>
                                    <td>'.number_format($fila['guacamole'],2).'</td>
                                    <td>'.number_format($guacamole,2).'</td>
                                </tr>
                                <tr>
                                    <td>Cebolla (g)</td>
                                    <td>'.number_format($fila['cebolla'],2).'</td>
                                    <td>'.number_format($cebolla,2).'</td>
                                </tr>
                                <tr>
                                    <td>Pimiento (g)</td>
                                    <td>'.number_format($fila['pimiento'],2).'</td>
                                    <td>'.number_format($pimiento,2).'</td>
                                </tr>
                                <tr>
                                    <td>Tocino (g)</td>
                                    <td>'.number_format($fila['tocino'],2).'</td>
                                    <td>'.number_format($tocino,2).'</td>
                                </tr>
                                <tr>
                                    <td>Tortilla totopo (g)</td>
                                    <td>'.number_format($fila['tortilla_totopos'],2).'</td>
                                    <td>'.number_format($tortilla_totopos,2).'</td>
                                </tr>
                                <tr>
                                    <td>Piña (g)</td>
                                    <td>'.number_format($fila['pinia'],2).'</td>
                                    <td>'.number_format($pinia,2).'</td>
                                </tr>
                                <tr>
                                    <td>Cilantro (g)</td>
                                    <td>'.number_format($fila['cilantro'],2).'</td>
                                    <td>'.number_format($cilantro,2).'</td>
                                </tr>
                                <tr>
                                    <td>Aguacate (g)</td>
                                    <td>'.number_format($fila['aguacate'],2).'</td>
                                    <td>'.number_format($aguacate,2).'</td>
                                </tr>
                                <tr>
                                    <td>Jocoque (g)</td>
                                    <td>'.number_format($fila['jocoque'],2).'</td>
                                    <td>'.number_format($jocoque,2).'</td>
                                </tr>
                                <tr>
                                    <td>Champiñon (g)</td>
                                    <td>'.number_format($fila['champinion'],2).'</td>
                                    <td>'.number_format($champinion,2).'</td>
                                </tr>

                                </tbody>
                                </table>
                                </div>
                                </table> <br>';
                        }
                }
            ?>

            
            <!-- <table class="table table-bordered">
                <thead>
                    <td>Concepto</td>
                    <td>Total</td>
                    <td>Promedio</td>
                    <td>Mínimo</td>
                    <td>Pedir</td>
                </thead>
                <?php
                    $consultarbase = $conexion->query("SELECT dias, SUM(carne_arabe) arabe, SUM(carne_pastor) pastor, SUM(arrachera_marinada) arrachera, SUM(queso_gouda) gouda,
                    SUM(cebollas_a_las_Brasas) cebollaBrasas, SUM(tortilla_taquera) tortilla_taquera, SUM(tortilla_de_harina) tortilla_de_harina,
                    SUM(pan_arabe) pan_arabe, SUM(pan_hamburguesa) pan_hamburguesa, SUM(jitomate) jitomate, SUM(pepino) pepino, SUM(frijoles_charros) frijoles_charros,
                    SUM(guacamole) guacamole, SUM(cebolla) cebolla, SUM(pimiento_morron) pimiento, SUM(tocino) tocino, SUM(tortilla_totopos) tortilla_totopos,
                    SUM(pinia) pinia, SUM(cilantro) cilantro, SUM(aguacate) aguacate, SUM(jocoque) jocoque, SUM(champinion) champinion 
                    FROM base WHERE dias IN ('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo') AND fechas BETWEEN '2020-06-01' AND '2020-06-30'");
                    while($verbase = $consultarbase->fetch_object()){
                        $arabe = ($verbase->arabe/30);
                        $pastor = ($verbase->pastor/30);
                        $arrachera = ($verbase->arrachera/30);
                        $gouda = ($verbase->gouda/30);
                        $cebollaBrasas = ($verbase->cebollaBrasas/30);
                        $tortilla_taquera = ($verbase->tortilla_taquera/30);
                        $tortilla_de_harina = ($verbase->tortilla_de_harina/30);
                        $pan_arabe = ($verbase->pan_arabe/30);
                        $pan_hamburguesa = ($verbase->pan_hamburguesa/30);
                        $jitomate = ($verbase->jitomate/30);
                        $pepino = ($verbase->pepino/30);
                        $frijoles_charros = ($verbase->frijoles_charros/30);
                        $guacamole = ($verbase->guacamole/30);
                        $cebolla = ($verbase->cebolla/30);
                        $pimiento = ($verbase->pimiento/30);
                        $tocino = ($verbase->tocino/30);
                        $tortilla_totopos = ($verbase->tortilla_totopos/30);
                        $pinia = ($verbase->pinia/30);
                        $cilantro = ($verbase->cilantro/30);
                        $aguacate = ($verbase->aguacate/30);
                        $jocoque = ($verbase->jocoque/30);
                        $champinion = ($verbase->champinion/30);
                ?>
                <tbody style="font-size:12px;">
                    <tr>
                        <td>Carne Árabe</td><td><?php echo number_format($verbase->arabe,2); ?></td>
                        <td><?php echo number_format($arabe,2); ?></td>
                    </tr>
                    <tr>
                        <td>Carne Pastor</td><td><?php echo number_format($verbase->pastor,2); ?></td>
                        <td><?php echo number_format($pastor,2); ?></td>
                    </tr>
                    <tr>
                        <td>Arrachera marinada (g)</td><td><?php echo number_format($verbase->arrachera,2); ?></td>
                        <td><?php echo number_format($arrachera,2); ?></td>
                    </tr>
                    <tr>
                        <td>Queso gouda (g)</td><td><?php echo number_format($verbase->gouda,2); ?></td>
                        <td><?php echo number_format($gouda,2); ?></td>
                    </tr>
                    <tr>
                        <td>Cebolla a las brasas (g)</td><td><?php echo number_format($verbase->cebollaBrasas,2); ?></td>
                        <td><?php echo number_format($cebollaBrasas,2); ?></td>
                    </tr>
                    <tr>
                        <td>Tortilla Taquera (pz)</td><td><?php echo number_format($verbase->tortilla_taquera,2); ?></td>
                        <td><?php echo number_format($tortilla_taquera,2); ?></td>
                    </tr>
                    <tr>
                        <td>Tortilla de harina (pz)</td><td><?php echo number_format($verbase->tortilla_de_harina,2); ?></td>
                        <td><?php echo number_format($tortilla_de_harina,2); ?></td>
                    </tr>
                    <tr>
                        <td>Pan Árabe (pz)</td><td><?php echo number_format($verbase->pan_arabe,2); ?></td>
                        <td><?php echo number_format($pan_arabe,2); ?></td>
                    </tr>
                    <tr>
                        <td>Pan Hamburguesa (pz)</td><td><?php echo number_format($verbase->pan_hamburguesa,2); ?></td>
                        <td><?php echo number_format($pan_hamburguesa,2); ?></td>
                    </tr>
                    <tr>
                        <td>Jitomate (g)</td><td><?php echo number_format($verbase->jitomate,2); ?></td>
                        <td><?php echo number_format($jitomate,2); ?></td>
                    </tr>
                    <tr>
                        <td>Pepino (g)</td><td><?php echo number_format($verbase->pepino,2); ?></td>
                        <td><?php echo number_format($pepino,2); ?></td>
                    </tr>
                    <tr>
                        <td>Frijoles Charros (ml)</td><td><?php echo number_format($verbase->frijoles_charros,2); ?></td>
                        <td><?php echo number_format($frijoles_charros,2); ?></td>
                    </tr>
                    <tr>
                        <td>Guacamole (g)</td><td><?php echo number_format($verbase->guacamole,2); ?></td>
                        <td><?php echo number_format($guacamole,2); ?></td>
                    </tr>
                    <tr>
                        <td>Cebolla (g)</td><td><?php echo number_format($verbase->cebolla,2); ?></td>
                        <td><?php echo number_format($cebolla,2); ?></td>
                    </tr>
                    <tr>
                        <td>Pimiento (g)</td><td><?php echo number_format($verbase->pimiento,2); ?></td>
                        <td><?php echo number_format($pimiento,2); ?></td>
                    </tr>
                    <tr>
                        <td>Tocino (g)</td><td><?php echo number_format($verbase->tocino,2); ?></td>
                        <td><?php echo number_format($tocino,2); ?></td>
                    </tr>
                    <tr>
                        <td>Tortilla totopo (g)</td><td><?php echo number_format($verbase->tortilla_totopos,2); ?></td>
                        <td><?php echo number_format($tortilla_totopos,2); ?></td>
                    </tr>
                    <tr>
                        <td>Piña (g)</td><td><?php echo number_format($verbase->pinia,2); ?></td>
                        <td><?php echo number_format($pinia,2); ?></td>
                    </tr>
                    <tr>
                        <td>Cilantro (g)</td><td><?php echo number_format($verbase->cilantro,2); ?></td>
                        <td><?php echo number_format($cilantro,2); ?></td>
                    </tr>
                    <tr>
                        <td>Aguacate (g)</td><td><?php echo number_format($verbase->aguacate,2); ?></td>
                        <td><?php echo number_format($aguacate,2); ?></td>
                    </tr>
                    <tr>
                        <td>Jocoque (g)</td><td><?php echo number_format($verbase->jocoque,2); ?></td>
                        <td><?php echo number_format($jocoque,2); ?></td>
                    </tr>
                    <tr>
                        <td>Champiñon (g)</td><td><?php echo number_format($verbase->champinion,2); ?></td>
                        <td><?php echo number_format($champinion,2); ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table> -->
            

        </div>
        
    </div>

    <script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>