<?php
     include("php/conexion.php");
     $user=$_REQUEST['inicio1'];
     $pass=$_REQUEST['inicio2'];
        $link= conectar();
        $consulta="SELECT * FROM  usuario WHERE `USER` = '".$user."'";
        $consulta2=mysqli_query($link,$consulta);
        $dato=mysqli_num_rows($consulta2); 
        if($dato==0){
                echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';

        }else{
                $fila=mysqli_fetch_row($consulta2);
                
                if($fila[2]==$user && $fila[3]==$pass){
                        session_start();
                        $_SESSION['user']=$fila[2];
                        $_SESSION['id']=$fila[0];
                        echo '<script>window.location.href = "http://localhost/proyecto/todobien.php";</script>';
                }else{
                        echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';
                }
        }
        mysqli_close($link);
?>