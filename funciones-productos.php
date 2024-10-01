<?php

function obtener_productos(){

    require 'informat-tienda.php';

    $sql = "SELECT * FROM producto;";

    $resultado = mysqli_query($conexion, $sql);
   return $resultado;

}