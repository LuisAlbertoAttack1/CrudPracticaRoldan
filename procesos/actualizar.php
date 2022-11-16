<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre = $_POST['txtnombre'];
    $semestre = $_POST['opcion'];
    $creditos = $_POST['txtcreditos'];
    $carrera = $_POST['opcion2'];
    $id=$_POST['id'];


    if ($carrera==1) {
        $n_carrera = "Sistemas";
        $datos= array(
            $nombre, $semestre,$creditos,$n_carrera,$id
        ); 

    }elseif ($carrera==2) {
        $n_carrera = "industrial";
        $datos = array(
            $nombre, $semestre,$creditos,$n_carrera,$id
        );
    }elseif ($carrera==3) {
        $n_carrera = "gestion";
        $datos = array(
            $nombre, $semestre,$creditos,$n_carrera,$id
        );
    }

    $obj = new metodos();
    $respuesta = $obj->actualizaDatosNombre($datos);
    if ($respuesta==1) {
       header("location:../index.php");
    } else {
        echo "fallo al actualizar";
    }
    
?>