<?php 
    include("conexion.php");
    $link= conectar();
    $query="SELECT * FROM  usuario  ";
    $consulta= mysqli_query($link , $query);

    $dato=mysqli_num_rows($consulta);
    $col=mysqli_num_fields($consulta);
    print("<br>no. Columnas => $col <br>");
    print("no registros => $dato");
?>