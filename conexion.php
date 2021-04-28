<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $basedatos = 'calculo';

    $conexion = new mysqli($servidor,$usuario,$clave,$basedatos);

    if(!$conexion){
        echo '<script> alert ("Error al conectar con la base de datos") </script>';
    }

?>
