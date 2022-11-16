<?php

    require_once "../conexion.php";
    require_once "../metodosCrud.php";
    $nombre = $_POST['txtnombre'];
    $semestre = $_POST['opcion'];
    $creditos = $_POST['txtcreditos'];
    $carrera = $_POST['opcion2'];
    
    

    // $datos = array(
    //     $nombre, $semestre,$creditos,$carrera
    // );

    if ($carrera==1) {
        $n_carrera = "Sistemas";
        $datos= array(
            $nombre, $semestre,$creditos,$n_carrera
        ); 

    }elseif ($carrera==2) {
        $n_carrera = "industrial";
        $datos = array(
            $nombre, $semestre,$creditos,$n_carrera
        );
    }elseif ($carrera==3) {
        $n_carrera = "gestion";
        $datos = array(
            $nombre, $semestre,$creditos,$n_carrera
        );
    }

    $obj = new metodos();

    if ($obj->insertarDatosNombre($datos)==1) {
        header("location:../index.php");
    }else {
        echo "fallo agregar";
    }

?>