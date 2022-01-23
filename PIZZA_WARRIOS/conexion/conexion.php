<?php

$localhost="localhost";
$user="root";
$pass="";
$basedatos="pizzawarios";

$table1="cotizaciones";
$table2="productos";
error_reporting(0);

$conexion=new mysqli($localhost,$user,$pass,$basedatos);

if($conexion->connect_errono){
    echo"<script>
    alert('La conexion fallo');
    </script>";
    exit();
}