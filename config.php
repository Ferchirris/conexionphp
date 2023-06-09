<?php
    const DBHOST="localhost";
    const DBUSER="root";
    const PASSWORD="";
    const DB="mytwiterprueba";

    function connect(){
        $conexion=mysqli_connect(DBHOST,DBUSER,PASSWORD,DB);//<-se conecta a la base de datos
        return $conexion;//<-si no se contecta rregresara el valor boleano de FALSE
    }
    //var_dump(connect());
?>