<?php
//validacion
    $include=include("./config.php");
    $con=connect();

    if($include && $con)
    {
        echo"Pro";
    }
    else{
        echo"YAAAA";
    }
    
    if($include && $con)//verificar que la conexion este pro 
    {
        //datos para ingresar a la base de datos
        $ID_USUARIO=0;
        $descripcion="ya me canse XD";
        $fecha="01/06/23";
        $hora="11:11";
        $corazon=200;
        $n_comenatrios=100;
        $n_retuits=150;

        //mete info 
        $peticion="INSERT INFO publicación VALUES(0,1, '$descripcion', '$fecha', '$hora', '$corazon', $n_comentarios, $n_retuits)";
        $query=mysql_query($con,$peticion);
        //borra info
        $peticion="DELETE FROM publicacion WHERE ID_PUB=7;";
        $query=mysqli_query($con,$peticion);

        $sql="SELECT *FROM USUARIOS";//regresa lo que pides
        $query=mysqli_query($con,$sql);
        $datos=mysqli_fetch_array($query);
        //var_dump($query); (regresafalse si no lo conecto bien)
        $sql="SELECT *FROM publicacion";
        $query=mysqli_query($con,$sql):

        while($row=mysqli_fetch_array($query))
        {
            echo "<br>";
            var_dump($row);
        }
    }