<?php
session_start();
include("conexion/conexion.php");
$mensaje="";

if(isset($_POST['btnAction'])){
    switch($_POST['btnAction']){
        case 'Agregar':
            if(is_numeric($_POST['id'])){
                $ID=$_POST['id'];
                $mensaje.="OK ID: ".$ID."<br/>";
            }else{
                $mensaje.="Fallo al agregar producto"."<br/>";
            }
            if(is_string($_POST['nombre'])){
                $NOMBRE=$_POST['nombre'];
                $mensaje.="si nombre: ".$NOMBRE."<br/>";
            }else{
                $mensaje.="Fallo al agregar orden"."<br/>";
            }
            if(is_string($_POST['tamanio'])){
                $TAMANIO=$_POST['tamanio'];
                $mensaje.="si tamanio: ".$TAMANIO."<br/>";
            }else{
                $mensaje.="Fallo al agregar orden"."<br/>";
            }
            if(is_numeric($_POST['cantidad'])){
                $CANTIDAD=$_POST['cantidad'];
                $mensaje.="si cantidad: ".$CANTIDAD."<br/>";
            }else{
                $mensaje.="Fallo al agregar orden"."<br/>";
            }

            if(!isset($_SESSION['ORDENES'])){
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'TAMANIO'=>$TAMANIO,
                    'CANTIDAD'=>$CANTIDAD,
                );
                $_SESSION['ORDENES'][0]=$producto;
                $mensaje="Orden Agregada";
            }else{
                
                    $numeroProductos=count($_SESSION['ORDENES']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'TAMANIO'=>$TAMANIO,
                        'CANTIDAD'=>$CANTIDAD,
                    );
                    $_SESSION['ORDENES'][$numeroProductos]=$producto;
                    $mensaje="Orden Agregada";
                
            }

        break;

        case 'Eliminar':
            if(is_numeric($_POST['id'])){
                $ID=$_POST['id'];

                foreach($_SESSION['ORDENES'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['ORDENES'][$indice]);
                        $resul='eliminado';
                    }
                }
            }else{
                $mensaje.="Error en el Sistema";
            }
        break;
    }
}