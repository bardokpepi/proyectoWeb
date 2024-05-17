<?php
include("php/conexion.php");

$nombre = $_REQUEST['registro1'];
$correo = $_REQUEST['registro2'];
$contra = $_REQUEST['registro3'];

$link = conectar();
if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Preparar la consulta para buscar el usuario
$stmt = $link->prepare("SELECT * FROM usuario WHERE USER = ?");
$stmt->bind_param("s", $nombre);
$stmt->execute();
$result = $stmt->get_result();

// Comprobar si el usuario ya existe
if ($link && $result->num_rows == 0) {
    // Insertar el nuevo usuario
    $stmt = $link->prepare("INSERT INTO usuario (CORREO, USER, PASS) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $correo, $nombre, $contra);
    $stmt->execute();

    session_start();
    $_SESSION['user'] = $nombre;
    $_SESSION['id'] = $stmt->insert_id;

    echo '<script>window.location.href = "http://localhost/proyecto/todobien.php";</script>';

    $stmt->close();
    mysqli_close($link);
    exit();
} else {
    echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';
    mysqli_close($link);
    exit();
}
?>
