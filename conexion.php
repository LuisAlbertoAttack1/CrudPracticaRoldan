<?php
    class Conectar{
        private $servidor = "localhost";
        private $usuario = "MiServidorAdmin";
        private $bd = "crudMaterias";
        private $password = "12345";
        private $port = "3306";

        public function conexion(){

            $conexion = mysqli_connect(

                $this->servidor,
                $this->usuario,
                $this->password,
                $this->bd,
                $this->port
            );

            return $conexion;
        }

    }
    // $obj = new Conectar();
    // if ($obj->conexion()) {
    //     echo "conectado";
    // }else {
    //     echo "fallo";
    // }

?>