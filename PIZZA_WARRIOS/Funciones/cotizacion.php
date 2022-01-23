<?php

    include("../conexion/conexion.php");

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $descripcion=$_POST['descripcion'];

    if($nombre=="" || $correo=="" || $telefono=="" || $descripcion==""){
        echo "vacio";
    }else{
        $query="INSERT INTO $table1 (nombre,correo,telefono,descripcion) values('$nombre','$correo','$telefono','$descripcion')";
        echo mysqli_query($conexion,$query);
    }