<?php
function conectar(){
    $servername='localhost';
$database='usuarios';
$username='root';
$password='';

if(!($conn= mysqli_connect($servername,$username,$password))){
    print("error");
    exit();
}

if(!mysqli_select_db($conn,$database)){
    print("error en la base de datos");
    exit();
}
return $conn;
}
?>